<?php

use Illuminate\Support\Facades\Auth;

$avtUser = Auth::user()->avatar
?> 

@if ($avtUser != null) 
<img src="{{asset('images/resources/'.$avtUser)}}" alt="error to load">
@else 
<img src="{{asset('images/resources/default.jpg')}}" alt="error to load">
@endif