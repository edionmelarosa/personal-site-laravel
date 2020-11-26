<?php

namespace App\Http\Controllers;

use App\Blog\Blog;

class HomeController
{
    function __invoke()
    {
        $blogs = Blog::limit(6);

        return view('pages.home', compact('blogs'));
    }
}
