<?php

use App\Http\Controllers\AdminCategoryController;
use App\Http\Controllers\BiodataController;
use App\Http\Controllers\DashboardPostController;
use App\Http\Controllers\JalurController;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PendaftaranController;
use App\Http\Controllers\RegisterController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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
        "active" => "home"
    ]);
});

Route::get('/projur', function () {
    return view('projur' , [
        "title" => "Program Studi"

    ]);
});
Route::get('/d4-administrasi-bisnis-otomotif', function () {
    return view('jurusan.abo' , [
        'title' => "D-IV Administrasi Bisnis Otomotif",
    ]);
});
Route::get('/d4-sistem-informasi-industri-otomotif', function () {
    return view('jurusan.siio' , [
        'title' => "D-IV Administrasi Bisnis Otomotif",
    ]);
});
Route::get('/d4-teknik-industri-otomotif', function () {
    return view('jurusan.tio' , [
        'title' => "D-IV Teknik Industri Otomotif",
    ]);
});
Route::get('/d4-teknik-kimia-polimer', function () {
    return view('jurusan.tkp' , [
        'title' => "D-IV Teknik Kimia Polimer",
    ]);
});
Route::get('/d4-teknologi-rekayasa-otomotif', function () {
    return view('jurusan.tro' , [
        'title' => "D-IV Teknik Rekayasa Otomotif",
    ]);
});
Route::get('/profil-kampus', function () {
    return view('jurusan.kampus' , [
        'title' => "Profil Kampus",
    ]);
});
Route::get('/posts', [PostController::class, 'index']);

// halaman single post
Route::get('posts/{post:slug}' , [PostController::class, 'show'] );

Route::get('/categories', function() {
    return view('categories', [
        'title' => 'Post Categories',
        'active' => 'categories',
        'categories' => Category::all()
    ]);
});

Route::get('/categories/{category:slug}' , function(Category $category){
    return view('posts', [
        'title' => "Post By Category : $category->name",
        'active' => 'categories',
        'posts' => $category->posts->load('category', 'author')
    ]);


});

Route::get('/authors/{author:username}' , function(User $author){
    return view('posts', [
        'title' => "Post By Author : $author->name",
        'active' => 'posts',
        'posts' => $author->posts->load('category', 'author')
    ]);
});

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard', function(){return view('dashboard.index');})->middleware('auth');

Route::get('/dashboard/posts/checkSlug', [DashboardPostController::class, 'checkSlug'])->middleware('auth');
Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');
Route::get('/dashboard/biodata/checkSlug', [DashboardPostController::class, 'checkSlug'])->middleware('auth');
Route::resource('/biodata', BiodataController::class)->middleware('auth');
Route::get('/pendaftaran', [BiodataController::class, 'create'])->middleware('auth');
Route::get('/jalur-mandiri', function () {
    return view('dashboard.jalur.gel');
})->middleware('auth');
Route::resource('/jalur-prestasi', JalurController::class)->middleware('auth');
Route::resource('dashboard/categories', AdminCategoryController::class)->except('show')->middleware('admin');