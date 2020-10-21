<?php

use Illuminate\Database\Seeder;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('comments')->insert([
            [
                "post_id" => 1,
                "name" => 'HTML',
                "email" => 'admin@gmail.com',
                "website" => 'https://www.w3schools.com/css/default.asp',
                "comment" => 'HTML is the standard markup language for Web pages.With HTML you can create your own Website.HTML is easy to learn - You will enjoy it!',
            ],
            [
                "post_id" => 1,
                "name" => 'HTML',
                "email" => 'admin@gmail.com',
                "website" => 'https://www.w3schools.com/css/default.asp',
                "comment" => 'HTML is the standard markup language for Web pages.With HTML you can create your own Website.HTML is easy to learn - You will enjoy it!',
            ],
            [
                "post_id" => 1,
                "name" => 'HTML',
                "email" => 'admin@gmail.com',
                "website" => 'https://www.w3schools.com/css/default.asp',
                "comment" => 'HTML is the standard markup language for Web pages.With HTML you can create your own Website.HTML is easy to learn - You will enjoy it!',
            ]
        ]);
    }
}
