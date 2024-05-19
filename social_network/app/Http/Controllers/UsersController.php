<?php

namespace App\Http\Controllers;
use App\Models\User;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\Users;
use App\Models\UserGroup;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\UploadedFile;
use App\Models\Posts;


class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all(); 
        return view('newsfeed', ['users' => $users]);
    }

    public function getAllUsers(Request $request)
    {
        $perPage = 5; 
        $users = User::paginate($perPage); 
        return view('user-management', compact('users'));
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
    public function getUserByID($user_id)
    {
        $user = User::findOrFail($user_id);
        return view('edit-user', compact('user'));
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
        $postOfUser = Posts::getPostAndShare($id); 
        // dump($postOfUser);
         $isInFriendList = DB::select("SELECT * FROM relationships WHERE (sender = ? AND receiver = ?)
        OR (sender = ? AND receiver = ?)",[Auth::user()->user_id,$id,$id,Auth::user()->user_id]);
        
        return view('time-line',["id"=>$id,'user'=>$user,"posts"=>$postOfUser,"friend"=>$isInFriendList]);
    }
   
    public function showAbout($id)
    {
        $user = User::findOrFail($id); 
        $isInFriendList = DB::select("SELECT * FROM relationships WHERE (sender = ? AND receiver = ?)
        OR (sender = ? AND receiver = ?)",[Auth::user()->user_id,$id,$id,Auth::user()->user_id]);
        return view('about',["id"=>$id,'user'=>$user,"friend"=>$isInFriendList]);
    }

    public function showProfile($id){
        $user = User::findOrFail($id);
        $isInFriendList = DB::select("SELECT * FROM relationships WHERE (sender = ? AND receiver = ?)
        OR (sender = ? AND receiver = ?)",[Auth::user()->user_id,$id,$id,Auth::user()->user_id]);
        return view('edit-profile-basic',["id"=>$id,'user'=>$user,"friend"=>$isInFriendList]);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function edit(User $user)
    {
        return view('edit-user', compact('user'));
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
     public function update(Request $request, User $user,$id){

        $dob = $request->year.'-'.$request->month.'-'.$request->day;
        // Tìm user cần update
        $user= User::find($id);
        $user->update([
            "first_name" => $request->first_name, 
            "last_name" => $request->last_name,
            "email" => $request->email,
            
            "DOB" => $dob,
            "description" =>$request->description
        ]);
        // {{dd($user->first_name);}}
        return redirect('time-line/user-profile/'.$user->user_id);
        
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

    public function deleteUser($userId) {
        $user = User::find($userId);

        Posts::where('user_id_fk', $userId)->delete();
        Comment::where('user_id_fk', $userId)->delete();
        UserGroup::where('user_id_fk', $userId)->delete();
        
        $user->delete();
        return redirect()->back();
    }   
    
    public function updateUser(Request $request, $userId) {
        $user = User::find($userId);
        $user->first_name = $request->input('first_name');
        $user->last_name = $request->input('last_name');
        $user->email = $request->input('email');
        $user->gender = $request->input('gender');
        $user->password = Hash::make($request->input('password'));
        $user->DOB = $request->input('DOB');
        $user->description = $request->input('description');
        $user->role_id_fk = $request->input('role_id_fk');
        $user->status = $request->input('status');
    
        if ($request->hasFile('fileUpload')) {
            $image = $request->file('fileUpload');
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('images/resources'), $imageName);
            $user->avatar = $imageName;
        }
    
        $user->save();
        return redirect()->back()->with('success', 'User updated successfully.');
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
          $friend = DB::select("SELECT * FROM relationships WHERE (sender = ? AND receiver = ?)
          OR (sender = ? AND receiver = ?)",[Auth::user()->user_id,$id,$id,Auth::user()->user_id]);
          return view('timeline-photos', compact('posts', 'user','friend'));
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
          $friend = DB::select("SELECT * FROM relationships WHERE (sender = ? AND receiver = ?)
          OR (sender = ? AND receiver = ?)",[Auth::user()->user_id,$id,$id,Auth::user()->user_id]);
          return view('timeline-videos', compact('posts', 'user','friend'));
     }

     //tìm kiếm người dùng
     public function search(Request $request)
     {
         $query = $request->input('query');
         
         $users = User::where('first_name', 'LIKE', "%{$query}%")
                     ->orWhere('last_name', 'LIKE', "%{$query}%")
                     ->paginate(5); 
     
         return view('user-management-search', compact('users'));
     }
     
}
