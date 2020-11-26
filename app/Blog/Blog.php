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
            return WinkPost::limit(3)->get()
                ->sortByDesc('created_at');
        }

        return Cache::rememberForever(Blog::$cachePrefix . 'all', function () {
            return WinkPost::limit(3)
                ->sortByDesc('created_at');
        });
    }

    public static function limit(string $limit)
    {
        if (!$limit) {
            throw new \Exception("Limit is required", 1);
        }

        if (!config('cache.enabled')) {
            return WinkPost::limit($limit)->get()
                ->sortByDesc('created_at');
        }

        return Cache::rememberForever(Blog::$cacheLimitPrefix . $limit, function () use ($limit) {
            return WinkPost::limit($limit)
                ->sortByDesc('created_at');
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
