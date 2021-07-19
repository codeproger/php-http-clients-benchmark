<?php
namespace App\Benchmarks;

use GuzzleHttp\Client;

class CommonGuzzle extends AbstractBenchmark
{
    private Client $client;

    public function __construct()
    {
        $this->client = new Client();
    }

    public function getUrl(string $url): void
    {
        $this->client->request('GET', $url, []);
    }
}