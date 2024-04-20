<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
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

    public function show($userId)
    {
        $user = User::findOrFail($userId); 
    
        // Kiểm tra URI để xác định liệu nó đang truy cập trang "time-line" hay "about"
        if (request()->is('time-line/*')) {
            // Nếu URI chứa "/time-line/", trả về trang "time-line"
            return view('time-line', compact('user'));
        } elseif (request()->is('about/*')) {
            // Nếu URI chứa "/about/", trả về trang "about"
            return view('about', compact('user'));
        } else {
            // Nếu không khớp với bất kỳ URI nào trên, bạn có thể xử lý tùy ý ở đây
            return redirect()->route('home'); // Ví dụ: chuyển hướng người dùng đến trang chính
        }
    }

    
    public function about()
    {
        $userId = Auth::id();
    
        return view('about', compact('userId'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       
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
}
