<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\UploadedFile;
use App\Models\Posts;
use App\Models\Image;
use App\Http\Controllers\Exception;
class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all(); // Lấy tất cả các người dùng từ cơ sở dữ liệu

        return view('newsfeed', compact('users'));
    }

    public function showImagePost($id)
    {
        
        $posts = Posts::where('user_id_fk',$id)->with('image','video','user')->get();
        
        if (!$posts) {
            return redirect()->back()->with('error', 'Post not found!');
        }
        // {{dd($post);}}
     
    
        // Lấy danh sách hình ảnh của bài đăng
        //  $images = $post->image;
         //  {{dd($post);}}
         $user = User::find($id);

         return view('timeline-photos', compact('posts', 'user'));
    }
    public function showVideoPost($id)
    {
        
        $posts = Posts::where('user_id_fk',$id)->with('image','video','user')->get();
        
        if (!$posts) {
            return redirect()->back()->with('error', 'Post not found!');
        }
        // {{dd($post);}}
     
    
        // Lấy danh sách hình ảnh của bài đăng
        //  $images = $post->image;
         //  {{dd($post);}}
         $user = User::find($id);

         return view('timeline-videos', compact('posts', 'user'));
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
        $user = User::findOrFail($id); 
        $postsOfUser = PostsController::getPostById($id); 
        
        // {{dd($postsOfUser);}}
        //  dd($postsOfUser);
        // {{dd($user->user_id);}}
        return view('time-line', ["id" => $id, 'user' => $user, "posts" => $postsOfUser]);
     
    }
        public function showAbout($id)
    {
        $user = User::findOrFail($id); 
        // {{dd($user);}}
        return view('about',["id"=>$id,'user'=>$user]);
    }
    public function showProfile($id){
        $user = User::findOrFail($id);
        return view('edit-profile-basic',["id"=>$id,'user'=>$user]);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        // $user = User::findOrFail($id); // Lấy thông tin người dùng từ ID
        return view('edit-profile-basic', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user,$id){
        // Tìm user cần update
        $user= User::find($id);
        $user->update($request->all());
        // {{dd($user->first_name);}}
        return redirect('time-line/user-profile/'.$user->user_id);
        
    }
    public function updateAvatar(Request $request,$id){
        // Tìm user cần update 
        $user = User::findOrFail($id);
        
        if (!empty($request->file('avatar'))) {
           
            // insert images
            if (!empty($request->file('avatar'))) {
              
             
                    try {
                        //luu file vao muc storage
                        $fileName = uniqid("avt") . "." . $request->file('avatar')->extension();
                        $request->file('avatar')->storeAs('public/images', $fileName);

                        //luu thong tin vao mang 
                        $user->avatar = $fileName;
                        $user->save();
                        
                    } catch (Exception $ex) {
                        dd($ex->getMessage());
                    }
                }
                //xóa bộ ảnh cũ trong DB và trong storage

             
              
            }
            return redirect('time-line/user-profile/'.$user->user_id);
     }
     
    public function search(Request $request)
    {
       $search = $request->search;
       $posts = Posts::where(function($q) use ($search){
            $q->where('content','like',"%$search%");

       })
    //    ->orWhereHas('groups',function($q) use ($search){
    //     $q->where('name_group','like',"%$search%");
    //    })
       ->get();
    //    {{dd($posts);}}
         return view('time-line/user-profile/' .$posts->user->user_id, compact('posts', 'search'));
    }
     public function updateBackground(Request $request,$id){
        // Tìm user cần update 
        $user = User::findOrFail($id);
        
        if (!empty($request->file('background'))) {
           
            // insert images
            if (!empty($request->file('background'))) {
              
             
                    try {
                        //luu file vao muc storage
                        $fileName = uniqid("bg") . "." . $request->file('background')->extension();
                        $request->file('background')->storeAs('public/images', $fileName);

                        //luu thong tin vao mang 
                        $user->background = $fileName;
                        $user->save();
                        
                    } catch (Exception $ex) {
                        dd($ex->getMessage());
                    }
                }
                //xóa bộ ảnh cũ trong DB và trong storage

             
              
            }
            return redirect('time-line/user-profile/'.$user->user_id);
     }
    public function showAvatarUser($id)
    {
    $post = User::find($id);
 
  
    // {{dd($post);}}
    // Lấy dữ liệu content của bài đăng
    $content = $post->content;
   
    // Lấy danh sách hình ảnh của bài đăng
    $images = $post->image;
    $users = $post->user;
    //  {{dd($post);}}
    return view('edit-post', compact('content', 'images','post'));
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
    public function editUserAvatar($userId, UploadedFile $avatar)
{
    // Kiểm tra xem người dùng có tồn tại không
    $user = User::find($userId);

    if (!$user) {
        return false; // hoặc ném một ngoại lệ nếu cần thiết
    }

    // Xóa avatar cũ nếu tồn tại
    if ($user->avatar) {
        Storage::delete($user->avatar); // Xóa avatar cũ từ ổ đĩa
    }

    // Lưu avatar mới
    $path = $avatar->store('avatars', 'public'); // Lưu avatar vào thư mục 'avatars' trong storage/app/public

    // Cập nhật đường dẫn avatar mới vào trong cơ sở dữ liệu
    $user->avatar = $path;
    $user->save();

    return true;
}

}
