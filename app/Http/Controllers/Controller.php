<?php namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesCommands;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use App;
use Session;
use Carbon\Carbon;
abstract class Controller extends BaseController {

	use DispatchesCommands, ValidatesRequests;
	public function __construct()
	{
		if((Session::get('local')) == '')
		{
			Session::set('local','ar');
			App::setlocale(Session::get('local'));
			Carbon::setLocale(Session::get('local'));
		}else{
			Carbon::setLocale(Session::get('local'));
			App::setlocale(Session::get('local'));	
		}
	}

}
