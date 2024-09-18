<?php

namespace App\Controller;

use App\Entity\Document;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;

use App\Service\RssService;
use App\Service\XmlReader;
use Doctrine\ORM\EntityManagerInterface;
use App\Repository\DocumentRepository;

#[Route('/rss')]
class GetRssController extends AbstractController
{

    public function __construct(
        private RssService $service,
        private XMLReader $xmlReader,
        private EntityManagerInterface $entityManager,
        private DocumentRepository $repository
    ) {}
    
    #[Route('/save/{source}', name: 'app_save_source_rss')]
    public function save(string $source): Response 
    {
        try {
            $feed = $this->service->fetchOne($source);
            $data = $this->xmlReader->xmlToArray($feed);
            $this->service->process($data['channel'], $source);

            return new JsonResponse([
                $source => $data
            ]);

        } catch (\Exception $e) {

        }
    }

    #[Route('/save', name: 'app_save_all_rss')]
    public function save_all(): Response
    {
        try {
            // Fetch RSS feeds
            $rssFeeds = $this->service->fetchMultiple();
            $array = [];
            foreach ($rssFeeds as $source => $feed) {
                $data = $this->xmlReader->xmlToArray($feed);
                
                $this->service->process($data['channel'], $source);
                $array[$source] = $data;
            }            

            // Return JSON response with the RSS feeds
            return new JsonResponse($array);
        } catch (\Exception $e) {
            // Handle any exceptions
            return new JsonResponse(['error' => $e->getMessage()], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
}
