<?php

namespace App\Blog\Http\Controllers;

use App\Blog\Blog;
use App\Http\Controllers\Controller;

class BlogController extends Controller
{
    protected $blog;

    public function __construct(Blog $blog) {
        $this->blog = $blog;
    }

    public function index()
    {
        return view('pages.blogs', $this->blog->all());
    }

    public function show($slug)
    {
        $blog = $this->blog->getBySlug($slug);

        if(!$blog) {
            return abort(404);
        }

        return view('pages.blogs.show', compact('blog'));
    }
}
