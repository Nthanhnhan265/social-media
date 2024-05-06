<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Follow extends Model
{
    use HasFactory;
    protected $table = 'follows';
    protected $primaryKey = 'follow_id';
    public $timestamps = true;
    protected $fillable = ['follow_id', "user_id_fk", "follow_type", "follow_id_fk"]; 

    public function user() { 
        return $this->belongsTo(Follow::class,"user_id_fk");
    }

    static public function follow($follower, $follow_id_fk, $follow_type) { 
        Follow::create([
            "user_id_fk"=>$follower,
            "follow_id_fk"=>$follow_id_fk,
            "follow_type"=>$follow_type]
        ); 
    }
    
    static public function unfollow($follower, $follow_id_fk) { 
        Follow::where('user_id_fk',$follower)->where('follow_id_fk',$follow_id_fk)->first()->delete(); 
        Follow::where('user_id_fk',$follow_id_fk)->where('follow_id_fk',$follower)->first()->delete(); 
    }
    static public function unfollowOne($follower, $follow_id_fk) { 
        Follow::where('user_id_fk',$follower)->where('follow_id_fk',$follow_id_fk)->first()->delete(); 
    }

}
