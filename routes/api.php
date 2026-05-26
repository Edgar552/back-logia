<?php

use Illuminate\Support\Facades\Route;
use App\Models\News;

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
