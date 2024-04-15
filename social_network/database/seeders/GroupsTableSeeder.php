<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class GroupsTableSeeder extends Seeder
{
    public function run()
    {
        $groups = []; 

        for ($i = 1; $i <= 30; $i++) {
            $groups[] = [
                'name_group' => "Nhóm Số $i",
                'description' => "Mô tả cho Nhóm Số $i. Đây là một nhóm đặc biệt với nội dung và mục đích riêng.",
                'status' => rand(0, 1),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ];
        }

        DB::table('groups')->insert($groups);
    }
}
