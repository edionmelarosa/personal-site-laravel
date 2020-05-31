<?php

namespace App\Blog;

use Wink\WinkPost;
use Illuminate\Support\Facades\Cache;

class Blog
{
    public static $cachePrefix = 'blog-';

    public static function blogUrl($slug)
    {
        return "/blogs/{$slug}";
    }

    public static function all()
    {
        return Cache::rememberForever(Blog::$cachePrefix.'all', function ()  {
            return WinkPost::all();
        });
    }
}
