<?php

use App\Http\Controllers\Admin\ChatController;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/chat/start/{chat_id}', [ChatController::class, 'startTime'])->name('start.chat');
Route::post('/chat/end/{chat_id}', [ChatController::class, 'endTime'])->name('end.chat');
Route::get("get/provinces", [App\Http\Controllers\ToolsController::class, 'getProvinces'])->name('api.get.provinces');
Route::get("get/cities", [App\Http\Controllers\ToolsController::class, 'getCities'])->name('api.get.cities');