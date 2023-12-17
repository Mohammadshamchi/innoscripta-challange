<?php
use App\Http\Controllers\UserController;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\UserPreferenceController;

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
Route::post('/login', [UserController::class, 'login'])->name('login');

// This route is using Sanctum for authentication
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// These routes are outside of the 'auth:sanctum' middleware group
// and are using 'auth:api' instead.

// User preference routes
Route::middleware('auth:api')->group(function () {
    Route::post('/user/preferences', [UserPreferenceController::class, 'update']);
    Route::get('/user/preferences', [UserPreferenceController::class, 'get']);
});

// Public route for articles
Route::get('/articles', [ArticleController::class, 'index']);
