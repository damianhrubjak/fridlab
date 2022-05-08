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

Route::view('/about-us', 'pages.about-us');

Route::get('/', [FrontendController::class, 'homePage'])->name('page-home');
Route::get('/about-us', [FrontendController::class, 'aboutUsPage'])->name('page-about-us');
Route::get('/contact', [FrontendController::class, 'contactPage'])->name('page-contact');
