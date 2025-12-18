<?php

use Illuminate\Support\Facades\Route;
use Modules\Blog\Http\Controllers\Web\BlogController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register Web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "Web" middleware group. Now create something great!
|
*/

Route::group([], function () {
    Route::get('/blogs', [BlogController::class, 'index'])->name('blog.index');
    Route::get('/blogs/{blog}', [BlogController::class, 'show'])->name('blog.show');
});
