<?php

use App\Http\Controllers\ComplaintController;
use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Public routes
// Route::resource('complaint', ComplaintController::class);
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::get('/complaint', [ComplaintController::class, 'index']);
Route::get('/complaint/{id}', [ComplaintController::class, 'show']);
Route::get('complaint/search/{name}', [ComplaintController::class, 'search']);

// Protected routes
Route::group(['middleware' => ['auth:sanctum']], function () {
Route::post('/complaint', [ComplaintController::class, 'store']);
Route::put('/complaint/{id}', [ComplaintController::class, 'update']);
Route::delete('/complaint/{id}', [ComplaintController::class, 'destroy']);
Route::post('/logout', [AuthController::class, 'logout']);
 });


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
