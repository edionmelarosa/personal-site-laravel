<?php

namespace App\Blog\Http\Controllers;

use App\Blog\Blog;
use Wink\WinkPost;
use Illuminate\Support\Facades\Cache;

class ShowBlogController
{
    function __invoke($slug)
    {
        $blog = Cache::rememberForever(Blog::$cachePrefix.$slug, function () use ($slug) {
            return WinkPost::findBySlug($slug);
        });
       
        if (!$blog) {
            abort(404);
        }

        return view('pages.blogs.show', compact('blog'));
    }
}
