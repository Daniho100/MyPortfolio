<?php

use App\Http\Controllers\HomeController;
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

Route::get('/', function () {
    return view('home');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


Route::get('/skills', [HomeController::class,'skills']);

Route::get('/certs', [HomeController::class,'certs']);

Route::get('/about', [HomeController::class,'about']);

Route::get('/projects', [HomeController::class,'projects']);

Route::get('/contact', [HomeController::class,'contact']);

Route::post('/message', [HomeController::class,'contactmsg']);