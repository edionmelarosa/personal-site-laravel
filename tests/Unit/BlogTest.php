<?php

use App\Blog\Blog;
use Wink\WinkPost;
use Illuminate\Support\Facades\Cache;

it('should pull blogs from cache', function () {
    Cache::shouldReceive('rememberForever')
        ->with('blog-all', Closure::class)
        ->andReturn([]);
});

it('it should pull single blog from cache', function () {
    $post = factory(WinkPost::class)->create();

    Cache::shouldReceive('rememberForever')
        ->with(Blog::$cachePrefix . $post->slug, Closure::class)
        ->andReturn($post);
});