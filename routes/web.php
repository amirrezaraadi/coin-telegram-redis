<?php

use Illuminate\Support\Facades\Redis ;
use Illuminate\Support\Facades\Route;

Route::get('test' , function () {
//    $response = Http::get('https://api.coingecko.com/api/v3/simple/price', [
//        'ids' => 'bitcoin,ethereum',
//        'vs_currencies' => 'usd'
//    ]);
    app('redis')->set('name' ,'dasdasdasda');
    dd(substr(base_convert(sha1(uniqid(mt_rand())), 20, 36), 0, 100));
    return 'does' ;
});


Route::get('test_one' , function () {
    dd(Redis::get('name'));
});

