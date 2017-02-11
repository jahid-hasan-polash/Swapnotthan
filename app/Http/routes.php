<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
	return Redirect::route('index');
});


Route::group(['middleware' => 'guest'], function(){
	
	Route::controller('password', 'RemindersController');
	Route::get('login', ['as'=>'login','uses' => 'Auth\AuthController@login']);
	Route::get('user/create', ['as'=>'user.create','uses' => 'UsersController@create']);
	Route::post('user/store', ['as'=>'user.store','uses' => 'UsersController@store']);
	Route::post('login', array('uses' => 'Auth\AuthController@doLogin'));

	//Page routes
	Route::get('home', ['as'=>'index','uses'=>'PageController@index']);
	Route::get('/user/whatWeDo', array('as'=>'whatWeDo', 'uses' => 'PageController@whatWeDo'));
	Route::get('/user/general', array('as'=>'general', 'uses' => 'PageController@members'));
	Route::get('/user/executives', array('as'=>'executive', 'uses' => 'PageController@executive'));
	Route::get('/user/contact', array('as'=>'contact', 'uses' => 'PageController@contact'));
	Route::get('/user/getInvolved', array('as'=>'getInvolved', 'uses' => 'MembersController@create'));
	Route::post('/user/getInvolved/store', array('as'=>'user.getInvolved', 'uses'=>'MembersController@store'));


	// social login route
	Route::get('login/fb', ['as'=>'login/fb','uses' => 'SocialController@loginWithFacebook']);
	Route::get('login/gp', ['as'=>'login/gp','uses' => 'SocialController@loginWithGoogle']);

});



Route::group(array('middleware' => 'auth'), function()
{

	Route::get('logout', ['as' => 'logout', 'uses' => 'Auth\AuthController@logout']);
	Route::get('profile', ['as' => 'profile', 'uses' => 'UsersController@profile']);
	Route::get('admin', array('as' => 'dashboard', 'uses' => 'Auth\AuthController@dashboard'));
	Route::get('change-password', array('as' => 'password.change', 'uses' => 'Auth\AuthController@changePassword'));
	Route::post('change-password', array('as' => 'password.doChange', 'uses' => 'Auth\AuthController@doChangePassword'));


});



