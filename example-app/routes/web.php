<?php

use Illuminate\Support\Facades\Route;

$request = $_SERVER['REQUEST_URI'];

switch ($request) {
    case 'index()' :
        require __DIR__ . '/resources/blade.php';
        break;
    case 'edit()' :
        require __DIR__ . '/resources/blade.php';
        break;
    case 'create()' :
        require __DIR__ . '/resources/blade.php';
        break;
    default:
        http_response_code(404);
        require __DIR__ . '/resources/blade.php';
        break;
}

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
});
