<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Manager;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/login', [Manager::class, 'login'])->name('login');
Route::post('/login', [Manager::class, 'loginPost'])->name('login.post');
Route::get('/registration', [Manager::class, 'regis'])->name('regis');
Route::post('/registration', [Manager::class, 'regisPost'])->name('regis.post');
Route::get('/logout', [Manager::class, 'logout'])->name('logout');

Route::get('/create', [Manager::class, 'create'])->name('create');