<?php

use Illuminate\Support\Facades\Auth;
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
    // return auth()->check() ? redirect('home') : redirect('/login');
     return view('auth.login');
});


Auth::routes();

Auth::routes(['register' => false]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/dummy-data-piechart', [App\Http\Controllers\Controller::class, 'PieChart'])->name('dummy-data-piechart');
Route::get('/duppy-data-curvedchart', [App\Http\Controllers\Controller::class, 'CurvedChart'])->name('duppy-data-curvedchart');
