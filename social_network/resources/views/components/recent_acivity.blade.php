@php 


@endphp

<div class="widget" style="height:21rem;overflow:scroll;">
        <h4 class="widget-title">Recent Activity</h4>
        <ul class="activitiez">
            {{-- $activityHistorys --}}
            @foreach ($postActivityHistors as $postActivityHistor)
            <li>
                <div class="activity-meta">
                    <i>{{ $postActivityHistor->created_at }}</i>
                    @php 
                        $string = $postActivityHistor->content
                    @endphp
                    <span><a href="#" title="">Posted your status.
                            <x-format_string :content=$string/></a></span>
                </div>
            </li>
            @endforeach
                

            @foreach ($commentsActivityHistorys as $commentsActivityHistory)
            <li>
                <div class="activity-meta">
                    <i>{{ $commentsActivityHistory->created_at }}</i>
                    <span><a href="#" title="">Commented on Video posted
                        </a></span>
                    <h6>by <a href="{{ url('time-line') }}">
                            {{ $commentsActivityHistory->user->first_name }}
                            {{ $commentsActivityHistory->user->last_name }} </a>
                        </h6>
                            <div class="dropdown" style="position: absolute; right: 5%;">
                            <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton-{{$commentsActivityHistory->comment_id}}" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="border: none;background:#f4f2f2;">
                                <i class="fa-solid fa-ellipsis-vertical"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton-{{$commentsActivityHistory->comment_id}}">
                                <a class="dropdown-item" href="{{url('edit-comment/'. $commentsActivityHistory->comment_id)}}">Update</a>
                                
                                <form action="{{ url('comments/'.$commentsActivityHistory->comment_id) }}" method="POST" style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="dropdown-item" onclick="return confirm('Are you sure you want to delete this comment ?');">Delete</button>
                                </form>
                            </div>
                        </div>
                </div>
            </li>
            @endforeach

            @foreach ($shareActivityHistorys as $shareActivityHistory)
            <li>
                <div class="activity-meta">
                    <i>{{ $shareActivityHistory->created_at }}</i>
                    <span><a href="#" title="">Share a @if ($shareActivityHistory->status === 0)
                            privary
                            @else
                            public
                            @endif
                            video on your timeline.</a></span>
                </div>
            </li>
            @endforeach
        </ul>
    </div>