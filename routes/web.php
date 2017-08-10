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

    Route::get('/test',         ['as'=>'test', 'uses'=>'TestController@show']);
    Route::post('/test',        ['as'=>'test_send', 'uses'=>'TestController@send']);


    /// not simple

    Route::get('/blog',         ['as'=>'blog', 'uses'=>'BlogController@show']);
    Route::post('/blog',        ['as'=>'blog_comment', 'uses'=>'BlogController@comment']);
    Route::delete('/blog',      ['as'=>'blog_delete_comment', 'uses'=>'BlogController@deleteComment']);


    // admin panel

    Route::group(['prefix'=>"admin"/*, 'middleware'=>'auth'*/], function() {

        Route::get('/',                   ['as'=>'photos', 'uses'=>'AdminController@show']);

        Route::get('/blog_edit',          ['as'=>'blog_edit', 'uses'=>'BlogEditController@show']);
        Route::post('/blog_edit',         ['as'=>'blog_edit_send', 'uses'=>'BlogEditController@add']);
        Route::delete('/blog_edit',       ['as'=>'blog_edit_delete', 'uses'=>'BlogEditController@delete']);

        //Route::controller('/blog_edit', 'BlogEditController'); // реализовать потом по примеру

        Route::get('/test_book',          ['as'=>'test_book', 'uses'=>'TestBookController@show']);
        Route::delete('/test_book',       ['as'=>'test_book_delete', 'uses'=>'TestBookController@delete']);

        Route::get('/visitors',           ['as'=>'visitors', 'uses'=>'VisitorsController@show']);
        Route::delete('/visitors',        ['as'=>'visitors_delete', 'uses'=>'VisitorsController@delete']);

        Route::get('/interests_edit',     ['as'=>'interests_edit', 'uses'=>'InterestsEditController@show']);
        Route::post('/interests_edit',    ['as'=>'interests_edit_add', 'uses'=>'InterestsEditController@add']);
        Route::delete('/interests_edit',  ['as'=>'interests_edit_delete', 'uses'=>'InterestsEditController@delete']);

        Route::get('/photos_edit',        ['as'=>'photos_edit', 'uses'=>'PhotosEditController@show']);
        Route::post('/photos_edit',       ['as'=>'photos_edit_add', 'uses'=>'PhotosEditController@add']);
        Route::delete('/photos_edit',     ['as'=>'photos_edit_delete', 'uses'=>'PhotosEditController@delete']);

    });

});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
