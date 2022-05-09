<?php

use App\Http\Controllers\FrontendController;
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

Route::group(['as' => 'fe-pages.'], function () {
    Route::get('/', [FrontendController::class, 'homePage'])->name('home');
    Route::get('/blog', [FrontendController::class, 'blogPage'])->name('blog');
    Route::get('/3d-modely', [FrontendController::class, 'modelsPage'])->name('3d-models');
    Route::get('/kontakt', [FrontendController::class, 'contactPage'])->name('contact');
});
