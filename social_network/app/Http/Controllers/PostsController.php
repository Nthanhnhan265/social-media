<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Follow;
use App\Models\Group;
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
    use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;

use Symfony\Component\VarDumper\Caster\RedisCaster;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

//     public function index(Request $request)
// {
//     $posts = Posts::orderBy('created_at', 'desc')
//     ->with([
//         'user',
//         'image',
//         'video',
//         'comments' => function ($q) {
//             $q->with([
//                 'user',
//                 'image' => function ($qImg) {
//                     $qImg->where('img_location_fk', 1);
//                 },
//                 'video' => function ($qVid) {
//                     $qVid->where('video_location_fk', 1);
//                 }
//             ])->orderBy('created_at', 'desc');
//         }
//     ])->paginate(5);

// // Log posts data to check if it is fetching properly
// Log::info('Fetched posts:', ['posts' => $posts->toArray()]); // Convert posts collection to array for logging

// if ($request->ajax()) {
//     return view('partials.posts', compact('posts'))->render();
// }

// return view('newsfeed', compact('posts'));
// }

    public function index()
    {
        $userId = Auth::user()->user_id;
        $friend_list = Relationship::getFriendListOfUser();
        $postActivityHistorys = DB::select('select * from posts where user_id_fk = ?', [$userId]);
        $commentsActivityHistorys = DB::select('select comments.*, users.first_name as user_first_name ,users.last_name as user_last_name from comments inner join users on comments.comment_id = users.user_id where user_id_fk != ?', [$userId]);
        $shareActivityHistorys = DB::select('select * from share where user_id_fk = ?', [$userId]);
        $posts = $this->getNewfeed($userId); 
        $firstPost = false; 
        //if session exists (user clicked notification) => return post that is remained in notification box at the top
        if (Session::get("postFound") && Session::get("type")) {
            //set session to variable 
            $type = Session::get("type"); 
            $postFound = Session::get("postFound"); 
            //get posts 
            $posts = Posts::getNewfeedAndNewPostFirst($userId,$postFound,$type); 
            //remove session
            Session::forget('postFound'); 
            Session::forget('type');
            $firstPost = true; 
            
        }
        //hiển thị giao diện trang chính
        //hiển thị mọi bài viết trong db -> chưa hợp lý cho việc hiển thị phù hợp với từng tài khoản
        return view(
            'newsfeed',
            [
                "posts" => $posts,
                "firstPost" => $firstPost,
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
        $posts = [];
        $sharedPost = [];
        //get user's followed list 
        $followedList = Follow::getFollowedListRaw($user_id);
         if (!$followedList->get()->isEmpty()) {

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
            $posts = Posts::inRandomOrder()->limit(10)
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
                    ])->orderBy('created_at', 'desc');
                }
            ])->get();
           
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
            $q->orderBy('created_at', 'desc')->with([
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
            ]) ;
        }])->first()->posts;
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
        $request->validate( [
            'vdFileSelected[]' => 'max:20480'
        ]);
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
        
        return redirect()->back();
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
    public function showEditForm($id)
    {
    $post = Posts::find($id);
 
    if (!$post) {
        return redirect()->back()->with('error', 'Post not found!');
    }
    // {{dd($post);}}
    // Lấy dữ liệu content của bài đăng
    $content = $post->content;
   
    // Lấy danh sách hình ảnh của bài đăng
    $images = $post->image;
    //  {{dd($post);}}
    return view('edit-post', compact('content', 'images','post'));
    }
    public function update(Request $request, $id)
    {
        //find and check if not empty
        $findPost =  Posts::find($id);
        // {{dd($findPost);}}
        if (!empty($findPost)) {
            $editPost = [
                "content" => $request->content == "" ? "" :  $request->content
            ];

            // update content of post
            $findPost->update(
                $editPost
            );

            if (!empty($request->file('imgFileSelected'))) {
                $this->clearAllImg($id);
                // insert images
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
                                    "ref_id_fk" => $id,
                                    "img_location_fk" => 0 //0 is img in post, 1 is img in comment (later)
                                ],
                            );
                        } catch (Exception $ex) {
                            dd($ex->getMessage());
                        }
                    }
                    //xóa bộ ảnh cũ trong DB và trong storage

                    //them vao db 
                    Image::insert([...$newImgs]);
                }
            }
            if (!empty($request->file('vdFileSelected'))) {
                $this->clearAllVid($id);
                // insert videos
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
                                    "ref_id_fk" => $id,
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
          
            }
            
         
            // {{dd($request->all());}}
             return redirect('time-line/user-profile/'. $findPost->user_id_fk); 
           
        }
    }
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
        // return redirect('newsfeed');
        return redirect()->back()->with('success', 'Post deleted successfully.');
    }
    public function postOfTimeLine(Request $request,$id)
    {
        dd("called");
        $this->store($request);

    }
    public function search(Request $request)
    {
    $search = $request->input('search');

    // Search in posts
    $posts = Posts::where('content', 'like', "%{$search}%")->with([
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

    // Search in groups
    $groups = Group::where('name_group', 'like', "%{$search}%")
                   ->orWhere('description', 'like', "%{$search}%")
                   ->with('images')
                   ->get();
   
    //  dd($groups);
    $users = User::where('first_name', 'like', "%{$search}%")
                   ->orWhere('last_name', 'like', "%{$search}%")
                   ->orWhere('email', 'like', "%{$search}%")
                   ->get();

    return view('search', compact('posts', 'groups', 'search','users'));
    }

    public function index2()
    {
        $userId = Auth::user()->user_id;
        $friend_list = Relationship::getFriendListOfUser();
        $postActivityHistorys = DB::select('select * from posts where user_id_fk = ?', [$userId]);
        $commentsActivityHistorys = DB::select('select comments.*, users.first_name as user_first_name ,users.last_name as user_last_name from comments inner join users on comments.comment_id = users.user_id where user_id_fk != ?', [$userId]);
        $shareActivityHistorys = DB::select('select * from share where user_id_fk = ?', [$userId]);
        $posts = $this->getNewfeed($userId); 
        $firstPost = false; 
        //if session exists (user clicked notification) => return post that is remained in notification box at the top
        if (Session::get("postFound") && Session::get("type")) {
            //set session to variable 
            $type = Session::get("type"); 
            $postFound = Session::get("postFound"); 
            //get posts 
            $posts = Posts::getNewfeedAndNewPostFirst($userId,$postFound,$type); 
            //remove session
            Session::forget('postFound'); 
            Session::forget('type');
            $firstPost = true; 
            
        }
        //hiển thị giao diện trang chính
        //hiển thị mọi bài viết trong db -> chưa hợp lý cho việc hiển thị phù hợp với từng tài khoản
        return view(
            'group-view',
            [
                "posts" => $posts,
                "firstPost" => $firstPost,
                "friends" => $friend_list,
                'postActivityHistors' => $postActivityHistorys,
                'commentsActivityHistorys' => $commentsActivityHistorys,
                'shareActivityHistorys' => $shareActivityHistorys
            ]
        );
       
    }

    public function searchInManagement(Request $request)
     {
         $query = $request->input('query');
         
         $posts = Posts::where('content', 'LIKE', "%{$query}%")
                     ->paginate(5); 
     
         return view('post-management-search', compact('posts'));
     }

}
