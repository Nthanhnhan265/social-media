<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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
        return view('time-line',["id"=>$id,'user'=>$user]);
    }
    public function showAbout($id)
    {
        $user = User::findOrFail($id); 
        return view('about',["id"=>$id,'user'=>$user]);
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
        //
    }

    public function deleteUser($userId) {
        $user = User::find($userId);
    
        if ($user) {
            $user->delete();
            return redirect()->back()->with('success', 'User deleted successfully.');
        } else {
            return redirect()->back()->with('error', 'User not found.');
        }
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
}
