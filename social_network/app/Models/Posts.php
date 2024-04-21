<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Posts extends Model
{
    use HasFactory;
    protected $table = "posts"; 
    protected $primaryKey = "id"; 
    protected $fillable = ["user_id_fk","content","timestamps"]; 
    public $timestamps = true;
  
    public function post()
    {
        return $this->hasMany (Comment::class);
    }
    public function user()  
    {
        return $this->belongsTo(User::class, 'user_id_fk');
    }
    public function likeposts()
    {
        return $this->belongsToMany(LikePost::class);
    }

    public function groups()
    {
        return $this->belongsToMany(Group::class, 'postgroup');
    }
    
    public function image() { 
        return $this->hasMany(Image::class,'ref_id_fk'); 
    }
    public function video() { 
        return $this->hasMany(Video::class,'ref_id_fk'); 
    }

}
