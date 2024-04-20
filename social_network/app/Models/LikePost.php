<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LikePost extends Model
{
    use HasFactory;
    protected $table = 'likepost';
    protected $primaryKey = 'likepost_id';
    public $timestamps = true;
    public function posts()
    {
        return $this->belongsToMany(Posts::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id_fk');
    }

}
