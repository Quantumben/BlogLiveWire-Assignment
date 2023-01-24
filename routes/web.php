<?php

use App\Http\Livewire\Blog;
use App\Http\Livewire\Comment;
use App\Http\Livewire\Dashboard;
use App\Http\Livewire\DeleteBlog;
use App\Http\Livewire\EditBlog;
use App\Http\Livewire\Home;
use App\Http\Livewire\Like;
use App\Http\Livewire\Login;
use App\Http\Livewire\Register;
use App\Http\Livewire\SingleBlog;
use Illuminate\Support\Facades\Route;








Route::group(['middleware' => ['auth']], function () {

    Route::get('/', Home::class)->name('home');
    Route::get('dashboard', Dashboard::class)->name('dashboard');
    Route::get('post', Blog::class)->name('blog');
    Route::get('post/{id}', SingleBlog::class)->name('sblog');
    Route::get('editpost/{id}', EditBlog::class)->name('eblog');
    // Route::get('deletepost/{id}', DeleteBlog::class)->name('dblog');
    Route::get('comment', Comment::class)->name('comment');


});

Route::get('register', Register::class)->middleware('guest');

Route::get('login', Login::class)->name('login');
