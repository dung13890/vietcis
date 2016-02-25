<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/


Route::group(['middleware' => 'web'], function () {
    Route::auth();
    Route::get('/', 'Frontend\HomeController@index');
    Route::get('image-resize/{file}/{w?}/{h?}', ['as' => 'image.resize', 'uses' => 'Backend\DashboardController@resize'])->where(['file' => '(.*?)']);
    Route::get('/home', 'HomeController@index');
    Route::get('danh-muc/{slug}.html', ['as'=>'post.category', 'uses'=>'Frontend\PostController@withCategory']);
    Route::get('lien-he.html', ['as'=>'contact.show', 'uses'=>'Frontend\HomeController@contact']);
    Route::get('tim-kiem', ['as'=>'post.search', 'uses'=>'Frontend\PostController@search']);
    Route::get('{slug}.html', ['as'=>'post.show', 'uses'=>'Frontend\PostController@show']);
    Route::get('trang/{slug}.html', ['as'=>'page.show', 'uses'=>'Frontend\HomeController@page']);
    Route::get('danh-muc/{slug}.html', ['as'=>'post.category', 'uses'=>'Frontend\PostController@category']);
    Route::post('lien-he/post',['as'=>'contact.post', 'uses'=> 'Frontend\HomeController@postContact']);

    Route::group(['prefix' => '/admin', 'namespace' => 'Backend','middleware' => ['auth']], function () {
		Route::get('/', 'DashboardController@index');
		Route::post('image/ajax',['as'=>'admin.image.ajax', 'uses'=> 'DashboardController@uploadImage']);
		
		Route::get('user/data', ['as'=>'admin.user.data', 'uses'=>'UserController@getData']);
		Route::resource('user', 'UserController');

		Route::get('profile', ['as'=>'admin.profile', 'uses'=>'ProfileController@userShow']);
		Route::get('profile/edit', ['as'=>'admin.profile.edit', 'uses'=>'ProfileController@userEdit']);
		Route::post('profile/update', ['as'=>'admin.profile.update', 'uses'=>'ProfileController@userUpdate']);

		Route::get('category/type/{type}', ['as'=>'admin.category.type', 'uses'=>'CategoryController@getDataWithType']);
		Route::resource('category', 'CategoryController');

		Route::get('post/data', ['as'=>'admin.post.data', 'uses'=>'PostController@getData']);
		Route::get('post/data/category/{category}', ['as'=>'admin.post.data.category', 'uses'=>'PostController@getDataWithCategory']);
		Route::get('post/category/{category}', ['as'=>'admin.post.category', 'uses'=>'PostController@category']);
		Route::resource('post', 'PostController');

		Route::get('config', ['as'=>'admin.config.index', 'uses'=>'ConfigController@index']);
		Route::Patch('config/{id}', ['as'=>'admin.config.update', 'uses'=>'ConfigController@update']);

		Route::get('page/data', ['as'=>'admin.page.data', 'uses'=>'PageController@getData']);
		Route::resource('page', 'PageController');

		Route::get('menu/section/{section}', ['as'=>'admin.menu.section', 'uses'=>'MenuController@getDataWithSection']);
		Route::post('menu/ajax-update', ['as'=>'admin.menu.ajax.update', 'uses'=>'MenuController@ajaxUpdate']);
		Route::resource('menu', 'MenuController');

		Route::get('slide/data', ['as'=>'admin.slide.data', 'uses'=>'SlideController@getData']);
		Route::get('slide/home', ['as'=>'admin.slide.home', 'uses'=>'SlideController@home']);
		Route::resource('slide', 'SlideController');

		Route::get('partner/data', ['as'=>'admin.partner.data', 'uses'=>'PartnerController@getData']);
		Route::resource('partner', 'PartnerController');

		Route::get('service/data', ['as'=>'admin.service.data', 'uses'=>'ServiceController@getData']);
		Route::resource('service', 'ServiceController');


	});
});
