<?php

namespace App\Service;

use Symfony\Contracts\HttpClient\HttpClientInterface;


class CallApiService 
{

  private $client;

    public function __construct(HttpClientInterface $client)
    {
        $this->client = $client;
    }

    public function getQuotable(): array 
    {
      $response = $this->client->request(
        'GET',
        'https://api.quotable.io/random'
      );
      return $response->toArray();
    }
  
    
}
