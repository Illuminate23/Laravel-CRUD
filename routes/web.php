<?php

use Illuminate\Support\Facades\Route;

Route::get('/posts', 'App\Http\Controllers\PostController@allData')
    ->name('posts');

Route::get('/', 'App\Http\Controllers\PostController@allData')
    ->name('posts');

Route::get('/make_post', 'App\Http\Controllers\PostController@make_post')
    ->name('make_post');

Route::post('/make_post/submit', 'App\Http\Controllers\PostController@submit_post')
    ->name('submit_post');

Route::get('/posts/{id}', 'App\Http\Controllers\PostController@one_post')
    ->name('one_post');

Route::get('/one_post/{id}/delete', 'App\Http\Controllers\PostController@delete_post')
    ->name('delete_post');

Route::get('/one_post/{id}/edit', 'App\Http\Controllers\PostController@edit_post')
    ->name('edit_post');

Route::post('/one_post/{id}/edit/submit', 'App\Http\Controllers\PostController@edit_post_submit')
    ->name('edit_post_submit');

Route::post('/one_post/{id}/add_coment', 'App\Http\Controllers\CommentController@add_comment')
    ->name('add_comment');

Route::get('/categories', 'App\Http\Controllers\CategoryController@all_categories')
    ->name('categories');

Route::post('/categories/submit', 'App\Http\Controllers\CategoryController@add_category')
    ->name('add_category');

Route::get('/categories/{id}/delete', 'App\Http\Controllers\CategoryController@delete_category')
    ->name('delete_category');

Route::post('/categories/{id}/edit', 'App\Http\Controllers\CategoryController@edit_category')
    ->name('edit_category');

Route::get('/categories/{id}/single_category', 'App\Http\Controllers\CategoryController@single_category')
    ->name('single_category');


