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
Route::get('/','HomeCtrl@index');

Route::get('/videos','VideosCtrl@front');
Route::get('/images','ImagesCtrl@front');
Route::get('/services','ServicesCtrl@front');
Route::get('/about','AboutCtrl@front');

Route::get('lang/{lang}','LanguageCtrl@chooser');
Route::get('contact','ContactCtrl@index');
Route::post('contact','ContactCtrl@getContactUsForm');

/*Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
*/
Route::get('sign_up','LoginCtrl@showClientReg');
Route::post('sign_up','LoginCtrl@postClientReg');

Route::get('login','LoginCtrl@showClientLogin');
Route::post('login','LoginCtrl@postClientLogin');
Route::get('logout','LoginCtrl@ClientLogout');
Route::group(['middleware' => 'auth'], function()
{
	Route::post('reserv','ReservationCtrl@store');
	
});

Route::get('admin/login','LoginCtrl@showAdminLogin');
Route::post('admin/login','LoginCtrl@postAdminLogin');
Route::get('admin/logout','LoginCtrl@AdminLogout');


Route::group(['middleware' => 'authAdmin'], function()
{
	Route::get('admin',function(){
		return View('admin.layout');
	});
	Route::resource('admin/admins','AdminsCtrl');
	Route::resource('admin/about','AboutCtrl');
	Route::resource('admin/settings','SettingsCtrl');
	Route::resource('admin/services','ServicesCtrl');
	Route::resource('admin/slider','SliderCtrl');
	Route::resource('admin/blog','BlogCtrl');
	Route::resource('admin/users','UsersCtrl');
	Route::resource('admin/images','ImagesCtrl');
	Route::resource('admin/videos','VideosCtrl');
	Route::resource('admin/reservations','ReservationCtrl');
	Route::resource('admin/testimonials','TestimonialsCtrl');
	Route::resource('admin/clinic','ClinicCtrl');
	Route::resource('admin/departments','DepartmentsCtrl');

	Route::resource('admin/pages','PagesCtrl');
	Route::get('admin/pages/{id}/delete','PagesCtrl@destroy');
	Route::post('admin/pages/sort','PagesCtrl@sort');

});
//---------------------- api -----------------------------//
Route::get('api/users/register','Api\Users@register');
Route::get('api/users/login','Api\Users@login');
Route::get('api/users/logout','Api\Users@logout');
Route::get('api/reservation/get_departs','Api\Reservation@get_departs');
Route::get('api/reservation/reserve','Api\Reservation@reserve');
//---------------------- api -----------------------------//