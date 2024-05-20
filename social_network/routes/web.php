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
use App\Http\Controllers\LikePostController;
use App\Http\Controllers\NewsController;
// use App\Http\Controllers\UseGroupController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ChangePasswordController;
use App\Http\Controllers\UseGroupController;
use Illuminate\Support\Facades\Session;

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

Route::get('/newsfeed',[PostsController::class, 'index'])->middleware(['auth','verified'])->middleware(['auth','verified']); 

Route::post('/post',[PostsController::class, 'store'])->middleware(['auth','verified']); 
Route::post('/comment',[CommentController::class, 'store'])->middleware(['auth','verified']); 
Route::delete('/post/{id}',[PostsController::class, 'destroy'])->name('posts.destroy')->middleware(['auth','verified']); 
Route::put('/post/{id}',[PostsController::class, 'update'])->name('posts.update')->middleware(['auth','verified']); 
Route::post('/relationship',[Relationship::class,'store'])->name('relationships.store')->middleware(['auth','verified']); 
Route::put('/relationship/{id}/{redirect?}',[Relationship::class,'update'])->name('relationships.update')->middleware(['auth','verified']); 
Route::delete('/relationship/{id}/{redirect?}',[Relationship::class,'destroy'])->name('relationships.destroy')->middleware(['auth','verified']);
Route::get('/timeline-friends/{id}',function($id) { 
    $user = Auth::user(); 
    
    if ($user->user_id == $id) { 
        return view('timeline-friends',
        [
        "user"=>$user,
        "friend"=>'',
        "friends"=>ModelsRelationship::getFriendListOfUser(),
        "requests"=>ModelsRelationship::getRequestListOfUser(),
        ]
    );
    }else  {
        $url = Session::get('url');
        if ($url) { 
           Session::forget("url");
           return redirect($url)->withErrors("You don't have permission"); 
        }
    }
   
})->middleware(['auth','verified']);  
Route::delete('/follow/{id}',[Follow::class, 'destroy' ])->middleware(['auth','verified']); //unfollow a friend
Route::post('/follow',[Follow::class, 'store' ])->middleware(['auth','verified']); //follow a friend
Route::put('/read-notification/{id}',[Notification::class,'update'])->middleware(['auth','verified']);  

Route::get('/newsfeed',[PostsController::class, 'index'])->middleware(['auth','verified'])->middleware(['auth','verified']);





Route::post('/post',[PostsController::class, 'store'])->middleware(['auth','verified']);
Route::post('/comment',[CommentController::class, 'store'])->middleware(['auth','verified']);
Route::delete('/post/{id}',[PostsController::class, 'destroy'])->name('posts.destroy')->middleware(['auth','verified']);
Route::put('/post/{id}',[PostsController::class, 'update'])->name('posts.update')->middleware(['auth','verified']);

Route::get('/', function () {
    return redirect ('/newsfeed');
})->middleware(['auth','verified']);

Route::get('/test/{id?}', function ($id='') {
    return view ('/test',["id"=>$id]);   
})->middleware(['auth','verified']);


Route::get('/register', function () {
    return view('auth.register');
})->name('register');

Route::get('/dashboard', [PostsController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard')->middleware(['auth','verified']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit')->middleware(['auth','verified']);
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update')->middleware(['auth','verified']);
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy')->middleware(['auth','verified']);
})->middleware(['auth','verified']);
//Route::get('/inbox', [PostController::class, 'index'])->middleware(['auth','verified']);
  Route::get('/inbox/{id}', [PostController::class, 'show'])->middleware(['auth','verified']);

// //Route::get('/newsfeed', [UsersController::class, 'index'])->middleware(['auth','verified']);
// Route::get('/inbox', [PostController::class, 'store'])->middleware(['auth','verified']);
// Route::post('/inbox', [PostController::class, 'edit'])->middleware(['auth','verified']);
// Route::post('/inbox', [PostController::class, 'show'])->middleware(['auth','verified']);
// Route::resource('/posts', PostController::class)->middleware(['auth','verified']);
// Route::get('/time-line/user-profile/{userId}', [UsersController::class, 'show'])->name('time-line')->middleware(['auth','verified']);
// Route::get('/about/{userId}', [UsersController::class, 'show'])->name('about')->middleware(['auth','verified']);
 
