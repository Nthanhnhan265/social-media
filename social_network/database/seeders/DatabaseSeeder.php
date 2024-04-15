<?php

namespace Database\Seeders;

use App\Models\ImageLocation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        // \App\Models\User::factory(10)->create();

        $this->call([
            postgroupSeeder::class,
            migrationsSeeder::class,
            shareSeeder::class,
            usergroupSeeder::class,
            videolocationSeeder::class,
            videosSeeder::class,
            CommentsTableSeeder::class, 
            ContentsTableSeeder::class, 
            GroupsTableSeeder::class, 
            ImagesTableSeeder::class, 
            ImageLocationsTableSeeder::class, 
            LikeCommentsTableSeeder::class, 
            LikePostsTableSeeder::class, 
            postgroupSeeder::class, 
            RolesTableSeeder::class, 
          
        ]);

        $this->call(UsersTableSeeder::class);
        $this->call(PasswordResetsTableSeeder::class);
        $this->call(FailedJobsTableSeeder::class);
        $this->call(PersonalAccessTokensTableSeeder::class);


    }
}
