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

Route::get('/', function () {
    return view('welcome');
});

Route::get('layout/default', function()
{
	return view('layout.default');
});
Route::get('default1', function()
{
	return view('layout.default1');
});


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


Route::group(['middleware' => ['web']], function () 
{

   Route::get('profile/{id}', [ 'as'=> 'users.view.profile','uses' => 'ProfileController@viewProfile']);
    Route::get('profile/{id}/edit', [ 'as'=>'users.edit.profile','uses' => 'ProfileController@editProfile']);
    Route::post('save/profile/{id}',['as'=> 'save.profile', 'uses' => 'ProfileController@saveProfile']);
    Route::get('registereduser',['as'=>'show.registerd','uses'=>'ProfileController@showRegistered']);
    Route::get('registerlist',['as'=>'show.registerlist','uses'=>'ProfileController@registeredList']);
    Route::get('managenews', ['uses' => 'NewsController@manageNews' ,'as' => 'manage.news']);
    Route::resource('news', 'NewsController');


    Route::post('publishnews', ['uses' => 'NewsController@publishNews' ,'as' => 'publish.news']);
    Route::get('index',['uses' => 'NewsController@index']);
    Route::get('addnews', ['uses' => 'NewsController@addNews' ,'as' => 'add.news']);
    Route::get('register', ['uses' => 'UserController@register']);
    Route::get('login', ['as' => 'users.login', 'uses' => 'UserController@login']);
    Route::get('forget', ['uses' => 'UserController@forget']);

    Route::get('change_password', ['as' => 'reset.password', 'uses' => 'UserController@changePassword1']);

    Route::get('reset/{token}', ['uses' => 'UserController@resetPassword']);


    Route::any('users/registersuccess', ['uses' => 'UserController@registerSuccess']);

    Route::post('authenticate', ['as' => 'user.authenticate','uses' => 'UserController@authenticate']);

    Route::get('getData/{id?}', ['uses' => 'UserController@getData']);




        Route::get('changepassword', ['uses' => 'UserController@changePassword']);
        Route::post('postChangePassword', ['as' => 'change.password', 'uses' => 'UserController@postChangePassword']);

		Route::get('dashboard', ['as' => 'dashboard.index', 'uses' => 'DashboardController@index']);
        Route::post('reset', [ 'uses' => 'UserController@reset', 'as' => 'password.reset']);
        Route::get('password/reset', 'Auth\PasswordController@postReset');
        Route::get('users/logout', ['uses' => 'UserController@logout']);

       // Route::post('password/reset', 'Auth\PasswordController@postReset');

});
