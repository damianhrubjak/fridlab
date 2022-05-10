<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\FileController;
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

// FE pages
Route::group(['as' => 'fe-pages.'], function () {
    Route::get('/', [FrontendController::class, 'homePage'])->name('home');
    Route::get('/blog', [FrontendController::class, 'blogPage'])->name('blog');
    Route::get('/3d-modely', [FrontendController::class, 'modelsPage'])->name('3d-models');
    Route::get('/kontakt', [FrontendController::class, 'contactPage'])->name('contact');
    Route::get('/prihlasenie', [FrontendController::class, 'loginPage'])->name('login')->middleware('guest');
});


// AUTH
Route::group(
    ['as' => 'auth.'],
    function () {
        Route::post('/login', [AuthController::class, 'store'])->name('login');
        Route::post('/logout', [AuthController::class, 'destroy'])->middleware('auth')->name('logout');
    }
);


// Files
Route::get('/subor/{file:slug}', [FileController::class, 'serveForUrl'])->name('file-serve');
Route::get('/nahladovy-obrazok/{file:slug}', [FileController::class, 'serveThumbnailForUrl'])->name('file-thumbnail-serve');

//* Admin
require __DIR__ . '/admin.php';
