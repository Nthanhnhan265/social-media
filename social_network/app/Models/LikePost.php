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
    protected $fillable = ["likepost_id","user_id_fk","post_id_fk","status"]; 
    
    public function posts()
    {
        return $this->belongsToMany(Posts::class);
    }
    public function post()
    {
        return $this->belongsTo(Posts::class, 'post_id_fk', 'post_id');
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id_fk');
    }

}
