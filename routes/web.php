<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\teamController;
use App\Http\Controllers\buildController;
use App\Http\Controllers\errorController;
use Monolog\Processor\HostnameProcessor;

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

Route::get('/', [HomeController::class, 'index']);

Route::get('/team', [teamController::class, 'index']);

Route::controller(buildController::class)->group(function(){
    Route::get('/comunicaciones', 'index');
    Route::get('/redescomplejas', 'index');
    Route::get('/eventos', 'index');
});

/*Route::controller(errorController::class)->group(function(){
    Route::get('eventos/{word}', 'index');
    Route::get('comunicaciones/{word}', 'index');
    Route::get('redescomplejas/{word}', 'index');
    Route::get('/{word}', 'index');
});
*/

//Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
