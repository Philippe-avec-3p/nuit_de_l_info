<?php

namespace App\Service;

use GuzzleHttp\Client;

class FeedlyService
{
    private $httpClient;

    public function __construct()
    {
        $this->httpClient = new Client();
    }

    public function getFeeds($accessToken)
    {
        // Effectuer une requête à l'API Feedly avec l'access token
        // ...

        $response = $this->httpClient->get('https://api.feedly.com/v3/feeds', [
            'headers' => [
              'Authorization' => 'Bearer ' . $accessToken,
           ]]);

        // Retourner les données de la réponse
        // return json_decode($response->getBody(), true);
    }
}