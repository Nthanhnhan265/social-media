<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\LikePost;
use App\Models\Posts;


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
    public function like()
    {
        $post = request()->all()['postId'];
        $status = request()->all()['status'];
        $this->toggleLike($post, $status); // 1: Like
    }

    public function dislike()
    {
        $post = request()->all()['postId'];
        $status = request()->all()['status'];  
        $this->toggleLike($post, $status); // 0: Dislike
    }
    
    private function toggleLike($post, $status)
    {
        $user_id = Auth::user()->user_id;
        $existingLike = LikePost::where('user_id_fk', $user_id)
            ->where('post_id_fk', $post)
            ->first();
        // {{dd($post->id);}}
        if ($existingLike) {
            $existingLike->status = $status;
            $existingLike->save();
        } else {
            LikePost::create([
                'user_id_fk' => $user_id,
                'post_id_fk' => $post,
                'status' => $status,
            ]);
        }
    }


}
