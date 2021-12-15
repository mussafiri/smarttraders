<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\contactUsController;
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

Route::get('/', function () {
    return view('home');
});
Route::get('about', function () {
    return view('about');
});
Route::get('what_we_do', function () {
    return view('what_we_do');
});
Route::get('asset', function () {
    return view('asset_management');
});
Route::get('/asset/under_management', function () {
    return view('asset_under_management');
});
Route::get('blog-details', function () {
    return view('blog-details');
});
Route::get('blog-sidebar', function () {
    return view('blog-sidebar');
});
Route::get('blog', function () {
    return view('blog');
});
Route::get('contact', function () {
    return view('contact');
});
Route::get('faq', function () {
    return view('faq');
});
Route::get('index-2', function () {
    return view('index-2');
});
Route::get('investment', function () {
    return view('investment');
});
Route::get('login', function () {
    return view('auth.login');
});
Route::get('reset/password', function () {
    return view('auth.password.reset');
});
Route::get('review', function () {
    return view('review');
});
Route::get('signup', function () {
    return view('auth.signup');
});
Route::get('team', function () {
    return view('team');
});
Route::get('Sylvanus/Clemence', function () {
    return view('director_1');
});
Route::get('Mike/Sallu', function () {
    return view('director_2');
});
Route::get('Steven/Ndaula', function () {
    return view('director_3');
});
Route::get('Ammer/Alhariri', function () {
    return view('director_4');
});
Route::get('Anthnony/Witherspoon', function () {
    return view('director_5');
});
Route::post('contact','contactUsController@contact_Us_emailSend');