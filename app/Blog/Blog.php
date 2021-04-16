<?php

namespace App\Blog;

use Wink\WinkPost;
use Illuminate\Support\Facades\Cache;

class Blog
{
    public static $cachePrefix = 'blog-';
    public static $cacheLimitPrefix = 'blog-limit-';

    public static function blogUrl($slug)
    {
        return "/blogs/{$slug}";
    }

    public static function all()
    {
        if (!config('cache.enabled')) {
            return WinkPost::orderByDesc('updated_at')->get();
        }

        return Cache::rememberForever(Blog::$cachePrefix . 'all', function () {
            return WinkPost::orderByDesc('updated_at')
                ->get();
        });
    }

    public static function limit(int $limit = 6)
    {
        if (!config('cache.enabled')) {
            return WinkPost::orderByDesc('created_at')
                ->limit($limit)
                ->get();
        }

        return Cache::rememberForever(Blog::$cacheLimitPrefix . $limit, function () use ($limit) {
            return WinkPost::orderByDesc('created_at')
                ->limit($limit)
                ->get();
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
