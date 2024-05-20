<?php

namespace App\Http\Controllers;

use App\Models\Follow;
use App\Models\LikePost;
use App\Models\Notification;
use App\Models\Posts;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class LikePostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $userId = Auth::id();
        $type = $request->type;
        $postId = $request->post;
        $like_id = 0; 
        // Tìm like dựa trên post_id và user_id
        if ($type == true) {
            $like = LikePost::where('post_id_fk', $postId)->where('user_id_fk', $userId)->first();
            $like->delete();
        } else{
            $data = new LikePost();
            $data->user_id_fk = $userId;
            $data->post_id_fk = $postId;
            $data->save();
            // $like_id = $data->getKey(); 
        }
        $likes = Posts::find($request->post)->sumLikes();

        $user_id = Auth::user()->user_id; 
        $friend = Posts::where('id',$postId)->with('user')->first();

        if($friend->user->user_id ) { 
            //list people that a friend followed 
            $arrFollowers = Follow::getFollowersByUserId($friend->user->user_id);
                    
            //check if friend is following us
            if (in_array($user_id,$arrFollowers)) {   
                Notification::newNotify($friend->user->user_id,$like_id,"likepost"); 
            }
        }
     
        return response()->json([
            'bool' => true,
            'likes' => $likes
        ]);

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
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
