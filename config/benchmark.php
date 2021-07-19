<?php

use App\Benchmarks\CommonCurl;
use App\Benchmarks\CommonGuzzle;
use App\Benchmarks\Curl;
use App\Benchmarks\Guzzle;

return [
    'count' => 50,
    'url' => 'http://51.15.200.175/',
    'compare' => [
        Curl::class,
        CommonCurl::class,
        Guzzle::class,
        CommonGuzzle::class,
    ],
];