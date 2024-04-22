<?php

use App\Models\Posts;

    $post = Posts::where('id',41)->with(['image','comments' => function($query) { 
        $query->with(['user', 'image'=>function($q) { 
            $q->where('img_location_fk',1); 
        }]); 
    }])->get()[0];
    foreach($post->comments as $comment) { 
        ?>
            {{dump($comment)}}
            <!-- <x-comment :commenter=$comment></x-comment> -->
        <?php 
    }

    
    
?> 


