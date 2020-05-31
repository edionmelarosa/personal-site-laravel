<?php

namespace App\Blog\Http\Controllers;

use Wink\WinkPost;

class ShowAllBlogsController
{
    function __invoke()
    {
        $blogs = WinkPost::all();
        
        return view('pages.blogs.all', compact('blogs'));
    }
}
