<?php

namespace App\Benchmarks;

use GuzzleHttp\Client;

class Guzzle extends AbstractBenchmark
{
    public function getUrl(string $url): void
    {
        (new Client())->request('GET', $url, []);
    }
}