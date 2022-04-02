<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ShareController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\LikeController;

Route::apiResource('/v1/user', UserController::class);

Route::apiResource('/v1/share', ShareController::class);

Route::apiResource('/v1/comment', CommentController::class)->only([
  'index', 'store', 'update', 'destroy'
]);

Route::get('/comment', [CommentController::class, 'show']);

Route::apiResource('/v1/like', LikeController::class);