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

    Route::group(['middleware'=>'stat'], function() {

        Route::get('/',             ['as'=>'index', 'uses'=>'IndexController@show']); // S

        Route::get('/aboutme',      ['as'=>'aboutme', 'uses'=>'AboutmeController@show']); // S

        Route::get('/interests',    ['as'=>'interests', 'uses'=>'InterestsController@show']); // S

        Route::get('/study',        ['as'=>'study', 'uses'=>'StudyController@show']); // S

        Route::get('/photos',       ['as'=>'photos', 'uses'=>'PhotosController@show']); // S

        Route::get('/contacts',     ['as'=>'contacts', 'uses'=>'ContactsController@show']); // S

        Route::get('/blog',         ['as'=>'blog', 'uses'=>'BlogController@show']); // S

        Route::post('/contacts',    ['as'=>'contacts_send', 'uses'=>'ContactsController@send']);

    });

    Route::group(['middleware'=>'auth'], function() {

        Route::get('/test',         ['middleware'=>'stat', 'as'=>'test', 'uses'=>'TestController@show']); // S
        Route::post('/test',        ['as'=>'test_send', 'uses'=>'TestController@send']);

        Route::post('/blog',        ['as'=>'blog_comment', 'uses'=>'BlogController@comment']);
        Route::get('/blog/del_com/{id}',      ['as'=>'blog_delete_comment', 'uses'=>'BlogController@deleteComment']);

    });

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

        Route::get('/interestsedit/{item?}/{id?}',      ['as'=>'interests_edit', 'uses'=>'InterestsEditController@show']);
        Route::post('/interestsedit',     ['as'=>'interests_edit_add', 'uses'=>'InterestsEditController@add']);
        Route::post('/interestsedit/{item}/{id}', ['as'=>'interests_edit_update', 'uses'=>'InterestsEditController@update']);
        Route::get('/interestsedit/del/{item}/{id}',  ['as'=>'interests_edit_delete', 'uses'=>'InterestsEditController@delete']);

        Route::get('/photosedit',         ['as'=>'photos_edit', 'uses'=>'PhotosEditController@show']);
        Route::post('/photosedit',        ['as'=>'photos_edit_add', 'uses'=>'PhotosEditController@add']);
        Route::get('/photosedit/del/{id}', ['as'=>'photos_edit_delete', 'uses'=>'PhotosEditController@delete']);

    });

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
