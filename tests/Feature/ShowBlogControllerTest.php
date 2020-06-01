<?php

use Wink\WinkAuthor;
use Wink\WinkPost;

it('it should have blog page', function () {
    $post = factory(WinkPost::class)->create();

    $this->get("/blogs/{$post->slug}")
        ->assertStatus(200)
        ->assertSee($post->content);
});
