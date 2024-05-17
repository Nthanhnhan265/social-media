<?php

namespace App\Models;
use App\Models\Follow;
use App\Models\Share;
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
    public static function getNewfeedAndNewPostFirst($user_id,$post, $type) { 
        $firstPost = $post;
        $share = [];
        // dd($post);
        $removePostId = 0; 
        if ($type == "sharepost") { 
            $removePostId = $post->post_id_fk; 
        } else { 
            $removePostId = $post->id; 
        }
        $posts = 0;
        //get user's followed list 
        $followedList = Follow::getFollowedListRaw($user_id);
        if ($followedList) {

            //  get user's shared posts 
            //  get friend's shared posts (Check follow table )
            $followed = $followedList->where('follow_type', 'friend')->pluck('follow_id_fk')->toArray();
            $sharedPost = Share::where('status', 1)->whereIn('user_id_fk', [$user_id, ...$followed])->whereNot('post_id_fk',$removePostId) //remove share to move to top
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
            //  get friend's posts (check follow table)
            $posts = Posts::whereIn('user_id_fk', [$user_id, ...$followed])->orderBy('created_at', 'desc')->whereNot('id',$removePostId)    //remove post to move to top
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

                //  get post in group that user joined (check follow table )
            }
            $shuffleArray = [...$posts,...$sharedPost]; 
            shuffle($shuffleArray);
            array_unshift($shuffleArray,$firstPost); 
            // dd($shuffleArray); 
            return  $shuffleArray;

    }
}
