<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Redirect;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Session;
class LanguageCtrl extends Controller
{
    //
    public function chooser($lang)
    {
    	Session::set('local', $lang);
		return Redirect::back();
	}

}
