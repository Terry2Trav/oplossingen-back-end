<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Http\Request;


Route::get('/articles/add', function () {
    return view('articles/add');
});

Route::get('/instructies', function () {
    return view('instructies');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/', 'HomeController@index');


Route::post('/articles/add', 'ArticleController@create');

Route::get('articles/edit/{id}', 'ArticleController@edit');

Route::post('articles/edit/{id}', 'ArticleController@update');

Route::get('articles/edit/{id}/delete', 'ArticleController@delete');

Route::post('articles/edit/{id}/delete', 'ArticleController@delete');

Route::post('/votes/up/{id}', 'ArticleController@up');
Route::post('/votes/down/{id}', 'ArticleController@down');


Route::get('/comments/{id}', 'CommentController@index');

Route::post('/comments/add/{id}', 'CommentController@create');


Route::get('comments/edit/{id}', 'CommentController@edit');

Route::post('comments/edit/{id}', 'CommentController@update');


Route::get('comments/del/{id}', 'CommentController@del');

Route::get('comments/del/{id}/delete', 'CommentController@delete');



















?>
