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


@foreach($posts as $post)
        <div>
		{{$post->content}}
        
            @if(isset($post->image))
                @foreach($post->image as $img) 
                    <img src="{{asset('storage/images/'.$img->url)}}" alt="">
                @endforeach
            @endif

            <video alt="err" controls >
                @if(isset($post->video))
                    @foreach($post->video as $video) 
                        <source src="{{asset('storage/videos/'.$video->url)}}" alt=""/>
                    @endforeach
                @endif
            </video>
        </div>
    @endforeach