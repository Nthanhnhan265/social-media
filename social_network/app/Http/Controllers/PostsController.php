<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Follow;
use App\Models\Image;
use App\Models\Notification;
use App\Models\Posts;
use App\Models\Relationship;
use App\Models\Share;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Users;
use App\Models\Video;
use Exception;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\VarDumper\Caster\RedisCaster;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userId = Auth::user()->user_id;
        $friend_list = Relationship::getFriendListOfUser();
        $postActivityHistorys = DB::select('select * from posts where user_id_fk = ?', [$userId]);
        $commentsActivityHistorys = DB::select('select comments.*, users.first_name as user_first_name ,users.last_name as user_last_name from comments inner join users on comments.comment_id = users.user_id where user_id_fk != ?', [$userId]);
        $shareActivityHistorys = DB::select('select * from share where user_id_fk = ?', [$userId]);

        // $results = DB::select('select * from users where id = :id', ['id' => 1]);
        // dd($postActivityHistorys);

        //hiển thị giao diện trang chính
        //hiển thị mọi bài viết trong db -> chưa hợp lý cho việc hiển thị phù hợp với từng tài khoản
        return view(
            'newsfeed',
            [
                "posts" => $this->getNewfeed($userId),
                "friends" => $friend_list,
                'postActivityHistors' => $postActivityHistorys,
                'commentsActivityHistorys' => $commentsActivityHistorys,
                'shareActivityHistorys' => $shareActivityHistorys
            ]
        );
    }

    //get user's newfeed  
    private function getNewfeed($user_id)
    {
        $posts = 0;
        //get user's followed list 
        $followedList = Follow::getFollowedListRaw($user_id);
        if ($followedList) {

            //  get user's shared posts 
            //  get friend's shared posts (Check follow table )
            $followed = $followedList->where('follow_type', 'friend')->pluck('follow_id_fk')->toArray();
            $sharedPost = Share::where('status', 1)->whereIn('user_id_fk', [$user_id, ...$followed])
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
            $posts = Posts::whereIn('user_id_fk', [$user_id, ...$followed])->orderBy('created_at', 'desc')
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
      
      
      
      
      
      
            }

        //  get post in group that user joined (check follow table )

        //no-one is followed 
        else {
            //random any posts in DB 

        }
        $shuffleArray = [...$posts,...$sharedPost]; 
        shuffle($shuffleArray);
        return  $shuffleArray;
    }

    public function getAllPosts(Request $request)
    {
        $perPage = 5;
        $posts = Posts::paginate($perPage);

        return view('post-management', compact('posts'));
    }


    public function getPostAndCommentByPostID($id)
    {
        $post = Posts::findOrFail($id);
        $comments = Comment::where('post_id_fk', $id)
            ->orderBy('created_at', 'desc')
            ->get();
        return view('post-detail')->with('comments', $comments)->with('post', $post);
    }

    public static function getPostById($id)
    {
        $postOfUser = User::where('user_id', $id)->with(['posts' => function ($q) {
            $q->with([
                'user',
                'image' => function ($qImg) {
                    $qImg->where('img_location_fk', 0);
                },
                'video' => function ($qVid) {
                    $qVid->where('video_location_fk', 0);
                },
                'comments' => function ($q) {
                    $q->with([
                        'user',
                        'image' => function ($qImg) {
                            $qImg->where('img_location_fk', 1);
                        },
                        'video' => function ($qVid) {
                            $qVid->where('video_location_fk', 1);
                        }
                    ]);
                }
            ]);
        }])->get();

        return $postOfUser;
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     * Store: content, image, video
     * Contraint: size of video <10Mb
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user_id = Auth::user()->user_id; 
        $arrFollowers = Follow::getFollowersByUserId($user_id);

        if (empty($request->file('imgFileSelected')) && empty($request->file('vdFileSelected')) && empty($request->content)) { 
            return redirect()->back()->withErrors("Please, Enter your content"); 
        }

        $newPost = [
            "user_id_fk" => $user_id,
            "content" => $request->content == "" ? "" :  $request->content
        ];

        // store post to db 
        $post = Posts::create(
            $newPost
        );

        // insert images (if exist)
        if (!empty($request->file('imgFileSelected'))) {
            $newImgs = [];
            foreach ($request->file('imgFileSelected') as $imgElement) {
                try {
                    //luu file vao muc storage
                    $fileName = uniqid("img") . "." . $imgElement->extension();
                    $imgElement->storeAs('public/images', $fileName);
                    //luu thong tin vao mang
                    array_push(
                        $newImgs,
                        [
                            "url" => $fileName,
                            "ref_id_fk" => $post->id,
                            "img_location_fk" => 0 //0 is img in post, 1 is img in comment (later)
                        ],
                    );
                } catch (Exception $ex) {
                    dd($ex->getMessage());
                }
            }
            //them vao db
            Image::insert([...$newImgs]);
        }
        //insert images (if exist)
        if (!empty($request->file('vdFileSelected'))) {
            $newVideos = [];
            foreach ($request->file('vdFileSelected') as $vdElement) {
                try {
                    //luu file vao muc storage
                    $fileName = uniqid("vd") . "." . $vdElement->extension();
                    $vdElement->storeAs('public/videos', $fileName);
                    //luu thong tin vao mang
                    array_push(
                        $newVideos,
                        [
                            "url" => $fileName,
                            "ref_id_fk" => $post->id,
                            "video_location_fk" => 0 //0 is video in post, 1 is video in comment (later)
                        ],
                    );
                } catch (Exception $ex) {
                    dd($ex->getMessage());
                }
            }
            //them vao db
            Video::insert([...$newVideos]);
        }

        //notify to all followers 
        if ($arrFollowers) { 
            Notification::newNotifyToFollowers($arrFollowers,$post->id,"newpost"); 
        }
       
        return redirect("newsfeed");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     * Update :content, Image, Video
     * Des:
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    /**
     * Remove the specified resource from storage.
     * Delete Post and related source: video, image
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Posts::where('id', $id)->with('image', 'video')->get()[0];
        //delete images of post
        foreach ($post->image as $imgElement) {
            //delete images in storage
            Storage::delete('public/images/' . $imgElement->url);
            //delete image in image table
            $imgElement->delete();
        }

        //delete videos of post
        foreach ($post->video as $vdElement) {
            //delete images in storage
            Storage::delete('public/videos/' . $vdElement->url);
            //delete image in image table
            $vdElement->delete();
        }

        // //delete post by id
        Posts::find($id)->delete();
        return redirect('welcome');
    }


    public function deletePost($postID)
    {
        //delete comment in this post
        Comment::where('post_id_fk', $postID)->delete();

        $post = Posts::where('id', $postID)->with('image', 'video')->get()[0];

        foreach ($post->image as $imgElement) {
            //delete images in storage
            Storage::delete('public/images/' . $imgElement->url);
            //delete image in image table
            $imgElement->delete();
        }

        //delete videos of post
        foreach ($post->video as $vdElement) {
            //delete images in storage
            Storage::delete('public/videos/' . $vdElement->url);
            //delete image in image table
            $vdElement->delete();
        }

        Posts::find($postID)->delete();
        return redirect('/post-management')->with('success', 'Post deleted successfully.');
    }

    /*
        remove all images and videos of Post
    */
    public function clearAllImgAndVid($post_id)
    {
        $post = Posts::where('id', $post_id)->with('image', 'video')->get()[0];
        if (!empty($post)) {
            //delete images of post
            foreach ($post->image as $imgElement) {
                //delete images in storage
                Storage::delete('public/images/' . $imgElement->url);
                //delete image in image table
                $imgElement->delete();
            }

            //delete videos of post
            foreach ($post->video as $vdElement) {
                //delete images in storage
                Storage::delete('public/videos/' . $vdElement->url);
                //delete image in image table
                $vdElement->delete();
            }
        } else {
            return false;
            $post = Posts::where('id', $post_id)->with('image', 'video')->get()[0];
            //delete images of post
            foreach ($post->image as $imgElement) {
                //delete images in storage
                Storage::delete('public/images/' . $imgElement->url);
                //delete image in image table
                $imgElement->delete();
            }

            //delete videos of post
            foreach ($post->video as $vdElement) {
                //delete images in storage
                Storage::delete('public/videos/' . $vdElement->url);
                //delete image in image table
                $vdElement->delete();
            }

            //delete comments 
            CommentController::deleteCommentsPostId($post_id);

            // //delete post by id 
            Posts::find($post_id)->delete();
            return redirect('welcome');
        }
    }



    public function clearAllImg($post_id)
    {
        $post = Posts::where('id', $post_id)->with('image')->get()[0];
        if (!empty($post)) {
            //delete images of post
            foreach ($post->image as $imgElement) {
                //delete images in storage
                Storage::delete('public/images/' . $imgElement->url);
                //delete image in image table
                $imgElement->delete();
            }
        } else {
            return false;
        }
        return true;
    }
    /*
        remove all videos of Post
    */
    public function clearAllVid($post_id)
    {
        $post = Posts::where('id', $post_id)->with('video')->get()[0];
        if (!empty($post)) {
            //delete videos of post
            foreach ($post->video as $vdElement) {
                //delete images in storage
                Storage::delete('public/videos/' . $vdElement->url);
                //delete image in image table
                $vdElement->delete();
            }
        } else {
            return false;
        }
        return true;
    }

    public function updatePostStatus(Request $request, $id)
    {
        $post = Posts::find($id);
        $post->status = $request->input('status');
        $post->save();
        return redirect()->back()->with('success', 'Post updated successfully.');
    }
}
