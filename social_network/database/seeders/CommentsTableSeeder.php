<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comments = []; 

        for ($i = 1; $i <= 100; $i++) {
           
            $dialogues = [
                "Xin chào, bạn khỏe không?",
                "Hôm nay trời đẹp quá nhỉ!",
                "Bạn đã ăn tối chưa?",
                "Cuối tuần này bạn có kế hoạch gì không?",
                "Dạo này bạn bận lắm à?",
                "Gần đây bạn đọc sách gì hay không?",
                "Chúng ta nên đi chơi khi trời ấm lên.",
                "Bạn thích phim gì nhất?",
                "Tôi vừa mới hoàn thành một dự án lớn.",
                "Bài hát bạn thích gần đây là gì?"
            ];
        
           
            $randomDialogue = $dialogues[array_rand($dialogues)];
        
            $comments[] = [
                'post_id_fk' => rand(1, 25), 
                'content' => $randomDialogue,
                'user_id_fk' => rand(1, 10),
                'status' => rand(0,1),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ];
        }
        

        DB::table('comments')->insert($comments); 
    }
}
