<?php
require __DIR__.'/auth.php';

use App\Http\Controllers\PostsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\GroupController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
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
Route::get('/newsfeed',[PostsController::class, 'index'])->middleware(['auth','verified']); 
Route::get('/time-line/:id',[]); 

Route::post('/post',[PostsController::class, 'store']); 
Route::delete('/post/{id}',[PostsController::class, 'destroy'])->name('posts.destroy'); 
Route::put('/post/{id}',[PostsController::class, 'update'])->name('posts.update'); 

Route::get('/', function () {
    return view('auth.login'); 
});


Route::get('/register', function () {
    return view('auth.register'); 
})->name('register');  

Route::get('/dashboard', [PostsController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
//Route::get('/inbox', [PostController::class, 'index']);
  Route::get('/inbox/{id}', [PostController::class, 'show']);

// //Route::get('/newsfeed', [UsersController::class, 'index']);
// Route::get('/inbox', [PostController::class, 'store']);
// Route::post('/inbox', [PostController::class, 'edit']);
// Route::post('/inbox', [PostController::class, 'show']);
// Route::resource('/posts', PostController::class);
Route::get('/time-line/{userId}', [UsersController::class, 'show']);
// Route::get('/users/{id}', 'UserController@show');
// Route::get('time-line/{userId}', 'TimelineController@index')->name('timeline');
//Route::get('time-line',[UsersController::class,'index']);



//Route::get('/inbox', [PostController::class, 'index']);
//Route::resource('index',PostController::class);


//user-management
Route::get('time-line/user-profile/{id}',[UsersController::class,'show']); 
Route::get('about/user-profile/{id}',[UsersController::class,'showAbout']); 
Route::get('user-management',[UsersController::class, 'getAllUsers']);
Route::get('/edit-user/{user_id}', [UsersController::class, 'getUserByID']);
//Route::get('/edit-user/{id}', 'UsersController@getUserByID')->name('users.edit');
Route::delete('/delete-user/{userId}', [UsersController::class, 'deleteUser'])->name('delete-user');
Route::put('/update-user/{userId}', [UsersController::class, 'updateUser'])->name('update-user');

//group-management
Route::get('/edit-group/{group_id}', [GroupController::class, 'getGroupByID']);
Route::get('group-management',[GroupController::class, 'getAllGroups']);
Route::put('/update-group/{group_id}', [GroupController::class, 'update'])->name('update-group');
Route::delete('/delete-group/{groupID}', [GroupController::class, 'deleteGroup'])->name('delete-group');

//post-management
Route::get('post-management',[PostsController::class, 'getAllPosts']);
Route::delete('/delete-post/{id}', [PostsController::class, 'deletePost'])->name('delete-post');
Route::get('/post-detail/{id}', [PostsController::class, 'getPostById']);

Route::get('/{page?}', function ($page = "newsfeed") {  
    return view($page);
});
