<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginUserController;

Route::apiResource('/v1/rest', LoginUserController::class);


Route::get('/hello', function () {
    return response()->json([
        'message' => 'Hello'
    ], 200);
});