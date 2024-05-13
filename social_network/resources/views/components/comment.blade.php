<li>
    <div class="comet-avatar">
        <img src="{{asset('storage/images/'.$commenter->user->avatar)}}" alt="err" style="width:45px; height:45px">
    </div>
    <div class="we-comment" style="border-radius: 10px !important; border: 2px solid #cac4c4">
        <div class="coment-head">
            <h5><a href="{{ url('time-line') }}" title="">{{$commenter->user->last_name." ".$commenter->user->first_name}}</a></h5>
            <span>{{$commenter->created_at}}</span> 
            <a class="we-reply" href="#" title="Reply"><i class="fa fa-reply"></i></a> 
            <!-- <div class="toggleComment" style="display:inline;position:absolute;right:3%"><i class="fas fa-ellipsis-v"></i></div> -->
            <button type="button" class="" style="border: none; background:none; position: absolute; right: 5%;" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo"><i class="fa-solid fa-ellipsis-vertical"></i></button>

        </div>
        <p>
            {{$commenter->content}}
        </p>
        <div class="img-vid mt-3">
            <!-- Display imgs  -->
            @if(!empty($commenter->image))
            <div class="list-img">
                @foreach ($commenter->image as $img)
                <img src="{{asset('storage/images/'.$img->url)}}" alt="failed to display"/>
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
<div class="modal fade position-relative" style="z-index: 2" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New message</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Recipient:</label>
            <input type="text" class="form-control" id="recipient-name">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Message:</label>
            <textarea class="form-control" id="message-text"></textarea>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-primary">Send message</button>
      </div>
    </div>
  </div>
</div>
</li>


