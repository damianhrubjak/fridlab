<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BackEndController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PrintModelController;

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your administration of application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Admin pages
Route::group(['as' => 'admin-pages.', 'middleware' => ['auth'], 'prefix' => 'admin'], function () {
    Route::get('/', [BackEndController::class, 'homePage'])->name('home');

    Route::resource('/blogy', BlogController::class)->parameters(['blogy' => 'blog:slug']);

    Route::resource('/modely', PrintModelController::class)->parameters(['modely' => 'model:slug']);
});
