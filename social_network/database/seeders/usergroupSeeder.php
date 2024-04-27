<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class usergroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $usergroupArr = [];

        for ($i=1; $i < 10; $i++) {
            $usergroupArr[] = [
                "usergroup" => $i,
                "user_id_fk" => $i,
                "role_id_fk" => rand(0, 2),
                "group_id_fk" => $i,
                "created_at" => now(),
                "updated_at" => now(),
            ];
        }
        DB::table("usergroup")->insert(
            $usergroupArr,
        );
    }
}
