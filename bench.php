<?php

use App\Benchmarks\BenchmarkInterface;

require_once __DIR__ . '/vendor/autoload.php';
$config = require __DIR__ . '/config/benchmark.php';
$testsCount = $config['count'];
$testUrl = $config['url'];


$classes = $config['compare'];
foreach ($classes as $class) {
    $bench = new Ubench();
    echo 'start test: ' . $class . PHP_EOL;
    $bench->start();

    /** @var BenchmarkInterface $testInstance */
    $testInstance = new $class;

    $counter = 0;
    while ($counter < $testsCount) {
        $testInstance->getUrl($testUrl);
        ++$counter;
    }
    $bench->end();
    echo $class . ' test done. ' . PHP_EOL;
    echo sprintf('time: %s' . PHP_EOL, $bench->getTime());
    echo sprintf('mempeak: %s' . PHP_EOL, $bench->getMemoryPeak());
    echo sprintf('memusage: %s' . PHP_EOL, $bench->getMemoryUsage());
}

echo "done\n";