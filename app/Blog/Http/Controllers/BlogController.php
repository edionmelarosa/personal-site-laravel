<?php

namespace App\Blog\Http\Controllers;

use App\Blog\Blog;

class BlogController
{
    function __invoke($slug)
    {
        $blog = Blog::getBySlug($slug);

        if(!$blog) {
            return abort(404);
        }

        return view('pages.blogs.show', compact('blog'));
    }
}
