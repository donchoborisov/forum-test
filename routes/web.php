<?php

use App\Http\Controllers\ChannelController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DiscussionsController;
use App\Http\Controllers\RepliesController;

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('discussion',DiscussionsController::class);
Route::resource('dicsussions/{dicussion}/replies',RepliesController::class);
Route::get('channel/discussion/{id}',[ChannelController::class,'filter'])->name('channel.discussion');

Route::get('/reply/like/{id}',[RepliesController::class,'like'])->name('reply.like');
Route::get('/reply/unlike/{id}',[RepliesController::class,'unlike'])->name('reply.unlike');

