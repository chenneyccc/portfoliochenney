<?php

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
Route::get('/about', function () {
    return view('about');
});
Route::get('/stage', function () {
    return view('stage');
});

Route::get('/portfolio', function () {
    return view('portfolio');
});

Route::get('/', function () {
    return view('index');
});

Route::get('/kerntaken', function () {
    return view('kerntaken');
});

Route::get('/kerntaak1', function () {
    return view('kerntaak1');
});

Route::get('/kerntaak3', function () {
    return view('kerntaak3');
});

Route::get('/kerntaak4', function () {
    return view('kerntaak4');
});

Route::get('/film', function () {
    return view('video');
});

Route::get('/keuzedelen', function () {
    return view('keuzedelen');
});

Route::get('/kerntaak2', function () {
    return view('kerntaak2');
});


Route::get('/index', function () {
    return view('index');
});

Route::get('/html', function () {
    return view('htmlcss');
});

Route::get('/javascript', function () {
    return view('javascript');
});

Route::get('/java', function () {
    return view('java');
});
Route::get('/php', function () {
    return view('php');
});



Route::get('/beroepsexamen', function () {
    return view('beroepsexamen');
});










Auth::routes();

Route::resource('home', \App\Http\Controllers\HomeController::class );


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
