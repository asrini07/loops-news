<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('users')->insert([
            [
                "name" => 'Administrator',
                "email" => 'admin@gmail.com',
                "email_verified_at" => '2020-02-02 12:00:00',
                "password" => '$2y$10$moMiFeZNb6V2.Si5KTMdIuiyP4rsL6H/st9LwXnpNQRNKL16cXQM.',
                "remember_token" => 'M8qGGiVnc0cOilpbh3iPjbGzDXXnTQpxsEt4FKgFBpstHuEFKU8WsvVSOjR8',
            ],
            [
                "name" => 'Company',
                "email" => 'company@gmail.com',
                "email_verified_at" => '2020-02-02 12:00:00',
                "password" => '$2y$10$moMiFeZNb6V2.Si5KTMdIuiyP4rsL6H/st9LwXnpNQRNKL16cXQM.',
                "remember_token" => 'M8qGGiVnc0cOilpbh3iPjbGzDXXnTQpxsEt4FKgFBpstHuEFKU8WsvVSOjR8',
            ],
            [
                "name" => 'Reviewer',
                "email" => 'review@gmail.com',
                "email_verified_at" => '2020-02-02 12:00:00',
                "password" => '$2y$10$moMiFeZNb6V2.Si5KTMdIuiyP4rsL6H/st9LwXnpNQRNKL16cXQM.',
                "remember_token" => 'M8qGGiVnc0cOilpbh3iPjbGzDXXnTQpxsEt4FKgFBpstHuEFKU8WsvVSOjR8',
            ]
        ]);

    }
}
