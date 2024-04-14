<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class FailedJobsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 10; $i++) {
            DB::table('failed_jobs')->insert([
                'uuid' => Str::uuid()->toString(),
                'connection' => 'default',
                'queue' => 'default',
                'payload' => json_encode(['key' => 'value']),
                'exception' => 'Exception message',
                'failed_at' => now(),
            ]);
        }
    }
}
