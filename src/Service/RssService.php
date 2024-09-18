<?php

namespace App\Service;

use App\Entity\Document;
use App\Repository\DocumentRepository;
use Doctrine\ORM\EntityManagerInterface;

class RssService {
    function __construct(
        private array $siteUrls,
        private EntityManagerInterface $entityManager,
        private DocumentRepository $repository,
    ) {}

    /**
     * Fetches the RSS feed from the given URL.
     *
     * @param string $url The URL of the RSS feed.
     * @return string The RSS feed content.
     * @throws Exception If the URL is invalid or the request fails.
     */
    public function fetch(string $url): string {
        if (!filter_var($url, FILTER_VALIDATE_URL)) {
            throw new \Exception("Invalid URL");
        }

        $rss = @file_get_contents($url);

        if ($rss === false) {
            throw new \Exception("Failed to fetch RSS feed from $url");
        }

        return $rss;
    }

    /**
     * Fetches RSS feeds from an array of URLs.
     *
     * @param array $urls Array of RSS feed URLs.
     * @return array Associative array where keys are URLs and values are RSS feed contents.
     * @throws Exception If fetching any RSS feed fails.
     */
    public function fetchMultiple(): array {
        
        $results = [];
        foreach ($this->siteUrls as $source => $url) {
            $results[$source] = $this->fetch($url);
        }
        return $results;
    }

    /**
     * Fetches RSS feeds from an array of URLs.
     *
     * @param array $urls Array of RSS feed URLs.
     * @return array Associative array where keys are URLs and values are RSS feed contents.
     * @throws Exception If fetching any RSS feed fails.
     */
    public function fetchOne($requestedSource): string {
        
        foreach ($this->siteUrls as $source => $url) {
            if (strtolower($requestedSource) === strtolower($source)) {
                return $this->fetch($url);
            }
        }
    }


    public function process(array $channel, string $source): void
    {
        if (isset($channel['item']) && !empty($channel['item'])) {
            foreach ($channel['item'] as $item) {
               $this->createDocument($source, $item, false);
            }
            
            // Flush the EntityManager to save all documents at once
            $this->entityManager->flush();
        }
    }

    public function createDocument(string $source, array $item, bool $flush) {
        if (isset($item['link'])) {
            $existingDocument = $this->repository->findOneBy(['link' => $item['link']]);
        
            if ($existingDocument) {
                // Document already exists, handle accordingly (e.g., skip, update, etc.)
                return null;
            }

            $doc = new Document();

            // Ensure you map the fields correctly from the RSS feed to your entity
            $doc->setLink($item['link']);

            if (isset($item['title'])) {
                $doc->setTitle($item['title']);
            }
            if (isset($item['description'])) {
                $doc->setDescription(strip_tags($item['description']));
            }
            if (isset($item['pubDate'])) {
                $publishedAt = \DateTimeImmutable::createFromFormat(DATE_RSS, $item['pubDate']);
                if ($publishedAt) {
                    $doc->setPublishedAt($publishedAt);
                } else { 
                    // TODO: watch out
                    $doc->setPublishedAt(\DateTimeImmutable::createFromFormat(DATE_RSS, date('D, d M Y H:i:s O')));
                }
            }
            if (isset($item['category']) && is_array($item['category'])) {
                $categories = substr(implode(', ', $item['category']), 0, 2499);
                $doc->setCategory($categories);
            } else if(isset($item['category']) && is_string($item['category'])) {
                $doc->setCategory($item['category']);
            }
            
            // Set source of the document
            if (isset($source)) {
                $doc->setSource($source);
            }
            
            try {
                $this->entityManager->persist($doc); 
    
                if ($flush) {
                    $this->entityManager->flush(); 
                }
                
            } catch (\Exception $e) {
                return null;
            }
    
            return true;
        }
    }
}