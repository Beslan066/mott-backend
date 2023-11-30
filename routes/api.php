<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('authors', App\Http\Controllers\Admin\AuthorController::class);
Route::resource('tales', App\Http\Controllers\Admin\TaleController::class);
Route::resource('kics', App\Http\Controllers\Admin\KicController::class);
Route::resource('science-articles', App\Http\Controllers\Admin\ScienceArticleController::class);
Route::resource('lit-reviews', App\Http\Controllers\Admin\LitReviewController::class);
Route::resource('lit-reviews-ing', App\Http\Controllers\Admin\LitReviewIngController::class);
Route::resource('journalism', App\Http\Controllers\Admin\JournalismController::class);
Route::resource('journalism-ing', App\Http\Controllers\Admin\JournalismTranslateController::class);
