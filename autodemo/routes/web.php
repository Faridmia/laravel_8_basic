<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;


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
    return view('welcome');
});

Route::get('/auth', function () {
    return view('auth');
});

Route::get('/auth2', function () {
   echo "heloo auth middleware";
})->middleware('auth');

Route::get('/auth3', function () {
    if(Auth::check()){
        echo "You are logged in ".Auth::user()->name;
    }else{
        echo "you are guest";
    }
 });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/demo', [App\Http\Controllers\HomeController::class, 'demo'])->name('demo');
Route::get('/demo', [HomeController::class, 'index'])->name('demo');
