<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::prefix('manager')->name('manager')->group(function () {

    Route::prefix('users')->name('users')->group(function () {
        Route::apiResource('' , \App\Http\Controllers\Panel\UserController::class);
            Route::post('add-wallet/{user}' , [\App\Http\Controllers\Panel\UserController::class , 'add_wallet'])->name('add-wallet');
    });
});
//
//Route::get('/' , function (Request $request) {
//   dd($request->ip());
//});

