<?php

namespace App\Models;

use App\View\Components\friendlist;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Relationship extends Model
{
    use HasFactory;
    protected $table = 'relationships';
    protected $primaryKey = 'relationship_id';
    public $timestamps = true;
    protected $fillable = ['relationship_id', "sender", "receiver", "status"]; 

    static public function getFriendListOfUser() { 
        $user_id = Auth::user()->user_id; 
        $f = Relationship::where(['sender'=>$user_id,"status"=>"accept"])->union(Relationship::where(['receiver'=>$user_id,"status"=>"accept"]))->get(); 
        $friendList = []; 
        if (isset($f)) { 
            foreach ($f as $friend) { 
                if ($friend->sender != $user_id) { 
                    array_push($friendList, $friend->sender); 
                }else { 
                    array_push($friendList, $friend->receiver); 
                }
            }
        }
        return User::whereIn('user_id',$friendList)->get();
    }
    static public function getFriendListArrayOfUser() { 
        $user_id = Auth::user()->user_id; 
        $f = Relationship::where(['sender'=>$user_id,"status"=>"accept"])->union(Relationship::where(['receiver'=>$user_id,"status"=>"accept"]))->get(); 
        $friendList = []; 
        if (isset($f)) { 
            foreach ($f as $friend) { 
                if ($friend->sender != $user_id) { 
                    array_push($friendList, $friend->sender); 
                }else { 
                    array_push($friendList, $friend->receiver); 
                }
            }
        }
        return $friendList;
    }

    static public function getRequestListOfUser() { 
        $user_id = Auth::user()->user_id; 
        $f = Relationship::where(['sender'=>$user_id,"status"=>"pending"])->union(Relationship::where(['receiver'=>$user_id,"status"=>"pending"]))->get(); 
        $friendList = []; 
        if (isset($f)) { 
            foreach ($f as $friend) { 
                if ($friend->sender != $user_id) { 
                    array_push($friendList, $friend->sender); 
                }else { 
                    array_push($friendList, $friend->receiver); 
                }
            }
        }
        return User::whereIn('user_id',$friendList)->get();
    }
}
