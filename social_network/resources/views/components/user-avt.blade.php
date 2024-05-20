<?php

use Illuminate\Support\Facades\Auth;

$avtUser = Auth::user()->avatar;
?>
@if ($avtUser != null)
    <img src="{{ asset('storage/images/' . $avtUser) }}" alt="error to load" class="" style="width: 100%!important;height:auto!important">
@else
    <img src="{{ asset('storage/images/default.jpg') }}" alt="error to load" class="" style="width: 100%!important;height:auto!important">
@endif
