<?php

use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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



Route::get('/inbox', [PostController::class, 'index']);
Route::get('/newsfeed', [UsersController::class, 'index']);
Route::get('/inbox', [PostController::class, 'store']);
Route::post('/inbox', [PostController::class, 'edit']);
Route::post('/inbox', [PostController::class, 'show']);
Route::resource('/posts', PostController::class);
Route::get('/time-line/{userId}', [UsersController::class, 'show']);
Route::get('/users/{id}', 'UserController@show');
// Route::get('time-line/{userId}', 'TimelineController@index')->name('timeline');
//Route::get('time-line',[UsersController::class,'index']);

Route::get('/{page?}', function ($page = "newsfeed") {  
    return view($page);
});

//Route::get('/inbox', [PostController::class, 'index']);
//Route::resource('index',PostController::class);