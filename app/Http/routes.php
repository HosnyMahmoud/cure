<?php



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
Route::group(['middleware' => 'auth'], function()
{
	
}*/

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