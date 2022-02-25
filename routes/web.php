<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProgramController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, 'index']);

Route::prefix('category')->group(function () {
    Route::get('marbel-edu-games', [ProductController::class, 'eduGames']);
    Route::get('marbel-and-friends-kids-games', [ProductController::class, 'kidsGames']);
    Route::get('riri-story-books', [ProductController::class, 'storyBooks']);
    Route::get('kolak-kids-songs', [ProductController::class, 'kidsSongs']);
});

Route::get('news/{slug?}', [NewsController::class, 'show']);

Route::prefix('program')->group(function () {
    Route::get('karir', [ProgramController::class, 'karir']);
    Route::get('magang', [ProgramController::class, 'magang']);
    Route::get('kunjungan-industri', [ProgramController::class, 'kunjungan']);
});

Route::get('about-us', [AboutController::class, 'about']);
