<?php

namespace App\Http\Controllers;

use App\Blog\Blog;

class HomeController
{
    function __invoke()
    {
        $blogs = Blog::all()
            ->slice(0, 3);

        return view('pages.home', compact('blogs'));
    }
}
