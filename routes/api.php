<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\UsersController;
use App\Http\Controllers\Api\CountriesController;
use App\Http\Controllers\Api\DepartamentsController;
use App\Http\Controllers\Api\SchoolsController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});



Route::resource('users', UsersController::class);
Route::resource('countries', CountriesController::class);
Route::resource('departaments', DepartamentsController::class);

Route::resource('schools', SchoolsController::class);

