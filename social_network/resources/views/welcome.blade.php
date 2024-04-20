<?php

use App\Models\Posts;

    $post = Posts::where('id',41)->with('image')->get()[0];
   
?> 

<form action="{{route('posts.update',41)}}" method="POST" enctype="multipart/form-data">
    @method('PUT')
    @csrf
    <input type="text" name="content" value = "{{$post->content}}">
    <input type="file" name="imgFileSelected[]" multiple>
    <input type="file" name="vdFileSelected[]" multiple>
    <button type="submit">ok</button>
</form>