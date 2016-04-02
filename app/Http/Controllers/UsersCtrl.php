<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\User;
use Validator;
class UsersCtrl extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$users = User::paginate(10);
		return View('admin.users.index',compact('users'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View('admin.users.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		$message= [
		'unique'=>':attribute مستخدم من قبل',
		'confirmed' => ' كلمتان السر غير متطابقتان'
		];
		$validator =  Validator::make($request->all(), [
			'profile_pic' =>'image',
			'username' =>'unique:users',
			'email' =>'unique:users',
			'password' =>'required',
		],$message);
		if($validator->fails()){
			return redirect()->back()->withErrors($validator)->withInput();
		}else{
			if($request->hasFile('profile_pic'))
			{
				$file = $request->file('profile_pic');
				$filename  = time() . '.' . $file->getClientOriginalExtension();
            	$file->move('uploads/profiles', $filename);
			}
			$request->merge(['password'=>bcrypt($request->password)]);
			$user =  User::create($request->all());
			if($request->hasFile('profile_pic'))
			{
			$users = User::findOrFail($user->id);
			$users->update(['profile_pic'=>$filename]);
			}
			return redirect()->to('admin/users');			
		}
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$user = User::findOrFail($id);
		return View('admin.users.edit',compact('user'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Request $request,$id)
	{
		$user = User::findOrFail($id);
		$message= [
		'unique'=>':attribute مستخدم من قبل',
		];
		$validator =  Validator::make($request->all(), [
			'profile_pic' =>'image',
		],$message);
		if($validator->fails()){
			return redirect()->back()->withErrors($validator)->withInput();
		}else{
			if($request->hasFile('profile_pic'))
			{
				$file = $request->file('profile_pic');
				$filename  = time() . '.' . $file->getClientOriginalExtension();
            	$file->move('uploads/profiles', $filename);
			}
			if($request->password !== "")
			{
				$request->merge(['password'=>bcrypt($request->password)]);

			}else{

				$request->merge(['password'=>$user->password]);

			}
			$user->update($request->all());
			if($request->hasFile('profile_pic'))
			{
			$users = User::findOrFail($user->id);
			$users->update(['profile_pic'=>$filename]);
			}
			return redirect()->to('admin/users');			
			
		}
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$user = User::findOrFail($id);
		$user->delete();
		return redirect()->to('admin/users');			
		
	}

}
