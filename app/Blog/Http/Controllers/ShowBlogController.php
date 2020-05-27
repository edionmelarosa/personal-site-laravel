<?php

namespace App\Blog\Http\Controllers;

use Wink\WinkPost;

class ShowBlogController
{
    function __invoke($slug)
    {
        $blog = WinkPost::findBySlug($slug);
       
        if (!$blog) {
            abort(404);
        }

        return view('pages.blogs.show', compact('blog'));
    }
}
