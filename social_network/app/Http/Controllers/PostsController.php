<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Users;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //hiển thị giao diện trang chính 
        //hiển thị mọi bài viết trong db -> chưa hợp lý cho việc hiển thị phù hợp với từng tài khoản 
        return view('newsfeed',["posts"=>Posts::orderBy('created_at','desc')->get(),"user_tb"=>User::all()]); 

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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $newPost = [
           "user_id_fk"=>1, 
           "content" =>$request->content
        ]; 
        if ($newPost["content"]) {
            // Lưu bài đăng vào database
            $post = Posts::create([
                'user_id_fk' => $newPost["user_id_fk"],
                'content' => $newPost["content"],
            ]);
        } else {
            // Xử lý lỗi nếu content không được cung cấp
            return ['error' => 'Vui lòng nhập nội dung bài đăng'];
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
