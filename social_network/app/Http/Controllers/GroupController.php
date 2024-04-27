<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Group;
use \App\Models\UserGroup;
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


    public function getGroupByID($group_id)
    {
        $group = Group::findOrFail($group_id);
        return view('edit-group', compact('group'));
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
}
