<?php

namespace App\Models;

use Exception;
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
    /**get all followers
     * @param f
    */
    static public function getFollowersByUserId($user_id, $STATUS = 0) { 
        $temp = Follow::where(['follow_id_fk'=>$user_id,'follow_type'=>"friend"]); 
        if ($temp) { 
            //get object to do other things 
            if ($STATUS == 1) { 
                return $temp;
            }
            //get array of followers' id
            else { 
                return $temp->pluck('user_id_fk')->toArray(); 
            }

           
        }
        return false; 
    }

    static public function getFollowedListRaw ($user_id) { 
        $temp = Follow::where('user_id_fk',$user_id); 
        if ($temp) { 
            return $temp;
        } 
        return false; 
    }

    static public function checkFollow($user_id,$friend_id) { 
        if ($temp = Follow::where('user_id_fk',$user_id)->where('follow_id_fk',$friend_id)->first()) { 
            return true; 
        }
        return false; 
    }

    static public function follow($follower, $follow_id_fk, $follow_type) { 
        Follow::create([
            "user_id_fk"=>$follower,
            "follow_id_fk"=>$follow_id_fk,
            "follow_type"=>$follow_type]
        ); 
    }
    
    static public function unfollow($follower, $follow_id_fk) { 
            if ($temp = Follow::where('user_id_fk',$follower)->where('follow_id_fk',$follow_id_fk)->first()) { 
                $temp->delete(); 
            }
            if ($temp = Follow::where('user_id_fk',$follow_id_fk)->where('follow_id_fk',$follower)->first()) {
                $temp->delete(); 
            }
       
    }
    static public function unfollowOne($follower, $follow_id_fk) { 
        if ($temp = Follow::where('user_id_fk',$follower)->where('follow_id_fk',$follow_id_fk)->first()) { 
            $temp->delete();
        }
    }

}
