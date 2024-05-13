<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;
    protected $table = 'images';
    protected $primaryKey = 'img_id';
    protected $fillable = ["img_id","url","ref_id_fk","img_location_fk"]; 
    public $timestamps = true;
    public function post()
    {
        return $this->belongsTo(Posts::class, 'id');
    }
    public function comment(){
        return $this->belongsTo(Comment::class, 'comment_id');
    }
    public function users() {
        return $this->belongsTo(User::class,'user_id');
    }
}
