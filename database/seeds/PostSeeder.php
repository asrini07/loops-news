<?php

use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{

    public function run()
    {
        \DB::table('posts')->insert([
            [
                "user_id" => 1,
                "title" => 'HTML',
                "slug" => 'html',
                "content" => 'HTML is the standard markup language for Web pages.With HTML you can create your own Website.HTML is easy to learn - You will enjoy it!',
            ],
            [
                "user_id" => 1,
                "title" => 'CSS',
                "slug" => 'css',
                "content" => 'HTML is the standard markup language for Web pages.With HTML you can create your own Website.HTML is easy to learn - You will enjoy it!',
            ],
            [
                "user_id" => 1,
                "title" => 'JavaScript',
                "slug" => 'javascript',
                "content" => 'HTML is the standard markup language for Web pages.With HTML you can create your own Website.HTML is easy to learn - You will enjoy it!',
            ],
            [
                "user_id" => 2,
                "title" => 'HTML',
                "slug" => 'html',
                "content" => 'HTML is the standard markup language for Web pages.With HTML you can create your own Website.HTML is easy to learn - You will enjoy it!',
            ],
            [
                "user_id" => 2,
                "title" => 'CSS',
                "slug" => 'css',
                "content" => 'HTML is the standard markup language for Web pages.With HTML you can create your own Website.HTML is easy to learn - You will enjoy it!',
            ],
            [
                "user_id" => 3,
                "title" => 'CSS',
                "slug" => 'css',
                "content" => 'HTML is the standard markup language for Web pages.With HTML you can create your own Website.HTML is easy to learn - You will enjoy it!',
            ],
        ]);
    }
}
