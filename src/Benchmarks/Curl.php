<?php

namespace App\Benchmarks;

class Curl implements BenchmarkInterface
{
    public function getUrl(string $url): void
    {
        $ch = curl_init($url);
        curl_setopt_array($ch, [
            CURLOPT_HEADER => 1,
            CURLOPT_RETURNTRANSFER => 1,
        ]);
        curl_exec($ch);
        curl_close($ch);
    }
}