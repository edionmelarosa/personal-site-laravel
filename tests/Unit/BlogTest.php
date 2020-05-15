<?php

namespace Tests\Unit;

use App\Blog\Blog;
use PHPUnit\Framework\TestCase;

class BlogTest extends TestCase
{
    /** @test */
    public function show_be_able_to_get_all_blogs()
    {
        $blogs = Blog::all();

        $this->assertIsArray($blogs);
    }

    /** @test */
    public function show_be_able_to_get_blog_by_slug()
    {
        $slug = 'deploying-your-github-page-using-github-action-workflow';

        $blog = Blog::getBySlug($slug);

        $this->assertEquals($slug, $blog->slug);
    }
    
}
