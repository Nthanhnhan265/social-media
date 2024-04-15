<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ImagesTableSeeder extends Seeder
{
    public function run()
    {
        $images = [];

        for ($i = 1; $i <= 50; $i++) {
            $images[] = [
                'url' => "http://example.com/images/{$i}.jpg",
                'ref_id_fk' => rand(1, 10),
                'img_location_fk' => rand(1, 5),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ];
        }

        DB::table('images')->insert($images); 
    }
}
