<?php


use App\Models\Category;

use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
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

Route::get('/login', [LoginController::class, 'index']);
// Route::get('/register', [RegisterController::class, 'index']);
Route::post('/login', [LoginController::class, 'regis']);


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

