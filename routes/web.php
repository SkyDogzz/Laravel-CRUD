<?php

use App\Http\Controllers\PostController;
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

Route::get('/', [PostController::class, 'index'])->name('posts.index')->middleware('auth');
Route::get('/article/{id}', [PostController::class, 'show'])->name('posts.show')->middleware('auth')->where('id', '[0-9]+');
Route::get('/create', [PostController::class, 'create'])->name('posts.create')->middleware('auth');
Route::post('/create', [PostController::class, 'store'])->name('posts.store')->middleware('auth');
Route::get('/article/mine', [PostController::class, 'mine'])->name('posts.mine')->middleware('auth');
Route::delete('/delete/{id}', [PostController::class, 'destroy'])->name('posts.delete')->middleware('auth')->where('id', '[0-9]+');
Route::get('/article/{id}/edit', [PostController::class, 'edit'])->name('posts.edit')->middleware('auth')->where('id', '[0-9]+');
Route::put('/article/{id}', [PostController::class, 'update'])->name('posts.update')->middleware('auth')->where('id', '[0-9]+');

require __DIR__.'/auth.php';
