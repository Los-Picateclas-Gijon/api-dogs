<?php

use App\Http\Controllers\DogApiController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::delete('/dogs/{id}',[DogApiController::class,'destroy']);


// App\Http\Controllers\DogApiController@destroy 
// [DogApiController::class,'destroy']
Route::get('/dogs',[DogApiController::class, 'index']);
