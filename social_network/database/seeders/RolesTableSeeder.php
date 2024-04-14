<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 2; $i++) {
            DB::table('roles')->insert([
                'role_id' => $i,
                'description' => 'Admin',
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

        for ($i = 3; $i <= 10; $i++) {
            DB::table('roles')->insert([
                'role_id' => $i,
                'description' => 'User',
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
