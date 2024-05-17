<?php
require __DIR__.'/auth.php';
use App\Http\Controllers\CommentController;
use App\Http\Controllers\Follow;
use App\Http\Controllers\Notification;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\Relationship;
use App\Models\Relationship as ModelsRelationship;
use App\Models\User;
use App\Http\Controllers\ShareController;
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

Route::get('/newsfeed',[PostsController::class, 'index'])->middleware(['auth','verified']); 
Route::get('/time-line/:id',[]); 
Route::post('/post',[PostsController::class, 'store']); 
Route::post('/comment',[CommentController::class, 'store']); 
Route::delete('/post/{id}',[PostsController::class, 'destroy'])->name('posts.destroy'); 
Route::put('/post/{id}',[PostsController::class, 'update'])->name('posts.update'); 
Route::post('/relationship',[Relationship::class,'store'])->name('relationships.store'); 
Route::put('/relationship/{id}/{redirect?}',[Relationship::class,'update'])->name('relationships.update'); 
Route::delete('/relationship/{id}/{redirect?}',[Relationship::class,'destroy'])->name('relationships.destroy');
Route::get('/timeline-friends/{id}',function($id) { 
    return view('timeline-friends',
    ["friends"=>ModelsRelationship::getFriendListOfUser(),
    "requests"=>ModelsRelationship::getRequestListOfUser()]);
});  
Route::delete('/follow/{id}',[Follow::class, 'destroy' ]); //unfollow a friend
Route::post('/follow',[Follow::class, 'store' ]); //follow a friend
Route::put('/read-notification/{id}',[Notification::class,'update']);  

Route::get('/newsfeed',[PostsController::class, 'index'])->middleware(['auth','verified']);
Route::get('/time-line/:id',[]);


Route::post('/post',[PostsController::class, 'store']);
Route::post('/comment',[CommentController::class, 'store']);
Route::delete('/post/{id}',[PostsController::class, 'destroy'])->name('posts.destroy');
Route::put('/post/{id}',[PostsController::class, 'update'])->name('posts.update');

Route::get('/', function () {
    return redirect ('/newsfeed');
});

Route::get('/test/{id?}', function ($id='') {
    return view ('/test',["id"=>$id]);   
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
// Route::get('/time-line/user-profile/{userId}', [UsersController::class, 'show'])->name('time-line');
Route::get('/about/{userId}', [UsersController::class, 'show'])->name('about');
Route::get('/about/{userId}', [UsersController::class, 'about'])->name('about');
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
Route::get('/post-detail/{id}', [PostsController::class, 'getPostAndCommentByPostId']);
Route::put('/update-post/{id}', [PostsController::class, 'updatePostStatus'])->name('update-post-status');
Route::delete('/delete-comment/{id}', [CommentController::class, 'deleteComment'])->name('delete-comment');
Route::put('/update-comment/{id}', [CommentController::class, 'updateCommentStatus'])->name('update-comment');

Route::get('/{page?}', function ($page = "newsfeed") {  
    return view($page);
});

//Route::get('/inbox', [PostController::class, 'index']);
//Route::resource('index',PostController::class);



Route::get('time-line/user-profile/{id}',[UsersController::class,'show']);
Route::get('about/user-profile/{id}',[UsersController::class,'showAbout']);
Route::get('edit-profile-basic/{id}',[UsersController::class,'showProfile']);

Route::POST('share',[ShareController::class,'store'])->name('share.store');

