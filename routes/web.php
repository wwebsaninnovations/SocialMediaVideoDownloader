<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\{VideosController,UploadVideoController};

use App\Http\Controllers\Auth\GoogleController;

use App\Http\Controllers\FBVideoDownloadController;

use App\Http\Controllers\InstaVideoDownloadController;

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

use App\Http\Controllers\VideoDownloadController;


// shiwam
Route::get('/yTDl', function () {
    return view('download');
});

Route::post('/download', [VideoDownloadController::class, 'download'])->name('download');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/terms-and-condition',function(){return view('terms-and-conditions');});
Route::get('/privacy-policy',function(){return view('privacy-policy');});


// Route::get('/youtube-video-uploader', [VideosController::class, 'index']);
// Route::get('/', [VideosController::class, 'index']);


// Route::get('/',function(){return view('welcome');});

// Route::get('auth/redirect', [GoogleController::class, 'redirectToGoogle'])->name('auth/redirect');
Route::get('auth/google', [GoogleController::class, 'redirectToGoogle'])->name('auth.google');
// Route::get('auth/google/callback', [GoogleController::class, 'handleGoogleCallback']);

Route::get('auth/google/callback', [GoogleController::class, 'handleGoogleCallback'])->name('auth.google.callback');

Route::post('upload', [UploadVideoController::class, 'upload'])->name('upload');



Route::get('all-videos', [VideosController::class, 'allVideos'])->name('allVideos');
Route::get('create-videos', [VideosController::class, 'createVideos'])->name('createVideos');

Route::get('facebookuploader', [FBVideoDownloadController::class, 'index']);
Route::post('/fetch-video', [FBVideoDownloadController::class, 'fetchVideo'])->name('fetch-video');

Route::get('instagramuploader',[InstaVideoDownloadController::class,'index']);
Route::post('/fetch-insta-video', [InstaVideoDownloadController::class, 'fetchInstaVideo'])->name('fetch.insta.video');
