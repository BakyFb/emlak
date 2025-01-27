<?php

use Illuminate\Support\Facades\Route;

Route::controller(HomeController::class)
    ->group(function () {
        Route::get('', 'index')->name('home');

        Route::get('type/{slug}', 'type')
            ->where('slug', '[a-z-]+')->name('type');

        Route::get('location/{id}', 'location')
            ->where('id', '[0-9]+')->name('location');

        Route::get('realtor/{id}', 'realtor')
            ->where('id', '[0-9]+')->name('realtor');

        Route::get('comment/{slug}', 'comment')
            ->where('slug', '[a-z0-9-]+')->name('playlist');

        Route::get('comment/{slug}', 'comment')
            ->where('slug', '[a-z0-9-]+')->name('comment');
    });
