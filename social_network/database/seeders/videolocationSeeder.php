<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class videolocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $videolocationArr = [];

        for ($i=1; $i <= 4; $i++) {
            $videolocationArr[] = [
                "videolocation_id" => $i,
                "name" => "videolocation".$i,
            ];
        }
        DB::table("videolocation")->insert(
            $videolocationArr,
        );
    }
}
