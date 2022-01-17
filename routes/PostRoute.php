<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;



Route::post('postBlog', [PostController::class, 'post'])->name('post');
