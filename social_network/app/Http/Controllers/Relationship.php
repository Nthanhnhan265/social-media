<?php

namespace App\Http\Controllers;

use App\Models\Follow;
use App\Models\Notification;
use App\Models\Relationship as ModelsRelationship;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class Relationship extends Controller
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
     * send friend request
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // get id of sender (auth::user()->user_id), get id of receiver ($request->receiver)
        $receiver = $request->receiver;
        $sender = Auth::user()->user_id;
        if ($sender != $receiver) {
            //create a row about friend request in Relationships table with "pending" status
            $newRelationship = [
                'sender' => $sender,
                'receiver' => $receiver,
                'status' => 'pending'
            ];
            ModelsRelationship::create($newRelationship);
            Notification::newNotify($receiver, $sender, 'friend_request');
        }
        return redirect(url('time-line/user-profile/' . $receiver));
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
     * Accept friend request 
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id, $redirect=0)
    {
        //get id of sender ($request->sender), id of receiver (auth::user()->user_id)
        $sender = $id;
        $receiver = Auth::user()->user_id;
        if ($sender != $receiver) {
            //find rows in relationships table 
            $relationship = ModelsRelationship::where('sender', $sender)->where('receiver', $receiver)->first();
            if ($relationship) {
                // Update the status of the relationship to "accept"
                $relationship->status = 'accept';
                $relationship->save();

                //sender followed receiver
                Follow::follow($sender, $receiver, "friend");
                //receiver followed sender
                Follow::follow($receiver, $sender, "friend");

                //send notification when receiver accepts friend request
                Notification::newNotify($sender, $receiver, "accept");
            }
        }
        return $this->moveTo($redirect,$sender); 

    }

    /**
     * Cancel request or deny request
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, $redirect=0)
    {
        $friend = $id;
        $authenticatedUserId = Auth::user()->user_id;
        $relationship = ModelsRelationship::where(function ($query) use ($authenticatedUserId, $friend) {
            $query->where('sender', $authenticatedUserId)
                ->where('receiver', $friend);
        })
            ->orWhere(function ($query) use ($authenticatedUserId, $friend) {
                $query->where('sender', $friend)
                    ->where('receiver', $authenticatedUserId);
            })
            ->first();
        if (isset($relationship)) {
            $relationship->delete();
            //delete relationship 
            Follow::unfollow($authenticatedUserId, $friend);
        }
        return $this->moveTo($redirect,$friend); 
    }

    public function moveTo($rd,$user_id)
    {
        if ($rd == 1) {
            return redirect(url('timeline-friends/' . $user_id));
        }
        return redirect(url('time-line/user-profile/' . $user_id));
    }
}
