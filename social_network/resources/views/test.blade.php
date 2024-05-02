<?php

use App\Http\Controllers\PostsController;
use App\Models\Relationship;
use App\Models\Posts;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

?>

<?php
$r = DB::select("SELECT * FROM relationships WHERE (sender = ? AND receiver = ?)
 OR (sender = ? AND receiver = ?)",
 [Auth::user()->user_id,$id,
                    $id,Auth::user()->user_id
]);

?>
@if (Auth::user()->user_id != $id) 
    @if ($r)    
        <?php     
        if(!empty($r[0])) { 
            $n = $r[0]; 
        }
        ?>
        @if ($n->status == "friend") 
            friend
        @else 
            @if($n->sender == $id) 
                accept
            @else   
                pending
            @endif
        @endif
    @else
    add friend
    @endif
@else 
    no
@endif