<!-- Knowing is not enough; we must apply. Being willing is not enough; we must do. - Leonardo da Vinci -->
<li>
    <figure style="width:2rem; height:2rem; overflow:hidden; border-radius: 50%" class="border-avt">
         <img src="{{asset('storage/images/'.$friend->avatar)}}" alt="" style="width:100%; height:auto"> 
        <!-- <span class="status f-online"></span> -->
    </figure>

    <div class="friendz-meta">
        <a href="{{ url('time-line/user-profile/'.$friend->user_id) }}">{{$friend->last_name}} {{$friend->first_name}}</a>
    </div>
</li>