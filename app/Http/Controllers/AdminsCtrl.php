<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Admin;
use Validator;
class AdminsCtrl extends Controller {

	public function index()
	{
		$admins = Admin::all();
		return View('admin.admins.index',compact('admins'));
	}
	public function create()
	{
		return View('admin.admins.create');
	}

	public function store(Request $request)
	{
		$validator = Validator::make($request->all(),[
  				'username'            	=> 'required|AlphaNum|unique:admins|min:6',
			    'email'            		=> 'required|email|unique:admins',
				'password'        		=> 'required|min:6|',
			    'full_name'            	=> 'required',
			],Admin::$rules);
		if($validator->fails()){
			return redirect()->back()->withErrors($validator)->withInput();
		}else{
			 $add =  Admin::create([
			    	'full_name'=>$request->full_name,
			    	'email'=>$request->email,
			    	'username'=>$request->username,
			    	'password'=>bcrypt($request->password),
			    	]);
			return redirect()->back()->with('msg','success');
		}

	}

	public function edit($id)
	{
		$admin = Admin::findOrFail($id);
		return View('admin.admins.edit',compact('admin'));
	}
	public function update(Request $request,$id)
	{
		$admin = Admin::findOrFail($id);
		$validator = Validator::make($request->all(),[
			'username'            	=> 'required|AlphaNum|min:6',
		    'email'            		=> 'required|email|',
			'password'        		=> 'min:6',
		    'full_name'            	=> 'required',
			],Admin::$rules);
		if($validator->fails()){
			return redirect()->back()->withErrors($validator)->withInput();
		}else{
			if($request->has('password'))
			{
				$request->merge(['password'=>bcrypt($request->password)]);
				$admin->update($request->all());
				return redirect()->back()->with('msg','Updated Successfuly !!');

			}else{
				$admin->update($request->all());
				return redirect()->back()->with('msg','Updated Successfuly !!');
			}
		}
	}
	public function destroy($id)
	{
		$admin = Admin::findOrFail($id);
		$admin->delete();
		return redirect()->back()->with('msg','Deleted Successfuly !!');


	}

}
