<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class shareSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $shareArr = [];

        for ($i=1; $i < 10; $i++) {
            $shareArr[] = [
                "share_id" => $i,
                "status" => 1,
                "user_id_fk" => $i,
                "post_id_fk" => $i,
                "created_at" => now(),
                "updated_at" => now(),
            ];
        }
        DB::table("share")->insert(
            $shareArr,
        );
    }
}
