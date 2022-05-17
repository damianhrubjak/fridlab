<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BackEndController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FileController;
use App\Http\Controllers\PrintModelController;
use App\Http\Controllers\PrintModelFileController;
use App\Http\Controllers\SponsorController;

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
    Route::get('/', function () {
        return redirect()->route('admin-pages.sponzori.index');
    });

    Route::resource('/blogy', BlogController::class)->parameters(['blogy' => 'blog:slug']);

    Route::resource('/modely/{printModel:slug}/subory', PrintModelFileController::class, ['names' => 'print-model-files'])->parameters(['subory' => 'file:slug'])->except(['edit', 'show']);

    Route::resource('/modely', PrintModelController::class)->parameters(['modely' => 'printModel:slug']);

    Route::resource('/sponzori', SponsorController::class)->parameters(["sponzori" => 'sponsor'])->except(['show', 'edit', 'update']);

    Route::post('/upload-image', [FileController::class, 'store'])->name('file-store');
});
