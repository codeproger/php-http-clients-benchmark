Сравнение производительности разных http-клиентов и подходов работы с ними

Конфиг:
```
return [
    'count' => 50, // количество повторений
    'url' => 'http://51.15.200.175/',
    'compare' => [
        Curl::class, // curl c init/close каждый раз
        CommonCurl::class, // // curl c init/close каждый раз
        Guzzle::class, // guzzle с созданием клиента каждый раз
        CommonGuzzle::class, // guzzle с созданием клиента один раз и переиспользованием
    ],
];
```

Мои результаты:
```
start test: App\Benchmarks\Curl
App\Benchmarks\Curl test done.
time: 34.680s
mempeak: 2.00Mb
memusage: 2.00Mb
start test: App\Benchmarks\CommonCurl
App\Benchmarks\CommonCurl test done.
time: 10.969s
mempeak: 2.00Mb
memusage: 2.00Mb
start test: App\Benchmarks\Guzzle
App\Benchmarks\Guzzle test done.
time: 32.870s
mempeak: 2.00Mb
memusage: 2.00Mb
start test: App\Benchmarks\CommonGuzzle
App\Benchmarks\CommonGuzzle test done.
time: 11.283s
mempeak: 2.00Mb
memusage: 2.00Mb
done
```

Как видим из результатов, подход с переиспользованием коннекта 
работает быстрее чем пересоздание каждый раз 
