<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Notification extends Model
{
    use HasFactory;
    protected $table = 'notifications';
    protected $primaryKey = 'notification_id';
    public $timestamps = true;
    protected $fillable = ['notification_id', "receiver", "content", "status","type_id","type"]; 
    
    //users get all notifications 
    static public function getAllNotification(){ 
        $user_id = Auth::user()->user_id; 
        return Notification::where('receiver',$user_id)->get(); 
    }
    
    //get content of friend request
    public static function getContentFriendReq($t_id) { 
        $sender = User::where("user_id",$t_id)->first(); 
        if(!empty($sender)) {  
            return "<b>$sender->last_name $sender->first_name</b> sent you a friend request"; 
        }
    }
    //get content of friend request
    public static function getContentAcceptFriendReq($t_id) { 
        $sender = User::where("user_id",$t_id)->first(); 
        if(!empty($sender)) {  
            return "<b>$sender->last_name $sender->first_name</b> accepted your friend request"; 
        }
    }
    
    // create new notification for user
    static public function newNotify($r,$t_id, $t){ 

        if(!empty($r) && !empty($t_id)  && !empty($t)) { 
            $c = "";

            if($t == "friend_request"){ 
                $c = self::getContentFriendReq($t_id); 
            }
            else if($t == "accept"){ 
                $c = self::getContentAcceptFriendReq($t_id); 
            }
            
           return Notification::create([
                "receiver"=>$r, 
                "content"=>$c, 
                "type_id"=>$t_id, 
                "status"=>"unread",
                "type"=>$t
            ]); 
        }
        return false; 

    }
    // users read notification 
    static public function markReadNotify($n_id){ 
        $no = Notification::where("notification_id",$n_id)->first();
        if(isset($no)) { 
            $no->status = "read"; 
            $no->save(); 
            return $no; 
        } 

        return false; 
    }

    //users remove a notification
    static public function removeNotify($n_id){ 
        $no = Notification::where("notification_id",$n_id)->first();
        if(isset($no)) { 
            $no->delete();
        }
        return false; 
    }

    //users remove all notification
    static public function removeAllNotify() { 
        $no = Notification::where("receiver",Auth::user()->user_id); 
        if(isset($no)) { 
            $no->delete(); 
        }
        return false;
    }




}
