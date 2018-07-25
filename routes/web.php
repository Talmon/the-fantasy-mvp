<?php

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

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function(){
    Route::get('/home', [
        'uses'  => 'HomeController@index',
        'as'    =>  'home'
    ]);

    Route::get('/posts', [
        'uses' => 'PostsController@index',
        'as' => 'posts'
    ]);

    Route::get('/post/create', [
        'uses'  => 'PostsController@create',
        'as'    =>  'post.create'
    ]);

    Route::post('/post/store', [
        'uses'  => 'PostsController@store',
        'as'    =>  'post.store'
    ]);

    Route::get('/post/edit/{id}', [
        'uses'  => 'PostsController@edit',
        'as'    =>  'post.edit'
    ]);

    Route::post('/post/edit/{id}', [
        'uses'  => 'PostsController@update',
        'as'    =>  'post.update'
    ]);

    Route::get('/post/delete/{id}', [
        'uses'  => 'PostsController@destroy',
        'as'    =>  'post.delete'
    ]);


    Route::get('/category/create', [
        'uses'  => 'CategoriesController@create',
        'as'    =>  'category.create'
    ]);

    Route::get('/categories', [
        'uses'  => 'CategoriesController@index',
        'as'    =>  'categories'
    ]);

    Route::post('/category/store', [
        'uses'  => 'CategoriesController@store',
        'as'    =>  'category.store'
    ]);

    Route::get('/category/edit/{id}', [
        'uses'  => 'CategoriesController@edit',
        'as'    =>  'category.edit'
    ]);

    Route::post('/category/edit/{id}', [
        'uses'  => 'CategoriesController@update',
        'as'    =>  'category.update'
    ]);

    Route::get('/category/delete/{id}', [
        'uses'  => 'CategoriesController@destroy',
        'as'    =>  'category.delete'
    ]);

    Route::get('/users', [
        'uses'  => 'UsersController@index',
        'as'    =>  'users'
    ]);

    Route::get('/user/create', [
        'uses'  => 'UsersController@create',
        'as'    =>  'user.create'
    ]);

    Route::post('/user/store', [
        'uses'  => 'UsersController@store',
        'as'    =>  'user.store'
    ]);

    Route::post('/user/edit/{id}', [
        'uses'  => 'UsersController@edit',
        'as'    =>  'user.edit'
    ]);

    Route::get('/user/delete/{id}', [
        'uses'  => 'UsersController@destroy',
        'as'    =>  'user.delete'
    ]);

    Route::get('/user/admin/{id}', [
        'uses'  => 'UsersController@admin',
        'as'    =>  'user.admin'
    ]);

    Route::get('/user/not-admin/{id}', [
        'uses'  => 'UsersController@not_admin',
        'as'    =>  'user.not.admin'
    ]);

    Route::get('/user/profile/{id}', [
        'uses'  => 'ProfilesController@index',
        'as'    =>  'user.profile'
    ]);
});

