<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LikeComment extends Model
{
    use HasFactory;
    protected $table = 'likecomment';
    protected $primaryKey = 'likecomment_id';
    protected $timestapms = true;
    public function comment()
    {
        return $this->belongsTo(Comment::class, 'comment_id_fk');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id_fk');
    }
   
}
