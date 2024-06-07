<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PasswordResetsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('password_resets')->insert([
            [
                'email' => 'john.doe@amonic.com',
                'token' => Str::random(60),
                'created_at' => now(),
            ],
            [
                'email' => 'jane.smith@gmail.com',
                'token' => Str::random(60),
                'created_at' => now(),
            ],
            [
                'email' => 'michael.johnson@yahoo.com',
                'token' => Str::random(60),
                'created_at' => now(),
            ],
            [
                'email' => 'emily.brown@gmail.com',
                'token' => Str::random(60),
                'created_at' => now(),
            ],
            [
                'email' => 'william.wilson@example.com',
                'token' => Str::random(60),
                'created_at' => now(),
            ],
            [
                'email' => 'sophia.taylor@gmail.com',
                'token' => Str::random(60),
                'created_at' => now(),
            ],
            [
                'email' => 'alexander.martinez@amonic.com',
                'token' => Str::random(60),
                'created_at' => now(),
            ],
            [
                'email' => 'olivia.anderson@example.com',
                'token' => Str::random(60),
                'created_at' => now(),
            ],
            [
                'email' => 'noah.thomas@gmail.com',
                'token' => Str::random(60),
                'created_at' => now(),
            ],
            [
                'email' => 'emma.jackson@yahoo.com',
                'token' => Str::random(60),
                'created_at' => now(),
            ]
        ]);
    }
}
