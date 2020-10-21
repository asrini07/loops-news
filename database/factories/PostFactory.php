<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {

    $title = $faker->sentence;
    $slug = str_slug($title, '-');

    return [
        'title' => $title,
        'slug' => $slug,
        'content' => $faker->paragraph,
        'user_id' => function () {
            return factory(App\Models\User::class)->create()->id;
        }
    ];
});
