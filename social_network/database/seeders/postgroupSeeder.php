<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class postgroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $postGroupArr = [];

        for ($i=1; $i < 10; $i++) {
            $postGroupArr[] = [
                "post_id_fk" => $i,
                "group_id_fk" => $i,
                "created_at" => now(),
                "updated_at" => now(),
            ];
        }
        DB::table("postgroup")->insert(
            $postGroupArr,
        );
    }
}
