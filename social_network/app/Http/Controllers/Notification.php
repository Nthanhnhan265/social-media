<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\LikePost;
use App\Models\Notification as ModelsNotification;
use App\Models\Posts;
use App\Models\Relationship;
use App\Models\Share;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use function PHPSTORM_META\type;

class Notification extends Controller
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
        //
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
        $userId = Auth::user()->user_id;
        $noti_id = $id;
        
        
        if (isset($request->type, $request->type_id)) {
            if (ModelsNotification::markReadNotify($noti_id)) {
                // friend request
                if ($request->type == "friend_request" || $request->type == "accept") {
                    return redirect(url("time-line/user-profile/" . $request->type_id));
                }


                //  friend posted a new post 
                else if ($request->type == "newpost") {
 
                    $postFound = Posts::where('id', $request->type_id)->first();
                    Session::flash('postFound',$postFound);
                    Session::flash('type',"newpost");
                    // $associativeArray = array_merge(["posts" => Posts::getNewfeedAndNewPostFirst($user_id, $postFound, $request->type)],$otherInfo); 
                    // return view('newsfeed', $associativeArray);
                    return redirect(url('newsfeed')); 
                }
                //friend shared a new post
                else if ($request->type == "sharepost") {
                    $postFound = Share::where('share_id', $request->type_id)->first();
                    Session::flash('postFound',$postFound);
                    Session::flash('type',"sharepost");
                    // $associativeArray = array_merge(["posts" => Posts::getNewfeedAndNewPostFirst($user_id, $postFound, $request->type)],$otherInfo); 
                    // return view('newsfeed', $associativeArray);
                    return redirect(url('newsfeed')); 
                }

                  //friend commented your post
                else if ($request->type == "commentpost") {
                    $post_id = Comment::where('comment_id',$request->type_id)->first(); 
                    if ($post_id->post_id_fk) { 
                        $post_id = $post_id->post_id_fk; 
                        $postFound = Posts::where('id',$post_id )->first();
                        Session::flash('postFound',$postFound);
                        Session::flash('type',"commentpost");
                        return redirect(url('newsfeed')); 
                    }
                }

                //friend liked your post
                else if ($request->type == "likepost") {
                    $post_id = LikePost::where('likepost_id',$request->type_id)->first(); 
                    if ($post_id->post_id_fk) { 
                        $post_id = $post_id->post_id_fk; 
                        $postFound = Posts::where('id',$post_id )->first();
                        Session::flash('postFound',$postFound);
                        Session::flash('type',"commentpost");
                        return redirect(url('newsfeed')); 
                    }
                }


            } else {
                dd('marked');
            }
        }
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
