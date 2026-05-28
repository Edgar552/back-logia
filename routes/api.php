<?php

use Illuminate\Support\Facades\Route;
use App\Models\News;


Route::middleware('throttle:60,1')->group(function () {

    Route::get('/news', function () {

        return News::query()
            ->where('published', true)
            ->latest()
            ->get();
    });

    Route::get('/news/{slug}', function ($slug) {

        return News::query()
            ->where('slug', $slug)
            ->where('published', true)
            ->firstOrFail();
    });

    Route::post('/contact', [\App\Http\Controllers\Api\ContactController::class, 'send']);

});
