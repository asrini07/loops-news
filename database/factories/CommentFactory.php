<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Comment;
use Faker\Generator as Faker;

$factory->define(Comment::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'website' => 'https://' . $faker->word . '.com',
        'comment' => $faker->paragraph,
        'post_id' => function () {
            return factory(App\Models\Post::class)->create()->id;
        }
    ];
});
