<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostGroup extends Model
{
    use HasFactory;
    protected $table = 'postgroup';
    public $timestamps = true; 
    protected $fillable = ["post_id_fk","group_id_fk","created_at","updated_at"]; 
    public function post()
    {
        return $this->belongsTo(Posts::class, 'post_id_fk');
    }

    public function group()
    {
        return $this->belongsTo(Group::class, 'group_id_fk');
    }
    
    //check if post in group 
    public static function isInGroup ($post_id) { 
        $post = PostGroup::where('post_id_fk',$post_id)->first(); 
        if (!empty($post)) { 
            return $post; 
        }
        return false ;
    }
}
