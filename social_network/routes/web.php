<?php
require __DIR__.'/auth.php';

use App\Http\Controllers\CommentController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;




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
Route::post('/comment',[CommentController::class, 'store']); 
Route::delete('/post/{id}',[PostsController::class, 'destroy'])->name('posts.destroy'); 
Route::put('/post/{id}',[PostsController::class, 'update'])->name('posts.update'); 

Route::get('/', function () {
    return redirect ('/newsfeed');   
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

Route::get('/{page?}', function ($page = "newsfeed") {  
    return view($page);
});

//Route::get('/inbox', [PostController::class, 'index']);
//Route::resource('index',PostController::class);



Route::get('time-line/user-profile/{id}',[UsersController::class,'show']); 
Route::get('about/user-profile/{id}',[UsersController::class,'showAbout']); 
Route::get('edit-profile-basic/{id}',[UsersController::class,'showProfile']);
