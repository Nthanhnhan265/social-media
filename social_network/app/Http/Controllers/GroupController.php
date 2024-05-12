<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use \App\Models\Group;
use \App\Models\UserGroup;
use \App\Models\PostGroup;
use Illuminate\Support\Facades\DB;

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

    public function getGroupByID($group_id)
    {
        $group = Group::findOrFail($group_id);
        return view('edit-group', compact('group'));
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
    public function update(Request $request, $group_id)
    {
        $group = Group::find($group_id);
        $group->name_group = $request->input('name_group');  
        $group->description = $request->input('description');  
        $group->status = $request->input('status');    
        $group->save();
        return redirect()->back()->with('success', 'Group updated successfully.');   
    }
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
    public function destroy($id)
    {
        //
    }


    //Lấy các post của group theo group_id
    public function getPostByGroupId($group_id)
    {
        $userId = Auth::user()->user_id;

        $userRole = UserGroup::where('user_id_fk', $userId)
                     ->where('group_id_fk', $group_id)
                     ->first();

        $posts = PostGroup::where('group_id_fk', $group_id)
                ->get();

        //Đếm số thành viên nhóm
        $memberCount = UserGroup::where('group_id_fk', $group_id)
                    ->count();
                    
        $members = UserGroup::where('group_id_fk', $group_id)                   
                    ->get();

        $group = Group::where('group_id', $group_id)
                ->first();

        // $comments = Comment::where('post_id_fk', $id)
        //            ->orderBy('created_at', 'desc')
        //            ->get();               
        // return view('post-detail')->with('comments', $comments)->with('post', $post);
        return view('group-view')->with('posts', $posts)->with('userRole', $userRole)
        ->with('memberCount', $memberCount)->with('group', $group)->with('members', $members);
    }
}
