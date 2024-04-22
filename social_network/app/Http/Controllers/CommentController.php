<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Posts;
use \App\Models\Comment;
use \App\Http\Controllers\PostController;
use App\Models\Image;
use App\Models\Video;
use Exception;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class CommentController extends Controller
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
     * store imgs, vids and content
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->post_id) {
            $newComment = [
                "post_id_fk" => $request->post_id,
                "content" => empty($request->content)? "" : $request->content,
                "user_id_fk" => Auth::user()->user_id
            ];
            
            $cmt = Comment::create($newComment);

            //check and add images 
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
                                "ref_id_fk" => $cmt->comment_id,
                                "img_location_fk" => 1 //0 is img in post, 1 is img in comment (later)
                            ],
                        );
                    } catch (Exception $ex) {
                        dd($ex->getMessage());
                    }
                }
                //them vao db 
                Image::insert([...$newImgs]);
            }
            //check and add videos
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
                                "ref_id_fk" => $cmt->comment_id,
                                "video_location_fk" => 1 //0 is video in post, 1 is video in comment (later)
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
        return redirect('newsfeed'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $comment = Comment::find($id);
        $post = $comment->post(); // Đảm bảo rằng phương thức post() trả về một bài viết

        // Truyền biến $comment và $post vào view 'inbox'
        return view('inbox')->with('comment', $comment)->with('post', $post);
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
