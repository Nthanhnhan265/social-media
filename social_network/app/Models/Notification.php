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
        return Notification::where('receiver',$user_id)->orderBy('created_at','desc')->get(); 
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

    //get content of notification when friend posted a post 
    public static function getContentNewPost($t_id) { 
        $newPost = Posts::where('id',$t_id)->with('user')->first(); 
        if(!empty($newPost)) {  
            $fullname =$newPost->user->last_name.' ' .$newPost->user->first_name; 
            return "<b>$fullname</b> posted a new article"; 
        }
    }
    //get content of notification when friend shared a post 
    public static function getContentSharePost($t_id) { 
        $newShare = Share::where('share_id',$t_id)->with(['user','post'])->first()  ; 
        if(!empty($newShare)) {  
            $user_shared_post =$newShare->user->last_name.' ' .$newShare->user->first_name; 
            // $author_of_post = $newShare->post->user->user->last_name.' '.$newShare->post->user->user->firstname; 
            return "<b>$user_shared_post</b> shared an article"; 
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
            } else if ($t == "newpost") { 
                $c = self::getContentNewPost($t_id); 
            }
            else if ($t=="sharepost")  {
                $c = self::getContentSharePost($t_id); 
             }
            
           return Notification::create([
                "receiver"=>$r, 
                "content"=>$c, 
                "type_id"=>$t_id, 
                "status"=>"unread",
                "type"=>$t,
                "created_at" => now(),
                "updated_at" => now()
            ]); 
        }
        return false; 

    }
    //notify to all followers (receivers)
    static public function newNotifyToFollowers($arrReceivers,$t_id,$t ){ 
        if(!empty($arrReceivers) && count($arrReceivers) > 0 && !empty($t_id)  && !empty($t)) { 
            //get content
            $c = "";
            if($t == "friend_request"){ 
                $c = self::getContentFriendReq($t_id); 
            }
            else if($t == "accept"){ 
                $c = self::getContentAcceptFriendReq($t_id); 
            } else if ($t == "newpost") { 
                $c = self::getContentNewPost($t_id); 
            }
            else if ($t=="sharepost")  {
                $c = self::getContentSharePost($t_id); 
               
            }
             //notify to all followers (receivers)
             $notifications = []; 
            foreach ($arrReceivers as $r) { 
                array_push($notifications,[
                    "receiver"=>$r, 
                    "content"=>$c, 
                    "type_id"=>$t_id, 
                    "status"=>"unread",
                    "type"=>$t,
                    "created_at" => now(),
                    "updated_at" => now()
                ]);
            }
            Notification::insert($notifications);
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
