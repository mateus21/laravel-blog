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

Route::get('/', [
	'uses'  => 'HomeController@index',
	'as'    => 'home.index'
]);

Route::get('/post/{slug}', [
	'uses'  => 'HomeController@single',
	'as'    => 'home.single'
]);

Route::get('/category/{id}', [
	'uses'  => 'HomeController@singleCategory',
	'as'    => 'home.single_category'
]);

Route::get('/tag/{id}', [
	'uses'  => 'HomeController@singleTag',
	'as'    => 'home.single_tag'
]);

Auth::routes();



Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {

    Route::get('/home', [
        'uses'  => 'AdminHomeController@index',
        'as'    => 'home'
    ]);

    Route::get('/post/create', [
        'uses'  => 'PostsController@create',
        'as'    => 'post.create'
    ]);

    Route::post('/post/store', [
        'uses'  => 'PostsController@store',
        'as'    => 'post.store'
    ]);


    Route::get('/categories', [
        'uses'  => 'CategoriesController@index',
        'as'    => 'category.index'
    ]);

    Route::get('/category/create', [
        'uses'  => 'CategoriesController@create',
        'as'    => 'category.create'
    ]);

    Route::post('/category/store', [
        'uses'  => 'CategoriesController@store',
        'as'    => 'category.store'
    ]);

    Route::get('/category/edit/{id}', [
        'uses'  => 'CategoriesController@edit',
        'as'    => 'category.edit'
    ]);

    Route::post('/category/update/{id}', [
        'uses'  => 'CategoriesController@update',
        'as'    => 'category.update'
    ]);

    Route::get('/category/delete/{id}', [
        'uses'  => 'CategoriesController@destroy',
        'as'    => 'category.delete'
    ])->middleware('category.delete');



    Route::get('/posts', [
        'uses'  => 'PostsController@index',
        'as'    => 'post.index'
    ]);

    Route::get('/post/delete/{id}', [
        'uses'  => 'PostsController@destroy',
        'as'    => 'post.delete'
    ]);

    Route::get('/post/trashed', [
        'uses'  => 'PostsController@trashed',
        'as'    => 'post.trashed'
    ]);

    Route::get('/post/kill/{id}', [
        'uses'  => 'PostsController@kill',
        'as'    => 'post.kill'
    ]);

    Route::get('/post/restore/{id}', [
        'uses'  => 'PostsController@restore',
        'as'    => 'post.restore'
    ]);

    Route::get('/post/edit/{id}', [
        'uses'  => 'PostsController@edit',
        'as'    => 'post.edit'
    ]);

    Route::post('/post/save/{id}', [
        'uses'  => 'PostsController@update',
        'as'    => 'post.update'
    ]);


	Route::get('/tags', [
		'uses'  => 'TagsController@index',
		'as'    => 'tag.index'
	]);

    Route::get('/tag/create', [
    	'uses'  => 'TagsController@create',
	    'as'    => 'tag.create'
    ]);

    Route::post('/tag/store', [
    	'uses'  => 'TagsController@store',
	    'as'    => 'tag.store'
    ]);

    Route::get('/tag/edit/{id}', [
    	'uses'  => 'TagsController@edit',
	    'as'    => 'tag.edit'
    ]);

    Route::post('/tag/update/{id}', [
    	'uses'  => 'TagsController@update',
	    'as'    => 'tag.update'
    ]);

    Route::get('/tag/delete/{id}', [
    	'uses'  => 'TagsController@destroy',
	    'as'    => 'tag.delete'
    ])->middleware('tag.delete');


    Route::get('/users', [
    	'uses'  => 'UsersController@index',
	    'as'    => 'user.index'
    ]);

    Route::get('/user/create', [
    	'uses'  => 'UsersController@create',
	    'as'    => 'user.create'
    ]);

    Route::post('/user/store', [
    	'uses'  => 'UsersController@store',
	    'as'    => 'user.store'
    ]);

    Route::get('/user/admin/{id}', [
    	'uses'  => 'UsersController@admin',
	    'as'    => 'user.admin'
    ]);

	Route::get('/user/not-admin/{id}', [
		'uses'  => 'UsersController@not_admin',
		'as'    => 'user.not-admin'
	]);

	Route::get('/user/destroy/{id}', [
		'uses'  => 'UsersController@destroy',
		'as'    => 'user.destroy'
	]);

	Route::get('/user/profile', [
		'uses'  => 'ProfilesController@index',
		'as'    => 'user.profile'
	]);

	Route::post('/user/profile/update', [
		'uses'  => 'ProfilesController@update',
		'as'    => 'user.profile.update'
	]);


	Route::get('/settings', [
		'uses'  => 'SettingsController@index',
		'as'    => 'setting.index'
	]);

	Route::post('/settings/update', [
		'uses'  => 'SettingsController@update',
		'as'    => 'setting.update'
	]);

});