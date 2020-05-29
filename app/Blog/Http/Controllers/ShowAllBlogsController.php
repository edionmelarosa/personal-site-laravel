<?php

namespace App\Blog\Http\Controllers;

use Wink\WinkPost;

class ShowAllBlogsController
{
    function __invoke($slug)
    {
        $blogs = WinkPost::all();
        
        return view('pages.blogs', compact('blogs'));
    }
}