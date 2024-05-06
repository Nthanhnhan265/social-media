<!-- Knowing is not enough; we must apply. Being willing is not enough; we must do. - Leonardo da Vinci -->
<li>
    <figure>
        <img src="{{asset('/images/resources/'.$friend->avatar)}}" alt="">
        <!-- <span class="status f-online"></span> -->
    </figure>
    <div class="friendz-meta">
        <a href="{{ url('time-line/user-profile/'.$friend->user_id) }}">{{$friend->last_name}} {{$friend->first_name}}</a>
    </div>
</li>