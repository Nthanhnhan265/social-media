<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    
    protected $table = 'comments';
    protected $primaryKey = 'comment_id';
    protected $timestapms = true;
    public function post() {
        return $this->belongsTo(Comment::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id_fk');
    }
    public function image(){
        return $this->hasMany(Image::class);
    }
    public function video()
    {
        return $this->hasMany(Video::class);
    }

    public function likes()
    {
        return $this->hasMany(LikeComment::class);
    }

    
    
}
