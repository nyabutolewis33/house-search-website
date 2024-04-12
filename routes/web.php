<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\RetrieveController;
use App\Http\Controllers\SearchController;


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

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/about', function () {
    return view('about');
});


Route::get('/index', [RegisterController::class, 'showIndex'])->name('index');
Route::post('/index', [RegisterController::class, 'index']);

Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);
Route::post('/register-user', [RegisterController::class, 'registeruser']);

Route::get('/signin', [RegisterController::class, 'showSigninForm'])->name('signin');
Route::post('/signin', [RegisterController::class, 'signin']);
Route::post('/login', [RegisterController::class, 'loginuser']);


Route::get('/contact', [RegisterController::class, 'showContact'])->name('contact');
Route::post('/contact', [RegisterController::class, 'contact']);

Route::get('/dashboard', [RegisterController::class, 'showDashboard'])->name('dashboard');
Route::post('/dashboard', [RegisterController::class, 'dashboard']);


// Route for displaying the upload form

Route::get('/upload', [UploadController::class, 'create'])->name('upload');
Route::post('/upload', [UploadController::class, 'store'])->name('upload.store');

// Route  for displaying retrieved images on the dashboard

Route::get('/dashboard', [RetrieveController::class, 'dashboard'])->name('dashboard');

Route::get('/', [RetrieveController::class, 'index'])->name('home');
Route::get('/index', [RetrieveController::class, 'index'])->name('home');

// Define a route for displaying image details
Route::get('/image/{id}', [RetrieveController::class, 'show'])->name('image.show');

// define a route for uploading the messages
Route::get('/contact', [UploadController::class, 'send'])->name('contact');
Route::post('/contact', [UploadController::class, 'message'])->name('contact.send');
Route::get('/search', [SearchController::class, 'search'])->name('search');
