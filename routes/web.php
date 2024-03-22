<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\UploadController;

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

Route::get('/', function () {
    return view('index');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/signin', function () {
    return view('signin');
});

Route::get('/properties', function () {
    return view('properties');
});

Route::get('/properties-detail', function () {
    return view('properties-detail');
});

Route::get('/gallery', function () {
    return view('gallery');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/blog-single', function () {
    return view('blog-single');
});

Route::get('/blog-archive', function () {
    return view('blog-archive');
});

Route::get('/404', function () {
    return view('404');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/index', [RegisterController::class, 'showIndex'])->name('index');
Route::post('/index', [RegisterController::class, 'index']);

Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);
Route::post('/register-user', [RegisterController::class, 'registeruser']);

Route::get('/signin', [RegisterController::class, 'showSigninForm'])->name('signin');
Route::post('/signin', [RegisterController::class, 'signin']);
Route::post('/login', [RegisterController::class, 'loginuser']);


Route::get('/properties', [RegisterController::class, 'showProperties'])->name('properties');
Route::post('/properties', [RegisterController::class, 'properties']);

Route::get('/gallery', [RegisterController::class, 'showGallery'])->name('gallery');
Route::post('/gallery', [RegisterController::class, 'gallery']);

Route::get('/properties-detail', [RegisterController::class, 'showProperties_detail'])->name('properties-detail');
Route::post('/properties-detail', [RegisterController::class, 'properties-detail']);

Route::get('/contact', [RegisterController::class, 'showContact'])->name('contact');
Route::post('/contact', [RegisterController::class, 'contact']);

Route::get('/blog-single', [RegisterController::class, 'showBlog_single'])->name('blog-single');
Route::post('/blog-single', [RegisterController::class, 'blog-single']);

Route::get('/blog-archive', [RegisterController::class, 'showBlog_archive'])->name('blog-archive');
Route::post('/blog-archive', [RegisterController::class, 'blog-archive']);

Route::get('/404', [RegisterController::class, 'show404'])->name('404');
Route::post('/404', [RegisterController::class, '404']);

Route::get('/dashboard', [RegisterController::class, 'showDashboard'])->name('dashboard');
Route::post('/dashboard', [RegisterController::class, 'dashboard']);


// Route for displaying the upload form
Route::get('/upload', [RegisterController::class, 'showuploadForm'])->name('upload.form');

Route::get('/upload', [UploadController::class, 'create'])->name('upload');
Route::post('/upload', [UploadController::class, 'create']);

Route::get('/upload', [UploadController::class, 'create'])->name('upload.create');
Route::post('/upload', [UploadController::class, 'store'])->name('upload.store');
