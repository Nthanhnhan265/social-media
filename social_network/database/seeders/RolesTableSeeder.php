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
      
            DB::table('roles')->insert([
                'role_id' => 1,
                'description' => 'Admin',
                'created_at' => now(),
                'updated_at' => now(),
            ]);

        
            DB::table('roles')->insert([
                'role_id' => 2,
                'description' => 'User',
                'created_at' => now(),
                'updated_at' => now(), 
            ]);         
    }
}
