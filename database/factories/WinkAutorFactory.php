<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Wink\WinkAuthor;
use Illuminate\Support\Str;
use Faker\Generator as Faker;
use Faker\Provider\Uuid;

$factory->define(WinkAuthor::class, function (Faker $faker) {
    $name = $faker->name;

    return [
        'id'       => Uuid::uuid(),
        'name'     => $name,
        'bio'     => $faker->word,
        'slug'     => Str::slug($name),
        'email'    => $faker->email,
        'password' => \Hash::make('admin123')
    ];
});
