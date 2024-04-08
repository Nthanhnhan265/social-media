<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Posts extends Model
{
    use HasFactory;
    protected $table = 'posts';
    protected $primaryKey = 'id';
    protected $timestapms = true;
  
    public function post()
    {
        return $this->hasMany (Comment::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id_fk');
    }
    public function likes()
    {
        return $this->hasMany(LikePost::class);
    }

    public function groups()
    {
        return $this->belongsToMany(Group::class, 'postgroup');
    }
    

}
