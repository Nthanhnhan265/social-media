<li>
    <div class="comet-avatar">
        <img src="{{asset('images/resources/'.$commenter->user->avatar)}}" alt="err">
    </div>
    <div class="we-comment">
        <div class="coment-head">
            <h5><a href="{{ url('time-line') }}" title="">{{$commenter->user->last_name." ".$commenter->user->first_name}}</a></h5>
            <span>{{$commenter->created_at}}</span>
            <a class="we-reply" href="#" title="Reply"><i class="fa fa-reply"></i></a>
        </div>
        <p>
            {{$commenter->content}}
        </p>
        <div class="img-vid mt-3">
            <!-- Display imgs  -->
            @if(!empty($commenter->image))
            <div class="list-img">
                @foreach ($commenter->image as $img)
                <img src="{{asset('storage/images/'.$img->url)}}" alt="failed to display" />
                @endforeach

            </div>
            @endif

            <!-- Display video  -->
            @if(!empty($commenter->video) && count($commenter->video) !=0 )
            <video class="list-vid" controls alt="err">
                @foreach ($commenter->video as $video)
                <source src="{{asset('storage/videos/'.$video->url)}}">
                @endforeach
            </video>
            @endif

        </div>
    </div>
    <!-- reply comment -->
    <!-- <ul class="replyComment">
            <li>
                <div class="comet-avatar">
                    <img src="images/resources/comet-2.jpg" alt="">
                </div>
                <div class="we-comment">
                    <div class="coment-head">
                        <h5><a href="{{ url('time-line') }}" title="">alexendra dadrio</a></h5>
                        <span>1 month ago</span>
                        <a class="we-reply" href="#" title="Reply"><i class="fa fa-reply"></i></a>
                    </div>
                    <p>yes, really very awesome car i see the features of this car in the official website of <a href="#" title="">#Mercedes-Benz</a> and really impressed :-)</p>
                </div>
            </li>
        </ul> -->
</li>