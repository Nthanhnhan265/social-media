<?php

namespace App\Http\Controllers;

use App\Models\Follow;
use App\Models\Notification;
use App\Models\Share;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use \App\Models\User;
use Illuminate\Support\Facades\Auth;

class ShareController extends Controller
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
        
        $userId = Auth::id();
        $user = User::find($userId);

        $arrFollowers = Follow::getFollowersByUserId($userId);

        $sharingRange = $request->input('shareOption');
        $postId = $request->input('post_id');
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $currentDateTime = date('Y-m-d H:i:s');

        $share = Share::create([
            'user_id_fk' => $userId,
            'post_id_fk' => $postId,
            'status' => $sharingRange,
            'created_at' => $currentDateTime,
            'updated_at' => $currentDateTime,
        ]);
        //notify to all followers 
        if ($sharingRange == 1) { 
            if ($arrFollowers) { 
                Notification::newNotifyToFollowers($arrFollowers,$share->share_id,"sharepost"); 
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
        $sh = Share::where('share_id',$id)->first(); 
        if ($sh && $sh->user_id_fk == Auth::user()->user_id) { 
            $sh->delete();
            return redirect()->back();
        }
    }
}
