<?php

namespace App\Blog\Http\Controllers;

use App\Blog\Blog;

class ShowBlogController
{
    public function __invoke($slug)
    {
        $blog = Blog::getBySlug($slug);

        if (!$blog) {
            abort(404);
        }

        return view('pages.blogShow', compact('blog'));
    }
}
