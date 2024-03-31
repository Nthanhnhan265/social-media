<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('index', function () {
//     return view('index');
// });
// Route::get('logout', function () {
//     return view('logout');
// });

// Route::get('/{namePage?}', function ($namePage = "index") {
//     $pages = [
//         'login' => 'login',
//         'logout' => 'logout',
//         'messages' => 'messages',   
//         'index-2' => 'index-2',
//         'index2' => 'index2',
//         'index-company' => 'index-company',
//         'inbox' => 'inbox',
//         'insight' => 'insight',
//         'insights' => 'insights',
//         'knowledge-base' => 'knowledge-base',
//         'landing' => 'landing',
//         'location' => 'location',
//         'newsfeed' => 'newsfeed',
//         'notifications' => 'notifications',
//         'page-likers' => 'page-likers',
//         'page' => 'page',
//         'widgets' => 'widgets'
//     ];

//     return isset($pages[$namePage]) ? view($pages[$namePage]) : view('error');
// });
Route::get('/{page?}', function ($page = "newsfeed") {  
    return view($page);
});
