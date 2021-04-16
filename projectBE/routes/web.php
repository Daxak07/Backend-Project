<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImageUploadController;
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

Route::get('/film_add', [ App\Http\Controllers\FilmController::class, 'index' ]);
Route::post('/film_add', [ App\Http\Controllers\FilmController::class, 'store' ])->name('film_add');

Route::get('/image-upload', [ ImageUploadController::class, 'imageUpload' ])->name('image.upload');
Route::post('/image-upload', [ ImageUploadController::class, 'imageUploadPost' ])->name('image.upload.post');

Route::get('feedback', [App\Http\Controllers\FeedbackController::class, 'index']);
Route::post('/feedback/store', [App\Http\Controllers\FeedbackController::class, 'store'])->name('store');
Route::post('/feedback', [App\Http\Controllers\FeedbackController::class, 'index'])->name('feedback');

Route::get('/send-mail', function () {
    $details = [
        'title' => 'Mail from Framerate ',
        'body' => 'New user is subscribe to Our Newsletter'
        ];
       \Mail::to('zhuandyk07@gmail.com')->send(new \App\Mail\TestMail($details));
            echo "<script>setTimeout(function(){ window.location.href = 'http://localhost:8000/'; }, 1000);</script>";
            return redirect()->route('welcome')->with('Success', 'Thank you to subscribing :)');
});

Route::get('/{lang}', function ($lang) {
    \App::setlocale($lang);
    return view('main');
});

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

