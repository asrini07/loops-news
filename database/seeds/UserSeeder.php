<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{

    public function run()
    {
        \DB::table('users')->insert([
            [
                "name" => 'Administrator',
                "email" => 'admin@gmail.com',
                "email_verified_at" => '2020-02-02 12:00:00',
                "password" => Hash::make("123123123"),
                "remember_token" => 'M8qGGiVnc0cOilpbh3iPjbGzDXXnTQpxsEt4FKgFBpstHuEFKU8WsvVSOjR8',
            ],
            [
                "name" => 'Company',
                "email" => 'company@gmail.com',
                "email_verified_at" => '2020-02-02 12:00:00',
                "password" => Hash::make("123123123"),
                "remember_token" => 'M8qGGiVnc0cOilpbh3iPjbGzDXXnTQpxsEt4FKgFBpstHuEFKU8WsvVSOjR8',
            ],
            [
                "name" => 'Reviewer',
                "email" => 'review@gmail.com',
                "email_verified_at" => '2020-02-02 12:00:00',
                "password" => Hash::make("123123123"),
                "remember_token" => 'M8qGGiVnc0cOilpbh3iPjbGzDXXnTQpxsEt4FKgFBpstHuEFKU8WsvVSOjR8',
            ]
        ]);

    }
}
