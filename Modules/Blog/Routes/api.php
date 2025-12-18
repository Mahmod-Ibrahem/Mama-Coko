<?php

use Illuminate\Support\Facades\Route;
use Modules\Blog\Http\Controllers\Api\BlogController;

/*
 *--------------------------------------------------------------------------
 * API Routes
 *--------------------------------------------------------------------------
 *
 * Here is where you can register API routes for your application. These
 * routes are loaded by the RouteServiceProvider within a group which
 * is assigned the "api" middleware group. Enjoy building your API!
 *
*/

Route::middleware(['auth:sanctum'])->group(function () {
    Route::get('blog', [BlogController::class, 'index']);
    Route::post('blog', [BlogController::class, 'store']);
    Route::get('blog/{blog}', [BlogController::class, 'show']);
    Route::put('blog/{blog}', [BlogController::class, 'update']);
    Route::patch('blog/{blog}', [BlogController::class, 'update']);
    Route::delete('blog/{blog}', [BlogController::class, 'destroy']);
});
