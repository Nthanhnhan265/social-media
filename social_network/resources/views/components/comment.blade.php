<?php
    $class = "hideComment";
    if(!$isHidden) { 
        $class = "showComment";
    }
?>

<li class={{$class}}>
    <div class="comet-avatar">
   <div class="comment-avatar" style="width: 45px; height: 45px; overflow: hidden; border-radius: 50%;">
    <img src="{{ asset('storage/images/' . $commenter->user->avatar) }}" 
         alt="err" 
         style="width: 100%; height: 100%; object-fit: cover; display: block;">
</div>

    </div>
    <div class="we-comment" style="border-radius: 10px !important; border: 2px solid #cac4c4">
        <div class="coment-head">
            <h5><a href="{{ url('time-line/user-profile/' .Auth::user()->user_id) }}" title="">{{$commenter->user->last_name." ".$commenter->user->first_name}}</a></h5>
            <span>{{ date_format ($commenter->created_at,"H:i d/m/Y") }}</span>
            <!-- <a class="we-reply" href="#" title="Reply"><i class="fa fa-reply"></i></a> -->
            @if(auth()->check() && $commenter->user->user_id == auth()->user()->user_id)
              <!-- Toggle Menu -->
              <div class="dropdown" style="position: absolute; right: 5%;">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton-{{$commenter->id}}" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="border: none;">
                    <i class="fa-solid fa-ellipsis-vertical"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton-{{$commenter->id}}">
                    <a class="dropdown-item" href="{{url('edit-comment/'. $commenter->comment_id)}}">Update</a>
                    
                    <form action="{{ url('comments/'.$commenter->comment_id) }}" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="dropdown-item" onclick="return confirm('Are you sure you want to delete this comment ?');">Delete</button>
                    </form>
                </div>
            </div>
            @endif
        </div>
        <p>
            {{$commenter->content}}
        </p>
        <div class="img-vid mt-3">
            @php
            $totalMedia = count($commenter->image) + count($commenter->video);

            @endphp
            <!-- Display imgs  -->
            @if ($totalMedia != 0)
            <div class="container">
                <div class="row">
                    @foreach ($commenter->image as $img)
                    <a href="{{asset('storage/images/'.$img->url)}}" class="{{$loop->index<3? 'col-4 p-1': 'd-none'}} {{$loop->index == 2 ? 'position-relative': ''}}" data-fancybox="gallery{{$commenter->comment_id}}{{$commenter->post_id_fk}}" data-caption="{{$commenter->user->last_name.' '.$commenter->user->first_name.'\'s images' }}">
                        <img src="{{asset('storage/images/'.$img->url)}}" alt="failed to display" class="d-block" />
                        @if($loop->index == 2 && $loop->count - 3!=0)
                        <div style='position:absolute;inset:0;background:rgba(0,0,0,.35);color:#fff;display:flex;justify-content: center;align-items: center;font-size:2rem'>
                            +{{$totalMedia - 2}}
                        </div>
                        @endif
                    </a>
                    @endforeach

                    @if(!empty($commenter->video) && count($commenter->video) !=0 )
                    @foreach ($commenter->video as $video)
                    <a href="{{asset('storage/videos/'.$video->url)}}" data-fancybox="gallery{{$commenter->id}}" style="max-height:50rem" class="{{
																		count($commenter->image)>3 || $loop->iteration + count($commenter->image) > 3?'d-none':'col-3 p-1'}}{{
																		count($commenter->image)>3 || $loop->iteration + count($commenter->image) == 3?' position-relative':''}}" style="display:block;height: 100%">
                        <video controls style="height:100%;width:100%" src="{{asset('storage/videos/'.$video->url)}}"></video>
                        @if(count($commenter->image)>3 || $loop->iteration + count($commenter->image) == 3)
                        <div style='position:absolute;inset:0;background:rgba(0,0,0,.35);color:#fff;display:flex;justify-content: center;align-items: center;font-size:2rem'>
                            +{{$totalMedia - 2}}
                        </div>
                        @endif
                    </a>
                    @endforeach
                    @endif
                </div>

            </div>

            @endif
        </div>
    </div>
</li>