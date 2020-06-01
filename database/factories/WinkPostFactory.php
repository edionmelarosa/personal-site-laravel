<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Wink\WinkPost;
use Wink\WinkAuthor;
use Faker\Provider\Uuid;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

$factory->define(WinkPost::class, function (Faker $faker) {
    $title = $faker->word;

    return [
        'id'       => Uuid::uuid(),
        'title'      => $title,
        'slug'       => Str::slug($title),
        'body'       => $faker->word,
        'excerpt'       => $faker->word,
        'featured_image_caption'       => $faker->word,
        'published'  => 1,
        'publish_date' => now(),
        'author_id'  => function () {
            return factory(WinkAuthor::class)
                ->create()
                ->id;
        }
    ];
});
