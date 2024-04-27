<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Posts;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Users;
use App\Models\Video;
use Exception;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Models\Comment;

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
        return view('newsfeed', ["posts" => Posts::orderBy('created_at','desc')->with('user','image','video')->get()]);
    }

    public function getAllPosts(Request $request)
    {
        $perPage = 5; 
        $posts = Posts::paginate($perPage);

        return view('post-management', compact('posts'));
    }

    
    public function getPostByID($id)
    {
        $post = Posts::findOrFail($id);
        return view('post-detail', compact('post'));
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

        $newPost = [
            "user_id_fk" => Auth::user()->user_id,
            "content" => $request->content == "" ? "":  $request->content
        ];

        // Lưu bài đăng vào database
        $post = Posts::create(
            $newPost
        );

        // chen anh (neu co)
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
                            "img_location_fk"=> 0 //0 is img in post, 1 is img in comment (later)
                        ],
                    );

                } catch(Exception $ex) { 
                    dd($ex->getMessage()); 
                }
            }
            //them vao db 
            Image::insert([...$newImgs]); 
        }

        if(!empty($request->file('vdFileSelected'))) { 
            $newVideos = []; 
            foreach($request->file('vdFileSelected') as $vdElement) { 
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
                            "video_location_fk"=> 0 //0 is video in post, 1 is video in comment (later)
                        ],
                    );
                    
                } catch(Exception $ex) { 
                    dd($ex->getMessage()); 
                }
            }
            //them vao db 
            Video::insert([...$newVideos]); 
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
    public function update(Request $request, $id)
    {
        //find and check if not empty
        $findPost =  Posts::find($id); 
        if (!empty($findPost)) { 
            $editPost = [
                "content" => $request->content == "" ? "":  $request->content
            ];
    
            // update content of post
            $findPost->update(
                $editPost
            );
            
            if(!empty($request->file('imgFileSelected'))) { 
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
                                    "img_location_fk"=> 0 //0 is img in post, 1 is img in comment (later)
                                ],
                            );
        
                        } catch(Exception $ex) { 
                            dd($ex->getMessage()); 
                        }
                    }
                    //xóa bộ ảnh cũ trong DB và trong storage
        
                    //them vao db 
                    Image::insert([...$newImgs]); 
                }

            }
            if(!empty($request->file('vdFileSelected'))) { 
                $this->clearAllVid($id);
                // insert videos
                if(!empty($request->file('vdFileSelected'))) { 
                    $newVideos = []; 
                    foreach($request->file('vdFileSelected') as $vdElement) { 
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
                                    "video_location_fk"=> 0 //0 is video in post, 1 is video in comment (later)
                                ],
                            );
                            
                        } catch(Exception $ex) { 
                            dd($ex->getMessage()); 
                        }
                    }
                    //them vao db 
                    Video::insert([...$newVideos]); 
                }

            }
            return redirect("newsfeed");
        }





    }

    /**
     * Remove the specified resource from storage.
     * Delete Post and related source: video, image
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Posts::where('id',$id)->with('image','video')->get()[0]; 
        //delete images of post 
        foreach($post->image as $imgElement)  { 
            //delete images in storage
            Storage::delete('public/images/'.$imgElement->url);
            //delete image in image table
            $imgElement->delete(); 
        }

        //delete videos of post 
        foreach($post->video as $vdElement)  { 
            //delete images in storage
            Storage::delete('public/videos/'.$vdElement->url);
            //delete image in image table
            $vdElement->delete(); 
        }
        
        // //delete post by id 
        Posts::find($id)->delete();        
        return redirect('welcome');  
    }


    public function deletePost($postID) {
        //delete comment in this post
        Comment::where('post_id_fk', $postID)->delete();

        $post = Posts::where('id',$postID)->with('image','video')->get()[0]; 
        
        foreach($post->image as $imgElement)  { 
            //delete images in storage
            Storage::delete('public/images/'.$imgElement->url);
            //delete image in image table
            $imgElement->delete(); 
        }

        //delete videos of post 
        foreach($post->video as $vdElement)  { 
            //delete images in storage
            Storage::delete('public/videos/'.$vdElement->url);
            //delete image in image table
            $vdElement->delete(); 
        }

        Posts::find($postID)->delete(); 
        return redirect()->back()->with('success', 'Group deleted successfully.');      
    }  
    /* 
        remove all images and videos of Post
    */ 
    public function clearAllImgAndVid($post_id) { 
        $post = Posts::where('id',$post_id)->with('image','video')->get()[0]; 
        if(!empty($post)) { 
            //delete images of post 
            foreach($post->image as $imgElement)  { 
                //delete images in storage
                Storage::delete('public/images/'.$imgElement->url);
                //delete image in image table
                $imgElement->delete(); 
            }
    
            //delete videos of post 
            foreach($post->video as $vdElement)  { 
                //delete images in storage
                Storage::delete('public/videos/'.$vdElement->url);
                //delete image in image table
                $vdElement->delete(); 
                
            }

        } else { 
            return false; 
        }
        return true;
    }
    /* 
        remove all images of Post
    */ 
    public function clearAllImg($post_id) { 
        $post = Posts::where('id',$post_id)->with('image')->get()[0]; 
        if(!empty($post)) { 
            //delete images of post 
            foreach($post->image as $imgElement)  { 
                //delete images in storage
                Storage::delete('public/images/'.$imgElement->url);
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
    public function clearAllVid($post_id) { 
        $post = Posts::where('id',$post_id)->with('video')->get()[0]; 
        if(!empty($post)) { 
            //delete videos of post 
            foreach($post->video as $vdElement)  { 
                //delete images in storage
                Storage::delete('public/videos/'.$vdElement->url);
                //delete image in image table
                $vdElement->delete(); 
            }
        } else { 
            return false; 
        }
        return true;
    }

    

}
