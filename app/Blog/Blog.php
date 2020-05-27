<?php

namespace App\Blog;

class Blog
{
    public static function blogUrl($slug)
    {
        return "/blogs/{$slug}";
    }
}
