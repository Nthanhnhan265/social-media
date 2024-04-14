<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class LikeCommentsTableSeeder extends Seeder
{
    public function run()
    {
        $likeComments = [];

        for ($i = 1; $i <= 100; $i++) {
            $likeComments[] = [
                'user_id_fk' => rand(1, 10),
                'comment_id_fk' => rand(1, 50),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ];
        }

        DB::table('likecomment')->insert($likeComments);
    }
}