// Route::get('/users/{id}', 'UserController@show')->middleware(['auth','verified']);
// Route::get('time-line/{userId}', 'TimelineController@index')->name('timeline')->middleware(['auth','verified']);
//Route::get('time-line',[UsersController::class,'index'])->middleware(['auth','verified']);

//Route::get('/inbox', [PostController::class, 'index'])->middleware(['auth','verified']);
//Route::resource('index',PostController::class)->middleware(['auth','verified']);


//user-management
Route::get('time-line/user-profile/{id}',[UsersController::class,'show'])->middleware(['auth','verified']);
Route::get('about/user-profile/{id}',[UsersController::class,'showAbout'])->middleware(['auth','verified']);
Route::get('user-management',[UsersController::class, 'getAllUsers'])->name('user-management')->middleware(['auth','verified']);
Route::get('/edit-user/{user_id}', [UsersController::class, 'getUserByID'])->middleware(['auth','verified']);
//Route::get('/edit-user/{id}', 'UsersController@getUserByID')->name('users.edit')->middleware(['auth','verified']);
Route::delete('/delete-user/{userId}', [UsersController::class, 'deleteUser'])->name('delete-user')->middleware(['auth','verified']);
Route::put('/update-user/{userId}', [UsersController::class, 'updateUser'])->name('update-user')->middleware(['auth','verified']);

//group-management
Route::get('/edit-group/{group_id}', [GroupController::class, 'getGroupByID'])->middleware(['auth','verified']);
Route::get('group-management',[GroupController::class, 'getAllGroups'])->name('group-management')->middleware(['auth','verified']);
Route::put('/update-group/{group_id}', [GroupController::class, 'update'])->name('update-group')->middleware(['auth','verified']);
Route::delete('/delete-group/{groupID}', [GroupController::class, 'deleteGroup'])->name('delete-group')->middleware(['auth','verified']);

//post-management
Route::get('post-management',[PostsController::class, 'getAllPosts'])->name('post-management')->middleware(['auth','verified']);
Route::delete('/delete-post/{id}', [PostsController::class, 'deletePost'])->name('delete-post')->middleware(['auth','verified']);
Route::get('/post-detail/{id}', [PostsController::class, 'getPostAndCommentByPostId'])->middleware(['auth','verified']);
Route::put('/update-post-status/{id}', [PostsController::class, 'updatePostStatus'])->name('update-post-status')->middleware(['auth','verified']);
Route::delete('/delete-comment/{id}', [CommentController::class, 'deleteComment'])->name('delete-comment')->middleware(['auth','verified']);
Route::put('/update-comment/{id}', [CommentController::class, 'updateCommentStatus'])->name('update-comment')->middleware(['auth','verified']);

//group
Route::post('/newgroup',[GroupController::class, 'store'])->middleware(['auth','verified']); 
Route::get('/groups', [GroupController::class, 'getGroupByUserID'])->middleware(['auth','verified']);
Route::get('/group-view/{group_id}', [GroupController::class, 'getPostByGroupId'])->middleware(['auth','verified']);
Route::get('/group-member/{group_id}', [GroupController::class, 'getAllForGroupMember'])->middleware(['auth','verified']);
Route::delete('/disband-groups/{group_id}/', [GroupController::class, 'deleteGroupByGroupAdmin'])->name('disband-groups')->middleware(['auth','verified']);
Route::delete('/leave-group/{group_id}', [UseGroupController::class, 'destroy'])->name('leave-group')->middleware(['auth','verified']);
Route::delete('/delete-request-by-user/{group_id}', [UseGroupController::class, 'destroy'])->name('delete-request-by-user')->middleware(['auth','verified']);;
Route::delete('/groups-member/{group_id}', [UseGroupController::class, 'deleteRequest'])->name('delete-request')->middleware(['auth','verified']);
Route::put('/groups-member/{group_id}', [UseGroupController::class, 'update'])->name('update')->middleware(['auth','verified']);
Route::get('/edit-group-2/{group_id}', [GroupController::class, 'getAllInfoForEditGroup'])->middleware(['auth','verified']);


