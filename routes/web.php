<?php

use App\Models\Post;
use App\Models\User;
use App\Models\Contributor;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminCategoryController;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ContributorController;
use App\Http\Controllers\DashboardPostController;

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
        'title' => 'Home',
        'active' => 'home'
    ]);
});

Route::get('/about', function () {
    return view(
        '/about',
        [
            'title' => 'About',
            'active' => 'about',
            "name" => "Aris Setiawan",
            "email" => "ariezsibejoo@gmail.com",
            "image" => "bejo1",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita laboriosam repellendus commodi doloremque iste fugiat quaerat ducimus ipsa ut natus consequatur, esse praesentium reiciendis rem maxime accusamus porro inventore eius laudantium at. Porro quidem maiores accusamus itaque nihil voluptas quo reiciendis perferendis ea placeat cum tenetur nulla magnam veritatis vero esse iure, ullam, saepe animi! Voluptate, aut! Voluptates libero odio quis iusto blanditiis aperiam cum totam esse rem eum harum, itaque nesciunt quae odit. Facilis vitae nesciunt enim, accusantium magnam ea nobis eaque molestiae suscipit at voluptate minima in itaque, rem atque libero inventore similique? Ea quo laudantium animi repellat."
        ]
    );
});


Route::get('/contributors', [ContributorController::class, 'index']);

Route::get('/posts', [PostController::class, 'index']);
// HALAMAN SINGLE
Route::get('posts/{post:slug}', [PostController::class, 'show']);

Route::get('/categories', function () {
    return view('categories', [
        'title' => 'Post Categories',
        "active" => 'categories',
        'categories' => Category::all()
    ]);
});

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);

Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard', function () {
    return view('dashboard.index');
})->middleware('auth');

Route::get('/dashboard/posts/checkSlug', [DashboardPostController::class, 'checkSlug'])
    ->middleware('auth');
// route resource method get/default lanngsung ke index, method post ke store, method put - ke update, method delete ke destroy
Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');

Route::get('/dashboard/categories/checkSlug', [AdminCategoryController::class, 'checkSlug'])
    ->middleware('auth');

// except show untuk ilangin di routelist agat ridak bisa diakses, middleware admin sesuai nama di kernel
Route::resource('/dashboard/categories', AdminCategoryController::class)->except('show')->middleware('admin');



// unused dipake awal2

// Route::get('/categories/{category:slug}', function (Category $category) {
//     return view('posts', [
//         'title' => "Post by Category: $category->name",
//         'active' => 'categories',
//         'posts' => $category->posts->load('category', 'author')
//     ]);
// });

// Route::get('/authors/{author:username}', function (User $author) {
//     return view('posts', [
//         'title' => "Post By Author : $author->name",
//         'active' => 'author',
//         'posts' => $author->posts->load('category', 'author'),
//     ]);
// });
