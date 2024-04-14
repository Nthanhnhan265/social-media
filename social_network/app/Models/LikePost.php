<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LikePost extends Model
{
    use HasFactory;
    protected $table = 'likrpost';
    protected $primaryKey = 'likepost_id';
    protected $timestapms = true;
    public function post()
    {
        return $this->belongsTo(Posts::class, 'post_id_fk');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id_fk');
    }

}
