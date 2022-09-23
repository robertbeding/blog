<?php


use App\Models\Category;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardPostController;
use App\Http\Controllers\AdminCategoryController;
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

Route::get('/', function () {
    return view('home', [
        "title" => "Home",
        "active" => 'home'
    ]);
});

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'auth']);
Route::post('/register', [LoginController::class, 'regis']);

Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/dashboard', function(){
    return view('dashboard.index');
})->middleware('auth');

// Route::get('/dashboard/posts/chekSlug', [DashboardPostController::class. 'checkSlug'])->middleware('auth');
Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');
Route::resource('/dashboard/categories', AdminCategoryController::class)->except('show')->middleware('auth')
->middleware('admin');


Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Robert Beding",
        "email" => "robert.beding@yahoo.com",
        "image" => "anjing.jpg",
        "active" => 'about'
    ]);
});

Route::get('/blog', [PostController::class, 'index']);
Route::get('post/{post:slug}', [PostController::class, 'show']);

Route::get('/categories', function(){
    return view('categories',[
        'title' => 'Post Categories',
        "active" => 'categories',
        'categories' => Category::all()
    ]);
});

Route::get('/categories/{category:slug}', function(Category $category){
    return view('posts',[
        'title' => "Post by Category: $category->name",
        "active" => 'categories',
        'posts' => $category->posts->load('category','author')
    ]);
});


