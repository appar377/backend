<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginuserController;

Route::apiResource('/v1/rest', LoginuserController::class);
