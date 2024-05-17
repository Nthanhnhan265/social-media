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
    protected $fillable = ["user_id_fk","content","status","timestamps"]; 
    public $timestamps = true;

    public static function getPostAndShare($user_id)
     {
 
             //  get user's shared posts 
             $sharedPost = Share::where('user_id_fk', $user_id)
                 ->with([
                     'user',
                     'post' => function ($q) {
                         $q->with([
                             'user',
                             'image',
                             'video',
                             'comments' => function ($q) {
                                 $q->with([
                                     'user',
                                     'image' => function ($qImg) {
                                         $qImg->where('img_location_fk', 1);
                                     },
                                     'video' => function ($qVid) {
                                         $qVid->where('video_location_fk', 1);
                                     }
                                 ])->orderBy('created_at','desc');
                             }
                         ]);
                     }
                 ])
                 ->get();
 
             
             //  get user's posts 
             $posts = Posts::where('user_id_fk', $user_id)->orderBy('created_at', 'desc')
                 ->with([
                     'user',
                     'image',
                     'video',
                     'comments' => function ($q) {
                         $q->with([
                             'user',
                             'image' => function ($qImg) {
                                 $qImg->where('img_location_fk', 1);
                             },
                             'video' => function ($qVid) {
                                 $qVid->where('video_location_fk', 1);
                             }
                         ])->orderBy('created_at','desc');
                     }
                 ])->get();
       
        
         return [...$posts,...$sharedPost];
     }
 

    public function comments()
    {
        return $this->hasMany (Comment::class,'post_id_fk');
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

    public function share()
    {
        return $this->belongsToMany(User::class, 'share', 'user_id_fk','post_id_fk')->withPivot('status');
    }
    
}
