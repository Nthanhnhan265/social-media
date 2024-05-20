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
use Illuminate\Support\Facades\Storage;

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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->post_id) {
            $newComment = [
                "post_id_fk" => $request->post_id,
                "content" => empty($request->content) ? "" : $request->content,
                "user_id_fk" => Auth::user()->user_id,
                "status" => 1
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
        $comment = Comment::with('image', 'video')->find($id);
        if (!$comment) {
            return redirect()->back()->withErrors('Comment not found.');
        }

        return view('edit-comment', compact('comment'));
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
       
        $comment = Comment::with('image', 'video')->find($id);
        if ($comment) {
           
            $comment->update([
                'content' => $request->content ?? ''
            ]);
    
       
            if ($request->hasFile('imgFileSelected')) {
             
                foreach ($comment->image as $image) {
                    Storage::delete('public/images/' . $image->url);
                    $image->delete();
                }
    
                // Save new images
                $newImgs = [];
                foreach ($request->file('imgFileSelected') as $imgElement) {
                    $fileName = uniqid('img') . '.' . $imgElement->extension();
                    $imgElement->storeAs('public/images', $fileName);
    
                    $newImgs[] = [
                        'url' => $fileName,
                        'ref_id_fk' => $id,
                        'img_location_fk' => 1 // 1 indicates image in comment
                    ];
                }
                Image::insert($newImgs);
            }
    
          
            if ($request->hasFile('vdFileSelected')) {
            
                foreach ($comment->videos as $video) {
                    Storage::delete('public/videos/' . $video->url);
                    $video->delete();
                }
    
            
                $newVideos = [];
                foreach ($request->file('vdFileSelected') as $vdElement) {
                    $fileName = uniqid('vd') . '.' . $vdElement->extension();
                    $vdElement->storeAs('public/videos', $fileName);
    
                    $newVideos[] = [
                        'url' => $fileName,
                        'ref_id_fk' => $id,
                        'video_location_fk' => 1 // 1 indicates video in comment
                    ];
                }
                Video::insert($newVideos);
            }
    
            return redirect('newsfeed')->with('success', 'Comment updated successfully.');
        }
    
        // Handle the case where the comment does not exist
        return redirect()->back()->withErrors('Comment not found.');
    }
    public function updateCommentStatus(Request $request, $id)
    {
        $commemt = Comment::find($id); 
        $commemt->status = $request->input('status');    
        $commemt->save();
        return redirect()->back()->with('success', 'Comment updated successfully.');
    }
    public function deleteComment($id) {
        $comment = Comment::find($id);
    
        $comment->delete();
        return redirect()->back()->with('success', 'Comment deleted successfully.');
    } 
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Comment::where('comment_id', $id)->with('image', 'video')->get()[0];
      
       
        foreach ($post->image as $imgElement) {   
            Storage::delete('public/images/' . $imgElement->url);
            $imgElement->delete();
        }
        foreach ($post->video as $vdElement) {   
            Storage::delete('public/videos/' . $vdElement->url);
            $vdElement->delete();
        }

        Comment::find($id)->delete();
        // {{dd("callled");}}
        // return redirect('newsfeed');
        return redirect('newsfeed');
    }
    public function deleteImage($id)
{
    $image = Image::findOrFail($id);
    Storage::delete('public/images/' . $image->url);
    $image->delete();

    return response()->json(['success' => 'Image deleted successfully.']);
}

public function deleteVideo($id)
{
    $video = Video::findOrFail($id);
    Storage::delete('public/videos/' . $video->url);
    $video->delete();

    return response()->json(['success' => 'Video deleted successfully.']);
}

    /**
     * Remove all comments of a post
     * @param int $post_id 
     *
     * 
     */
    public static function deleteCommentsPostId($post_id)
    {
        $allComments = Comment::where("post_id_fk", $post_id)->with('image','video');
        //loop each comment 
        foreach ($allComments as $cmt) {
            //delete images of comments
            foreach ($cmt->image as $imgElement) {
                //delete images in storage
                Storage::delete('public/images/' . $imgElement->url);
                //delete image in image table
                $imgElement->delete();
            }

            //delete videos of comments
            foreach ($cmt->video as $vdElement) {
                //delete images in storage
                Storage::delete('public/videos/' . $vdElement->url);
                //delete image in image table
                $vdElement->delete();
            }

        }
        //delete the comment
        Comment::where('post_id_fk',$post_id)->delete();
    }
}
