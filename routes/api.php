<?php

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

/* ========== USED :: START ========== */
use App\Http\Controllers\TestAPIController;
/* ========== USED :: END ========== */


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/test', [TestAPIController::class, 'Test']);

Route::get('/test-function', function(){
    return response()->json(['teste'=>'teste']);
});