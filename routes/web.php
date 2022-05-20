<?php

use App\Models\Sponsor;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\FileController;
use App\Http\Controllers\FrontendController;

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
Route::group([
    'as' => 'fe-pages.', 'prefix' => '{language}',
    'where' => ['locale' => '[a-zA-Z]{2}'],
    'middleware' => 'set-locale',
], function () {
    Route::get('/', [FrontendController::class, 'homePage'])->name('home');
    /* Route::get('/{locale?}', function ($locale = null) {
        if (isset($locale) && in_array($locale, config('app.available_locales'))) {
            app()->setLocale($locale);
        }
        $sponsors = Sponsor::with('image')->get();
        return view('pages.home', compact('sponsors'));
    })->name('home');*/

    Route::get('/blogy', [FrontendController::class, 'blogPage'])->name('blogy');
    Route::get('/blogy/{blog:slug}', [FrontendController::class, 'showBlog'])->name('blogShowPage');
    Route::get('/3d-modely', [FrontendController::class, 'modelsPage'])->name('3d-models');
    Route::get('/3d-modely/{printModel:slug}', [FrontendController::class, 'showModel'])->name('modelShowPage')->middleware('print-model-private');
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
Route::get('/stiahnut-subor/{file:slug}', [FileController::class, 'downloadFile'])->name('file-download');

//* Admin
require __DIR__ . '/admin.php';
