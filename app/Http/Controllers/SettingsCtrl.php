<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Settings;
use Validator;
class SettingsCtrl extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index($id=1)
	{
		$settings= Settings::findOrFail($id);
		return View('admin.settings',compact('settings'));
	}

	public function update(Request $request,$id=1)
	{
		$settings= Settings::findOrFail($id);
		$message = ['url'=>'يجب ان يبدأ :attribute بــ http:// or https://'];
		$validator =  Validator::make($request->all(), [
			'facebook_group' =>'url',
			'facebook_page' =>'url',
		],$message);
		if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }else{   
			$settings->update($request->all());
			return redirect()->back()->with('message','Success');;
		}
	}


}
