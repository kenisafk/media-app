<?php

namespace App\Service;

use Symfony\Contracts\HttpClient\HttpClientInterface;

class DataFetcher
{
    private HttpClientInterface $httpClient;

    public function __construct(HttpClientInterface $httpClient)
    {
        $this->httpClient = $httpClient;
    }

    public function fetchFromUrl(string $url): string
    {
        $response = $this->httpClient->request('GET', $url);
        return $response->getContent();
    }
}
