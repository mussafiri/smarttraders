<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebsiteController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
| #b99566
| #F8B232
*/

Route::get('/', function () { return view('index');});
Route::get('/aboutus', [WebsiteController::class, 'aboutus']);
Route::get('/investments', [WebsiteController::class, 'investments']);
Route::get('/products', [WebsiteController::class, 'products']);
Route::get('/contactus', [WebsiteController::class, 'contactus']);
Route::get('/privacy', [WebsiteController::class, 'privacy']);
Route::get('/terms', [WebsiteController::class, 'terms']);
Route::get('/disclaimer', [WebsiteController::class, 'disclaimer']);
Route::post('/submit/contactus', [WebsiteController::class, 'submitContactus']);
