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
	

	//Route::controller('password', 'RemindersController');

	Route::get('login', ['as'=>'login','uses' => 'Auth\AuthController@login']);
	Route::post('login', ['as'=>'login','uses' => 'Auth\AuthController@doLogin']);
	


	//Page routes
	Route::get('home', ['as'=>'index','uses'=>'PageController@index']);
	Route::get('/user/whatWeDo', array('as'=>'whatWeDo', 'uses' => 'PageController@whatWeDo'));
	Route::get('/user/general', array('as'=>'general', 'uses' => 'PageController@members'));
	Route::get('/user/executives', array('as'=>'executive', 'uses' => 'PageController@executive'));
	Route::get('/user/contact', array('as'=>'contact', 'uses' => 'PageController@contact'));

	Route::get('/user/news/{id}/', array('as'=>'news.show', 'uses' => 'PageController@showNewsDetails'));
	Route::get('/user/sector/{id}/', array('as'=>'sector.show', 'uses' => 'PageController@showSectorDetails'));
	Route::get('/user/mission/', array('as'=>'mission.show', 'uses' => 'PageController@showMission'));

	Route::get('/user/donate', array('as'=>'donate', 'uses' => 'PageController@showDonatePage'));
	Route::get('/news/{id}', array('as'=>'news.show', 'uses' => 'PageController@showNewsDetails'));

	

	//Call to the create method of userController for register blade
	Route::get('/user/register', array('as'=>'register', 'uses' => 'UsersController@create'));
	Route::post('/user/register/store', array('as'=>'user.register', 'uses'=>'UsersController@store'));

	//Sending a mail
	//Route::post('/user/contact', array('as'=>'contact', 'uses' => 'MailController@sendMail'));
	Route::post('/user/contact',['as'=>'contact','uses'=>'MailController@sendMail']);
	/*Route::get('/user/testMail',['as'=>'testMail','uses'=>'MailController@testMail']);
	Route::post('/user/testMail',['as'=>'testMail','uses'=>'MailController@sendMail']);*/

});

Route::group(array('middleware' => ['auth']), function()
{
	Route::get('logout', ['as' => 'logout', 'uses' => 'Auth\AuthController@logout']);
});

Route::group(array('middleware' => ['auth','role:user']), function()
{
	Route::get('user/dashboard', array('as' => 'user.dashboard', 'uses' => 'UsersController@dashboard'));
	Route::get('user/profile/edit', array('as' => 'user.editProfile', 'uses' => 'UsersController@edit'));
	Route::post('user/profile/edit', array('as' => 'user.doEditProfile', 'uses' => 'UsersController@update'));

});
Route::group(array('middleware' => ['auth','role:admin']), function()
{

	Route::get('profile', ['as' => 'profile', 'uses' => 'UsersController@profile']);
	Route::get('dashboard', array('as' => 'dashboard', 'uses' => 'Auth\AuthController@dashboard'));
	Route::get('change-password', array('as' => 'password.change', 'uses' => 'Auth\AuthController@changePassword'));
	Route::post('change-password', array('as' => 'password.doChange', 'uses' => 'Auth\AuthController@doChangePassword'));

	//Admin can edit the Designation of a member

	Route::get('admin/members', ['as' => 'members', 'uses' => 'AdminController@showMembers']);
	Route::get('admin/members/{id}', ['as' => 'members.edit', 'uses' => 'AdminController@editMember']);
	Route::post('admin/members/{id}', ['as' => 'members.doEdit', 'uses' => 'AdminController@doEditMember']);
	Route::get('admin/members/show/{id}', ['as' => 'members.info', 'uses' => 'AdminController@showMemberInfo']);
	Route::get('admin/members/changePassword/{id}', ['as' => 'members.changePassword', 'uses' => 'AdminController@changePassword']);
	Route::post('admin/members/changePassword/{id}', ['as' => 'members.password.doChange', 'uses' => 'AdminController@doChangePassword']);
	Route::get('admin/members/make/{id}/admin', ['as' => 'members.makeAdmin', 'uses' => 'AdminController@makeAdmin']);

	/*News panel route start*/
	
	Route::get('news', ['as' => 'news', 'uses' => 'AdminController@newsShow']);
	Route::get('/{id}/editNews',['as'=>'getEditNews','uses'=>'AdminController@editNews']);
	Route::post('/{id}/editNews',['as'=>'postEditNews','uses'=>'AdminController@updateNews']);
	Route::post('/createNews',['as'=>'createNews','uses'=>'AdminController@createNews']);
	Route::post('/{id}/daleteNews',['as'=>'deleteNews','uses'=>'AdminController@destroyNews']);

	/*Edit mission page route*/


	Route::get('/{id}/editMission',['as'=>'editMission','uses'=>'AdminController@editMission']);
	Route::post('/{id}/updateMission',['as'=>'updateMission','uses'=>'AdminController@updateMission']);

	//Slider images routes

	Route::get ('/changeSlider',['as'=>'changeSlider','uses'=>'AdminController@sliderImages']);
	Route::get ('/{id}/uploadImage',['as'=>'uploadImage','uses'=>'AdminController@uploadImage']);
	Route::post ('/{id}/uploadImage',['as'=>'uploadImage','uses'=>'AdminController@storeImage']);


	//Gallery image routes

	Route::get ('/updateGallery',['as'=>'updateGallery','uses'=>'AdminController@updateGallery']);
	Route::get ('/{id}/uploadGalleryImage',['as'=>'uploadGalleryImage','uses'=>'AdminController@uploadGalleryImage']);
	Route::post ('/{id}/uploadGalleryImage',['as'=>'uploadGalleryImage','uses'=>'AdminController@storeGalleryImage']);



});

