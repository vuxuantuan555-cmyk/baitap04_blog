<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\Admin\PostController as AdminPostController;

Route::get('/', [PostController::class, 'index']);
Route::get('/posts/{slug}', [PostController::class, 'show']);

Route::prefix('admin')->group(function () {
    Route::resource('posts', AdminPostController::class);
});
