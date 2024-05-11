<?php

use App\Http\Controllers\Notification;
use App\Http\Controllers\PostsController;
use App\Models\Notification as ModelsNotification;
use App\Models\Relationship;
use App\Models\Posts;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

?>

<?php
   dd(ModelsNotification::newNotify(1,11,'friend_request')); 
?>
