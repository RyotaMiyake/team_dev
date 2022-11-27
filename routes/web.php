<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\QuestionController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::controller(PostController::class)->middleware(['auth'])->group(function(){
    Route::get('/', 'index')->name('post.index');
    Route::post('/posts', 'store')->name('post.store');
    Route::get('/posts/create', 'create')->name('post.create');
    Route::get('/posts/{post}', 'show')->name('post.show');
    Route::put('/posts/{post}', 'update')->name('post.update');
    Route::delete('/posts/{post}', 'delete')->name('post.delete');
    Route::get('/posts/{post}/edit', 'edit')->name('post.edit');
});

Route::controller(CategoryController::class)->middleware(['auth'])->group(function(){
    Route::get('/categories/{category}','index')->name('category.index');
});

Route::controller(QuestionController::class)->middleware(['auth'])->group(function(){
    Route::get('/questions', 'index')->name('question.index');
    Route::post('/questions', 'store')->name('question.store');
    Route::get('/questions/create', 'create')->name('question.create');
    Route::get('/questions/{question}', 'show')->name('question.show');
    Route::put('/questions/{question}', 'update')->name('question.update');
    Route::delete('/questions/{question}', 'delete')->name('question.delete');
    Route::get('/questions/{question}/edit', 'edit')->name('question.edit');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
