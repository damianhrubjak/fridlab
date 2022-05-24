<?php

use App\Models\Sponsor;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\FileController;
use App\Http\Controllers\FrontEndController;

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

Route::redirect('/', '/' . app()->getLocale());

// FE pages
Route::group([
    'as' => 'fe-pages.',
    'prefix' => '{language?}',
    'where' => ['language' => '[a-zA-Z]{2}'],
    'middleware' => 'set-locale',
], function () {
    Route::get('/', [FrontEndController::class, 'homePage'])->name('home');
    Route::get('/blogy', [FrontEndController::class, 'blogPage'])->name('blogy');
    Route::get('/blogy/{blog:slug}', [FrontEndController::class, 'showBlog'])->name('blogShowPage');
    Route::get('/3d-modely', [FrontEndController::class, 'modelsPage'])->name('3d-models');
    Route::get('/3d-modely/{printModel:slug}', [FrontEndController::class, 'showModel'])->name('modelShowPage')->middleware('print-model-private');
    Route::get('/kontakt', [FrontEndController::class, 'contactPage'])->name('contact');
});


// AUTH
Route::group(
    ['as' => 'auth.'],
    function () {
        Route::get('/login', [FrontEndController::class, 'loginPage'])->name('login-page')->middleware('guest');
        Route::post('/login', [AuthController::class, 'store'])->name('login');
        Route::post('/logout', [AuthController::class, 'destroy'])->middleware('auth')->name('logout');
    }
);


// Files
Route::get('/subor/{file:slug}', [FileController::class, 'serveForUrl'])->name('file-serve');
Route::get('/nahladovy-obrazok/{file:slug}', [FileController::class, 'serveThumbnailForUrl'])->name('file-thumbnail-serve');
Route::get('/stiahnut-subor/{file:slug}', [FileController::class, 'downloadFile'])->name('file-download');

//* Admin
require __DIR__ . '/admin.php';
