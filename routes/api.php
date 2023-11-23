<?php

use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\TriviaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\UserController;

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

Route::get('/ping', fn() => response()->json("ping-message"))->name('api.ping');

Route::post('/register/email', [AuthController::class, 'emailRegister'])->name('api.register.email');
Route::post('/login/email', [AuthController::class, 'emailLogin'])->name('api.login.email');
Route::post('/login/{provider}', [AuthController::class, 'socialLogin'])->name('api.login.social');
Route::post('/logout', [AuthController::class, 'logout'])->name('api.logout');

Route::middleware('auth:api')->group(function () {
    Route::get('/user', [UserController::class, 'show']);
    Route::put('/user', [UserController::class, 'update']);

    Route::get('/trivia', [TriviaController::class, 'getForToday']);
    Route::post('/trivia/start', [TriviaController::class, 'start']);
    Route::post('/trivia/submit', [TriviaController::class, 'submit']);
});
