<?php

namespace App\Http\Controllers;

use Wink\WinkPost;

class HomeController
{
    function __invoke()
    {
        $blogs = WinkPost::all();
        
        return view('pages.home', compact('blogs'));
    }
}
