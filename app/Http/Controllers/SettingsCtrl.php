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
		$validator = Validator::make($request->all(),[
  				'siteName_ar'            	=> 'required',
  				'siteName_en'            	=> 'required',
  				'siteDisc_ar'            	=> 'required',
  				'siteDisc_en'            	=> 'required',
  				'tags_ar'            	=> 'required',
  				'tags_en'            	=> 'required',
  				'phone'            	=> 'required',
  				'mobile'            	=> 'required',
  				'fax'            	=> 'required',
  				'email'            	=> 'required',
  				'address_ar'            	=> 'required',
  				'address_en'            	=> 'required',

			],Settings::$rules);
		if($validator->fails()){
			return redirect()->back()->withErrors($validator)->withInput();
		}else{

			$settings= Settings::findOrFail($id);
			$message = ['url'=>'يجب ان يبدأ :attribute بــ http:// or https://'];
			$validator =  Validator::make($request->all(), [
				'facebook_group' =>'url',
				'facebook_page' =>'url',
			],$message);
			if ($validator->fails()) {
	            return redirect()->back()->withErrors($validator);
	        }else{ 

	        	if($request->hasFile('logo')){

	               $ext = $request->file('logo')->getClientOriginalExtension();
	               $dest = 'uploads/';
	               $request->file('logo')->move($dest, 'logo.png');

	                //dd($request->all());
					$settings->update($request->all());
					return redirect()->back()->with('message','Success');;
	        	}else{
	        		return redirect()->back()->withErrors($validator);
	        	}
			}
		}
	}


}
