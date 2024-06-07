<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use \App\Models\UserGroup;

class UseGroupController extends Controller
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

    //Chỉnh sửa quyền, xác nhận tham gia group cho user
    public function update(Request $request, $group_id)
    {
        $usergroup = Usergroup::where('group_id_fk', $group_id)
                      ->where('user_id_fk', $request->input('user_id'))
                      ->first();  
        $usergroup->role_id_fk = $request->input('role');
        $usergroup->request = $request->input('request');    
        $usergroup->save();
        return redirect()->back();   
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($group_id)
    {
        DB::transaction(function () use ($group_id) {

            //lấy user_id
            $userId = Auth::user()->user_id;
            // Xóa user ở bảng usergroup
            UserGroup::where('group_id_fk', $group_id)
                        ->where('user_id_fk', $userId)
                        ->delete();
        });
    
        return redirect('groups');
    }

    //Xoá yêu cầu vào nhóm
    public function deleteRequest(Request $request, $group_id)
    {       
        $usergroup = Usergroup::where('group_id_fk', $group_id)
                      ->where('user_id_fk', $request->input('user_id'))
                      ->first();       
        $usergroup->delete();
        return redirect('groups');   
    }

    public function deleteRequestForSearch(Request $request, $group_id)
    {       
        $userId = Auth::user()->user_id;
        // Xóa user ở bảng usergroup
        UserGroup::where('group_id_fk', $group_id)
                    ->where('user_id_fk', $userId)
                    ->delete();
        return redirect()->back();   
    }
}
