<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ImageLocationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $imageLocations = [];

        for ($i = 1; $i <= 150; $i++) {
            $imageLocations[] = [
                'name' => "Hình ảnh $i",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ];
        }

        DB::table('imagelocation')->insert($imageLocations);
    }
}
