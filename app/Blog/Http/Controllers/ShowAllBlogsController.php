<?php

namespace App\Blog\Http\Controllers;

use App\Blog\Blog;

class ShowAllBlogsController
{
    function __invoke()
    {
        $blogs = Blog::all();
        
        return view('pages.blogs.all', compact('blogs'));
    }
}
