<?php

use Illuminate\Support\Facades\Auth;

$avtUser = Auth::user()->avatar
?> 

@if ($avtUser != null) 
<img src="{{asset('storage/images/'.$avtUser)}}" alt="error to load" class="border-avt">
@else 
<img src="{{asset('storage/images/default.jpg')}}" alt="error to load" class="border-avt">
@endif