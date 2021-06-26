<?php

namespace App\Service;

use Symfony\Contracts\HttpClient\HttpClientInterface;

class ApiService
{
    private $client;

    public function __construct(HttpClientInterface $client)
    {
        $this->client = $client;
    }

    public function getQuote(): array
    {
        $response = $this->client->request(
            'GET',
            'https://api.github.com/repos/symfony/symfony-docs'
        );
        $content = $response->toArray();
    }
}
?>