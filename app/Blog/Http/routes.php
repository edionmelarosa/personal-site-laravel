<?php

use App\Blog\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;

Route::get('/blogs/{slug}', BlogController::class);
