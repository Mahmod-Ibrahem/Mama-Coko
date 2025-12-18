<?php

use Illuminate\Support\Facades\Route;
use Modules\Review\Entities\Review;

/* About */

Route::get('/about', function () {
    $reviews = Review::all();
    return view('about', compact('reviews'));
})->name('about');
Route::fallback(function () {
    return view('404');
});
