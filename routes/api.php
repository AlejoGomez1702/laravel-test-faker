<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestFakerController;
use App\Http\Controllers\EmployeeController;

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
Route::get('/test-faker', [TestFakerController::class, 'testFaker']);
Route::get('/test-faker/user', [TestFakerController::class, 'testFakerUser']);

Route::get('/employees/one', [EmployeeController::class, 'addOneEmployee']);
Route::get('/employees/many/{count}', [EmployeeController::class, 'addCountEmployees']);



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
