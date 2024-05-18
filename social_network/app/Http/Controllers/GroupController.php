<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use \App\Models\Group;
use \App\Models\UserGroup;
use \App\Models\Comment;
use \App\Models\Posts;
use \App\Models\PostGroup;
use Illuminate\Support\Facades\DB;
use App\Models\Relationship;
use App\Models\Follow;
use Illuminate\Support\Facades\Session;

class GroupController extends Controller
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

    public function getAllGroups(Request $request)
    {
        $perPage = 5; 
        $groups = Group::with(['usergroups' => function ($query) {
            $query->where('role_id_fk', 0); 
        }])->paginate($perPage); 

        return view('group-management', compact('groups'));
    }

    public function getAllGroups2(Request $request)
    {
        $groups = Group::all();

        return view('groups')->with('groupsAll', $groups);
    }

    //lấy chi tiết nhóm trong group-management
    public function getGroupByID($group_id)
    {
        $group = Group::findOrFail($group_id);
        return view('edit-group', compact('group'));
    }

    //lấy chi tiết nhóm trong group
    public function getGroupByID2($group_id)
    {
        $group = Group::findOrFail($group_id);
        return view('edit-group-2', compact('group'));
    }
    public function getGroupByUserID()
    {
        $userId = Auth::user()->user_id;
        $groups = UserGroup::where('user_id_fk', $userId)
                ->get();                
        return view('groups')->with('groups', $groups);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $newGroup = [
            "name_group" => $request->name,
            "description" => $request->description,
            "status" => 1,
        ];

        // Tạo group mới
        $group = Group::create($newGroup);
        
        $groupId = $group->group_id;

        // Lấy User_id của người đang đăng nhập
        $userId = Auth::user()->user_id;

        // Tạo usergroup
        UserGroup::create([
            'group_id_fk' => $groupId,
            'user_id_fk' => $userId,
            'role_id_fk' => 0,
            'request' => 0,
        ]);

        return redirect('groups');
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

     //sửa group trong group-management
    public function update(Request $request, $group_id)
    {
        $group = Group::find($group_id);
        $group->name_group = $request->input('name_group');  
        $group->description = $request->input('description');  
        $group->status = $request->input('status');    
        $group->save();
        return redirect()->back()->with('success', 'Group updated successfully.');   
    }

    //xoá group trong group-management
    public function deleteGroup($groupID) {
        UserGroup::where('group_id_fk', $groupID)->delete();
        $group = Group::find($groupID);
    
        if ($group) {
            $group->delete();
            return redirect()->back()->with('success', 'Group deleted successfully.');
        } else {
            return redirect()->back()->with('error', 'Group not found.');
        }
    }  
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($group_id)
    {
          
    }

    public function deleteGroupByGroupAdmin($group_id)
    {
        DB::transaction(function () use ($group_id) {
            // Tìm nhóm theo ID
            $group = Group::findOrFail($group_id);
    
            // Xóa tất cả các user trong nhóm từ bảng usergroup
            UserGroup::where('group_id_fk', $group_id)->delete();
    
            // Lấy danh sách post_id từ bảng postgroup liên quan đến group_id
            $postIds = PostGroup::where('group_id_fk', $group_id)->pluck('post_id_fk');
    
            // Xóa tất cả các bài viết liên quan từ bảng postgroup
            PostGroup::where('group_id_fk', $group_id)->delete();
    
            // Xóa các bình luận liên quan từ bảng comments
            Comment::whereIn('post_id_fk', $postIds)->delete();
    
            // Xóa các bài viết từ bảng post
            Posts::whereIn('id', $postIds)->delete();
    
            // Xóa nhóm
            $group->delete();
        });
    
        return redirect('groups');  
    }


    //Lấy các post của group theo group_id
    public function getPostByGroupId($group_id)
    {
        $userId = Auth::user()->user_id;

        $userRole = UserGroup::where('user_id_fk', $userId)
                     ->where('group_id_fk', $group_id)
                     ->first();
        //lấy mảng gồm id posts của tất cả bài viết trong nhóm
        $postIds = PostGroup::where('group_id_fk', $group_id)->pluck('post_id_fk')->toArray();  
        $posts = Posts::getPostsByIds($postIds); 
        //Đếm số thành viên nhóm
        $memberCount = UserGroup::where('group_id_fk', $group_id)
                    ->where('request', 0)
                    ->count();
                    
        $members = UserGroup::where('group_id_fk', $group_id)   
                    ->where('request', 0)                
                    ->get();

        $group = Group::where('group_id', $group_id)
                ->first();
        
        return view(
            'group-view',
            [             
                'posts' => $posts,
                'userRole'=> $userRole,
                'memberCount'=> $memberCount,
                'group'=> $group,
                'members'=> $members
            ]
        );
    }

    public function getAllForGroupMember($group_id)
    {
        $userId = Auth::user()->user_id;

        $userRole = UserGroup::where('user_id_fk', $userId)
                     ->where('group_id_fk', $group_id)
                     ->first();

        $posts = PostGroup::where('group_id_fk', $group_id)
                ->get();

        //Đếm số thành viên nhóm
        $memberCount = UserGroup::where('group_id_fk', $group_id)
                    ->where('request', 0)
                    ->count();
        
        $requestCount = UserGroup::where('group_id_fk', $group_id)
                    ->where('request', 1)
                    ->count();

        $requests = UserGroup::where('group_id_fk', $group_id)
                    ->where('request', 1)
                    ->get();
         
        $members = UserGroup::where('group_id_fk', $group_id)  
                    ->where('request', 0)                 
                    ->get();

        $group = Group::where('group_id', $group_id)
                ->first();

        // $comments = Comment::where('post_id_fk', $id)
        //            ->orderBy('created_at', 'desc')
        //            ->get();               
        // return view('post-detail')->with('comments', $comments)->with('post', $post);
        return view('group-member')->with('posts', $posts)->with('userRole', $userRole)
        ->with('memberCount', $memberCount)->with('group', $group)->with('members', $members)->with('requestCount', $requestCount)
        ->with('requests', $requests);
    }

    public function getAllInfoForEditGroup($group_id)
    {
        $userId = Auth::user()->user_id;

        $userRole = UserGroup::where('user_id_fk', $userId)
                     ->where('group_id_fk', $group_id)
                     ->first();

        $posts = PostGroup::where('group_id_fk', $group_id)
                ->get();

        //Đếm số thành viên nhóm
        $memberCount = UserGroup::where('group_id_fk', $group_id)
                    ->where('request', 0)
                    ->count();
        
        $requestCount = UserGroup::where('group_id_fk', $group_id)
                    ->where('request', 1)
                    ->count();

        $requests = UserGroup::where('group_id_fk', $group_id)
                    ->where('request', 1)
                    ->get();
         
        $members = UserGroup::where('group_id_fk', $group_id)  
                    ->where('request', 0)                 
                    ->get();

        $group = Group::where('group_id', $group_id)
                ->first();

        // $comments = Comment::where('post_id_fk', $id)
        //            ->orderBy('created_at', 'desc')
        //            ->get();               
        // return view('post-detail')->with('comments', $comments)->with('post', $post);
        return view('edit-group-2')->with('posts', $posts)->with('userRole', $userRole)
        ->with('memberCount', $memberCount)->with('group', $group)->with('members', $members)->with('requestCount', $requestCount)
        ->with('requests', $requests);
    }

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
}
