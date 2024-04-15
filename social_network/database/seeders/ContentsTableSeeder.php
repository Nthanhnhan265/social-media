<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Carbon\Carbon;

class ContentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 20; $i++) {
            DB::table('posts')->insert([
                'user_id_fk' => rand(3, 10), 
                'content' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit.", 
                'created_at' => Carbon::now()->subDays(rand(1, 30)), 
                'updated_at' => Carbon::now()->subDays(rand(1, 30)), 
            ]);
        }
      
    }
}
