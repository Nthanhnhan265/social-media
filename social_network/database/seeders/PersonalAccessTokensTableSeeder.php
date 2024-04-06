<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PersonalAccessTokensTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 10; $i++) {
            DB::table('personal_access_tokens')->insert([
                'tokenable_type' => 'App\User', 
                'tokenable_id' => rand(1, 100), 
                'name' => 'Token ' . ($i + 1),
                'token' => Str::random(40),
                'abilities' => json_encode(['read', 'write']), 
                'last_used_at' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
