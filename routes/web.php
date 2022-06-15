<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ApiController;
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

// Route::get('/table', function () {
//     return view('tables');
// });

// Route::get('/ajax', function () {
//     return view('ajaxtable');
// });

Route::get('/table',[HomeController::class, 'dataTable']);

Route::get('/ajax',[HomeController::class, 'ajaxTable']);

Route::get('/index',[ApiController::class, 'getInfo'])->name('index');

