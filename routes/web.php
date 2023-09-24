<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/home', [HomeController::class, 'index']);

//returns all the articles
Route::get('/articles', [ArticleController::class, 'index'])->name('articles.index');

//creating
Route::get('/article/create', [ArticleController::class, 'create'])->name('articles.create');

//storing
Route::post('articles', [ArticleController::class, 'store'])->name('articles.store');

//returns the article - {article} is a parameter
Route::get('/articles/{article}', [ArticleController::class, 'show'])->name('articles.show');

//editing
Route::get('/articles/{article}/edit', [ArticleController::class, 'edit'])->name('articles.edit');

//updating - patch/put not post because we are updating not creating a new one
Route::patch('/articles/{article}', [ArticleController::class, 'update'])->name('articles.update');

//deleting
Route::delete('articles/{article}', [ArticleController::class, 'destroy'])->name('articles.destroy');
