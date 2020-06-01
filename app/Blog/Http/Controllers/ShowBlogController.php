<?php

namespace App\Blog\Http\Controllers;

use App\Blog\Blog;

class ShowBlogController
{
    function __invoke($slug)
    {
        $blog = Blog::getBySlug($slug);

        if (!$blog) {
            abort(404);
        }

        return view('pages.blogs.show', compact('blog'));
    }
}
