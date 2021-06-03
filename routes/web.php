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

Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');

// Dummy Data Links
Route::get('/dummy-data-piechart', [App\Http\Controllers\Controller::class, 'PieChart'])->name('dummy-data-piechart');
Route::get('/dummy-data-curvedchart', [App\Http\Controllers\Controller::class, 'CurvedChart'])->name('dummy-data-curvedchart');

Route::get('/dummy-data-likes', [App\Http\Controllers\Controller::class, 'Likes'])->name('dummy-data-likes');
Route::get('/dummy-data-users', [App\Http\Controllers\Controller::class, 'Users'])->name('dummy-data-users');
Route::get('/dummy-data-uploads', [App\Http\Controllers\Controller::class, 'Uploads'])->name('dummy-data-uploads');
Route::get('/dummy-data-stars', [App\Http\Controllers\Controller::class, 'Stars'])->name('dummy-data-stars');