//tìm kiếm ở phần quản trị
// routes/web.php
Route::get('/user-management-search', [UsersController::class, 'search'])->name('user-management-search')->middleware(['auth','verified']);
Route::get('/group-management-search', [GroupController::class, 'search'])->name('group-management-search')->middleware(['auth','verified']);
Route::get('/post-management-search', [PostsController::class, 'searchInManagement'])->name('post-management-search')->middleware(['auth','verified']);

// Route::get('/{page?}', function ($page = "newsfeed") {  
//     return view($page);
// });
Route::put('update-background/{id}', [UsersController::class, 'updateBackground'])->name('user.update')->middleware(['auth','verified']);

//Route::get('/inbox', [PostController::class, 'index'])->middleware(['auth','verified']);
//Route::resource('index',PostController::class)->middleware(['auth','verified']);

 

Route::get('time-line/user-profile/{id}',[UsersController::class,'show'])->middleware(['auth','verified']);
 
Route::get('edit-profile-basic/{id}',[UsersController::class,'showProfile'])->middleware(['auth','verified']);


// Trong Routes/web.php
Route::get('/newsfeed', [PostsController::class, 'index'])->middleware(['auth','verified'])->middleware(['auth','verified']);
Route::POST('share',[ShareController::class,'store'])->name('share.store')->middleware(['auth','verified']);

Route::group([], function(){
    Route::get('like', [LikePostController::class, 'index'])->middleware(['auth','verified']);

    Route::post('like', [LikePostController::class, 'store'])->name('like.store')->middleware(['auth','verified']);
})->middleware(['auth','verified']);

Route::put('update-avatar/{id}', [UsersController::class, 'updateAvatar'])->name('user.update')->middleware(['auth','verified']);
// Route Update thông tin cá nhân của user 
Route::get('editInfo/{id}', [UsersController::class, 'show'])->name('user.update')->middleware(['auth','verified']);
Route::put('update-Info-User/{id}', [UsersController::class,'update'])->name('user-profile')->middleware(['auth','verified']);
Route::get('timeline-photos/user-profile/{id}', [UsersController::class, 'showImagePost'])->middleware(['auth','verified']);
Route::get('timeline-videos/user-profile/{id}', [UsersController::class, 'showVideoPost'])->middleware(['auth','verified']);
 



Route::get('edit-post/{id}',[PostsController::class,'showEditForm'])->middleware(['auth','verified']);
Route::put('update-post/{id}', [PostsController::class, 'update'])->name('posts.update')->middleware(['auth','verified']);
// Route đăng bài post trong trang time-line 
// Route::post('/time-line/user-profile/{id}',[PostsController::class, 'postOfTimeLine'])->middleware(['auth','verified']);

// Route comment posts trong file time-line
Route::post('time-line/user-profile/{id}',[CommentController::class, 'store'])->middleware(['auth','verified']); 
// Route::get('timeline-photos/user-profile/{id}',[UsersController::class,'show'])->middleware(['auth','verified']);
Route::get('edit-comment/{id}', [CommentController::class, 'edit'])->name('comments.edit')->middleware(['auth','verified']);
Route::put('/comments/{id}', [CommentController::class, 'update'])->name('comments.update')->middleware(['auth','verified']);
Route::delete('comments/{id}', [CommentController::class, 'destroy'])->name('comments.destroy')->middleware(['auth','verified']);
// Route tìm kiếm bài post 
Route::get('search', [PostsController::class, 'search'])->name('posts.search')->middleware(['auth','verified']);
// Route::get('timeline-friends/{id}',[UsersController::class,'show'])->middleware(['auth','verified']);
Route::delete('time-line/user-profile/{id}', [PostsController::class,'destroy'])->name('posts.destroy')->middleware(['auth','verified']);
//Route Change password
Route::middleware(['auth'])->group(function () {
    Route::get('/edit-password', [ChangePasswordController::class, 'showChangePasswordForm'])->name('password.change');
    Route::post('/edit-password', [ChangePasswordController::class, 'changePassword'])->name('password.update');
});


Route::get('/{page?}', function ($page = "newsfeed") {  
    return view($page);
})->middleware(['auth','verified']);

