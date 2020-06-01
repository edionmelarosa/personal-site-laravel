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
        if (!config('cache.enabled')) {
            return WinkPost::all();
        }

        return Cache::rememberForever(Blog::$cachePrefix . 'all', function () {
            return WinkPost::all();
        });
    }

    public static function getBySlug($slug)
    {
        if (!config('cache.enabled')) {
            return WinkPost::findBySlug($slug);
        }

        return Cache::rememberForever(Blog::$cachePrefix . $slug, function () use ($slug) {
            return WinkPost::findBySlug($slug);
        });
    }
}
