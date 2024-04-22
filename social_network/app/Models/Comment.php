<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    
    protected $table = 'comments';
    protected $primaryKey = 'comment_id';
    public $timestamps = true;
    protected $fillable = ['comments', 'comments_id', "post_id_fk", "user_id_fk", "content"]; 
    public function post() {
        return $this->belongsTo(Comment::class, 'post_id_fk');
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id_fk');
    }
    public function image(){
        return $this->hasMany(Image::class,'ref_id_fk');
    }
    public function video()
    {
        return $this->hasMany(Video::class,'ref_id_fk');
    }

    public function likes()
    {
        return $this->hasMany(LikeComment::class);
    }

    
    
}
