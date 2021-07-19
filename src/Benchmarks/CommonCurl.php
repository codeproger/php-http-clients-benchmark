<?php

namespace App\Benchmarks;

class CommonCurl extends AbstractBenchmark
{
    private $ch;

    public function __construct()
    {
        $this->ch = curl_init();
    }

    public function getUrl(string $url): void
    {
        curl_setopt_array($this->ch, [
            CURLOPT_URL => $url,
            CURLOPT_HEADER => 1,
            CURLOPT_RETURNTRANSFER => 1,
        ]);
        curl_exec($this->ch);
    }

    public function __destruct()
    {
        curl_close($this->ch);
    }
}