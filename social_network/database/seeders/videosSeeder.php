<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class videosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $videoArr = [];
        $arrImgrList = [
            "videos/video1.mp4",
            "videos/video2.mp4",
            "videos/video3.mp4",
            "videos/video4.mp4",
        ];

        for ($i=1; $i < count($arrImgrList); $i++) {
            $videoArr[] = [
                "video_id" => $i,
                "url" => $arrImgrList[$i],
                "ref_id_fk" => $i,
                "video_location_fk" => $i,
            ];
        }
        DB::table("videos")->insert(
            $videoArr,
        );
    }
}
