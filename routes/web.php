<?php

use App\Http\Controllers\ComplainController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;

use Illuminate\Http\Request;
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
    return view('welcome');
});

Route::resource('form', ComplainController::class);
Route::get('/home', [ComplainController::class, 'viewHome']);
Route::get('/edit/{id}', [ComplainController::class, 'edit']);
Route::post('/update', [ComplainController::class, 'update']);



