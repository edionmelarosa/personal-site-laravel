<?php

use Illuminate\Support\Facades\Route;
use App\Blog\Http\Controllers\ShowBlogController;
use App\Blog\Http\Controllers\ShowAllBlogsController;

Route::get('/blogs', ShowAllBlogsController::class);
Route::get('/blogs/{slug}', ShowBlogController::class);
