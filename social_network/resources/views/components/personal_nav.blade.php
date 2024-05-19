<section>



    <div class="feature-photo">
        <figure>
        <div class="image-wrapper">
            <img src="{{ asset('storage/images/' . $user->background) }}" alt="">
        </div>
    </figure>

        <div class="container-btn">

            @if (Auth::user()->user_id != $user->user_id)
            @if ($friend)
            <?php
            if (!empty($friend[0])) {
                $n = $friend[0];
            }
            ?>
            @if ($n->status == "accept")
            <div class="dropdown">
                <button class="btn dropdown-toggle btn-primary" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <a href="#" title="" data-ripple="">Friend <i class="fa-solid fa-user-group ml-1"></i></a>
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <div class="dropdown-item" href="#">
                        <form action="{{url('relationship/' . $user->user_id)}}" method="post" class="m-0">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn-warning">Unfriend <i class="fa-solid fa-x ml-1"></i></button>
                        </form>

                    </div>
                    <div class="dropdown-item" href="#">
                        <div class="notify-btn">

                            @if(Follow::checkFollow(Auth::user()->user_id, $user->user_id))
                            <form action="{{url('follow/' . $user->user_id)}}" method="post" class="m-0">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn-warning">Unfollow <i class="fa-solid fa-x ml-1"></i></button>
                            </form>

                            @else
                            <form action="{{url('follow')}}" method="post" class="m-0">
                                @csrf
                                @method('post')
                                <input type="hidden" value="{{$user->user_id}}" name="friend_id">
                                <button type="submit" class="btn-primary">Follow <i class="fa-solid fa-bell ml-1"></i></button>
                            </form>


                            @endif

                        </div>
                    </div>
                </div>
            </div>

            @else
            @if($n->sender == $user->user_id)
            <form action="{{url('relationship/' . $user->user_id)}}" method="post">
                @csrf
                @method('put')
                <div class="add-btn btn-filled">
                    <button type="submit">Accept <i class="fa-solid fa-check ml-1"></i></button>
                </div>
            </form>
            <form action="{{url('relationship/' . $user->user_id)}}" method="post">
                @csrf
                @method('delete')
                <div class="reject-btn btn-outline">
                    <button type="submit" class=""><i class="fa-solid fa-trash"></i></button>
                </div>

            </form>
            @else
            <div class="text-white">Pending <i class="fa-solid fa-paper-plane ml-1"></i></div>
            <form action="{{url('relationship/' . $user->user_id)}}" method="post">
                @csrf
                @method('delete')
                <div class="reject-btn btn-outline">
                    <button type="submit" class="btn-warning">Cancel <i class="fa-solid fa-x ml-1"></i></button>
                </div>
            </form>
            @endif
            @endif
            @else
            <form action="{{url('relationship')}}" method="post">
                @csrf
                @method('post')
                <input type="hidden" name="receiver" value="{{$user->user_id}}">
                <div class="add-btn btn-filled">
                    <button type="submit">
                        Add friend <i class="fa-solid fa-user-plus"></i>
                    </button>
                </div>
            </form>
            @endif
            @endif

        </div>
    </div>
    @if(auth()->check() && $user->user_id == auth()->user()->user_id)
    <form class="edit-phto" action="{{ url('update-background/' . Auth::User()->user_id)}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <i class="fa fa-camera-retro"></i>
        <label class="fileContainer">

            <input type="file" name="background" id="background" accept="image/*">

        </label>
        <button type="submit">Edit Backgroup</button>
    </form>

    @endif


    <!-- </form> -->
    <div class="container-fluid">
        <div class="row merged">
            <div class="col-lg-2 col-sm-3">
                <div class="user-avatar">
                    <figure>
                        <img src="{{ asset('storage/images/' . $user->avatar) }}" alt="">
                        @if(auth()->check() && $user->user_id == auth()->user()->user_id)
                        <form class="edit-phto" action="{{ url('update-avatar/' . Auth::User()->user_id)}}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <i class="fa fa-camera-retro"></i>
                            <label class="fileContainer">
                                <input type="file" name="avatar" id="avatar" accept="image/*">
                            </label>
                            <button class="btn-edit-avatar" type="submit"><i class="fas fa-cloud-upload-alt"></i></button>
                        </form>
                        @endif


                    </figure>

                </div>
            </div>
            <div class="col-lg-10 col-sm-9">
                <div class="timeline-info">
                    <ul>
                        <li class="admin-name">

                            <h5>{{$user->last_name}} {{$user->first_name}}</h5>
                            <!-- <span style="position:absoulte; bottom:50%;"> {{$user->description}}</span> -->
                        </li>
                        <li>
                            <a class="{{Request::is('time-line/user-profile/'.$user->user_id) ? 'active' : ''}}" href="{{ url('time-line/user-profile/' . $user->user_id) }}" title="" data-ripple="">time line</a>

                            <a class="{{Request::is('timeline-photos' . '/user-profile/'.$user->user_id) ? 'active' : ''}}" href="{{ url('timeline-photos' . '/user-profile/' . $user->user_id) }}" title="" data-ripple="">Photos</a>

                            <a class="{{Request::is('timeline-videos' . '/user-profile/'.$user->user_id) ? 'active' : ''}}" href="{{ url('timeline-videos' . '/user-profile/' . $user->user_id) }}" title="" data-ripple="">Videos</a>
                           
                            @if(auth()->check() && $user->user_id == auth()->user()->user_id)
                            <a class="{{Request::is('timeline-friends/'.$user->user_id) ? 'active' : ''}}" href="{{ url('timeline-friends/'. Auth::user()->user_id) }}" title="" data-ripple="">Friends</a>
                            @endif

                            <a class="{{Request::is('time-line/groups/'.$user->user_id) ? 'active' : ''}}" href="{{ url('groups') }}" title="" data-ripple="">Groups</a>

                            @if(auth()->check() && $user->user_id == auth()->user()->user_id)
                            <a class="{{Request::is('about' . '/user-profile/'.$user->user_id) ? 'active' : ''}}" href="{{ url('about' . '/user-profile/' . $user->user_id) }}" title="" data-ripple="">about</a>
                            @endif

                            <a class="" href="#" title="" data-ripple="">more</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    </div>
</section><!-- top area -->