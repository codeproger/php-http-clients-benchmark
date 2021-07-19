<?php

namespace App\Benchmarks;

interface BenchmarkInterface
{
    public function getUrl(string $url): void;
}