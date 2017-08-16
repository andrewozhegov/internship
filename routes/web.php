<?php

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

Route::group(['middleware'=>'web'], function() {

    // simple routes

    Route::get('/',             ['as'=>'index', 'uses'=>'IndexController@show']);

    Route::get('/aboutme',      ['as'=>'aboutme', 'uses'=>'AboutmeController@show']);

    Route::get('/interests',    ['as'=>'interests', 'uses'=>'InterestsController@show']);

    Route::get('/study',        ['as'=>'study', 'uses'=>'StudyController@show']);

    Route::get('/photos',       ['as'=>'photos', 'uses'=>'PhotosController@show']);


    // with simple forms

    Route::get('/contacts',     ['as'=>'contacts', 'uses'=>'ContactsController@show']);
    Route::post('/contacts',    ['as'=>'contacts_send', 'uses'=>'ContactsController@send']);

    Route::get('/blog',         ['as'=>'blog', 'uses'=>'BlogController@show']);

    Route::group(['middleware'=>'auth'], function() {

        Route::get('/test',         ['as'=>'test', 'uses'=>'TestController@show']);
        Route::post('/test',        ['as'=>'test_send', 'uses'=>'TestController@send']);

        Route::post('/blog',        ['as'=>'blog_comment', 'uses'=>'BlogController@comment']);
        Route::get('/blog/del_com/{id}',      ['as'=>'blog_delete_comment', 'uses'=>'BlogController@deleteComment']);

    });


    // admin panel

    Route::group(['prefix'=>"admin", 'middleware'=>'auth'], function() {

        Route::get('/',                   ['as'=>'admin', 'uses'=>'AdminController@show']);

        Route::get('/blogedit/{id?}',     ['as'=>'blog_edit', 'uses'=>'BlogEditController@show']);
        Route::post('/blogedit',          ['as'=>'blog_edit_send', 'uses'=>'BlogEditController@add']);
        Route::post('/blogedit/{id}',     ['as'=>'blog_edit_update', 'uses'=>'BlogEditController@update']);
        Route::get('/blogedit/del/{id}',  ['as'=>'blog_edit_delete', 'uses'=>'BlogEditController@delete']);

        Route::get('/testbook',           ['as'=>'test_book', 'uses'=>'TestBookController@show']);
        Route::get('/testbook/del/{id}',  ['as'=>'test_book_delete', 'uses'=>'TestBookController@delete']);

        Route::get('/visitors',           ['as'=>'visitors', 'uses'=>'VisitorsController@show']);
        Route::get('/visitors/del/{id}',  ['as'=>'visitors_delete', 'uses'=>'VisitorsController@delete']);

        Route::get('/interestsedit',      ['as'=>'interests_edit', 'uses'=>'InterestsEditController@show']);
        Route::post('/interestsedit',     ['as'=>'interests_edit_add', 'uses'=>'InterestsEditController@add']);
        Route::post('/interestsedit/{id}', ['as'=>'interests_edit_update', 'uses'=>'InterestsEditController@update']);
        Route::get('/interestsedit/del/{item}/{id}',  ['as'=>'interests_edit_delete', 'uses'=>'InterestsEditController@delete']);

        Route::get('/photosedit',         ['as'=>'photos_edit', 'uses'=>'PhotosEditController@show']);
        Route::post('/photosedit',        ['as'=>'photos_edit_add', 'uses'=>'PhotosEditController@add']);
        Route::get('/photosedit/del/{id}', ['as'=>'photos_edit_delete', 'uses'=>'PhotosEditController@delete']);

    });

});

Auth::routes();

// tests visitors interests - реализовать управление из панель админа и хранение файлов
// закрыть доступ к панели админа (Gate, авторизация)
// кнопка входа (или имя аутентифицированного польз) на всех страницах с выпадающим меню (Панель администратра, Профиль, Выйти и тд)
