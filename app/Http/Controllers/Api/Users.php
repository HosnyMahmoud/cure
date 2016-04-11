<?php namespace App\Http\Controllers\Api;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\User;
use App\ApiSettings;
use Validator;
use Auth;
class Users extends Controller {
	public function api()
	{
		$api = ApiSettings::first();
		return $api;
	}
	public function register(Request $bag)
	{
		if($bag->has('secret'))
		{
			if($bag->secret == @$this->api()->secret)
			{
				if(Auth::client()->check() == false)
				{
					$validator =  Validator::make($bag->all(), [
						'firstname' => 'required',
						'lastname' => 'required',
						'email' => 'required|email|unique:users',
						'phone' => 'required',
						'password' => 'required',
					]);
					if($validator->fails()){
						return response()->json(['status' => '400','message'=>'Some Errors Happened','errors'=>$validator->errors()->all()],400);
					}else{
						$bag->merge(['password'=>bcrypt($bag->password)]);
						$users = User::create($bag->all());
						if($users){
							return response()->json(['status' => '200','message'=>'succssfuly Registered'],200);
						}
					}
				}else{
					return response()->json(['status' => '400','message'=>'Bad Request : Already Logged In'],400);	
				}
			}else{
				return response()->json(['status' => '401','message'=>'Unauthorized : wrong secret key'],401);
			}
		}else{
			return response()->json(['status' => '400','message'=>'missing secret key'],400);
		}
	}
	public function login(Request $bag)
	{
		if($bag->has('secret'))
		{
			if($bag->secret == @$this->api()->secret)
			{
				if(Auth::client()->check() == false)
				{
					$validator =  Validator::make($bag->all(), [
						'email' => 'required|email',
						'password' => 'required',
					]);
					if($validator->fails()){
						return response()->json(['status' => '400','message'=>'Some Errors Happened','errors'=>$validator->errors()->all()],400);
					}else{
						$this->auth = Auth::client();
						if ($this->auth->attempt($bag->only('email', 'password'))){

							$data['id'] = Auth::client()->get()->id;
							$data['email'] = Auth::client()->get()->email;
							$data['firstname'] = Auth::client()->get()->firstname;
							$data['lastname'] = Auth::client()->get()->lastname;
						
							return response()->json([
								'status' => '200',
								'id'=>$data['id'],
								'email'=>$data['email'],
								'firstname'=>$data['firstname'],
								'lastname'=>$data['lastname'],
								'message'=>'succssfuly Logged in'
								],200);
						}else{
							return response()->json(['status' => '401','message'=>'Unauthorized : Wrong Email Or Password'],401);
						}
					}
				}else{
					$data['id'] = Auth::client()->get()->id;
					$data['email'] = Auth::client()->get()->email;
					$data['firstname'] = Auth::client()->get()->firstname;
					$data['lastname'] = Auth::client()->get()->lastname;
					return response()->json([
						'status' => '400',
						'id'=>$data['id'],
						'email'=>$data['email'],
						'firstname'=>$data['firstname'],
						'lastname'=>$data['lastname'],
						'message'=>'Bad Request : Already Logged In'
						],400);

				}	
			}else{
				return response()->json(['status' => '401','message'=>'Unauthorized : wrong secret key'],401);
			}
		}else{
			return response()->json(['status' => '400','message'=>'missing secret key'],400);
		}
	}
	public function logout(Request $bag)
	{
		if($bag->has('secret'))
		{
			if($bag->secret == @$this->api()->secret)
			{
				if(Auth::client()->check() == true)
				{
					Auth::client()->logout();	
					return response()->json(['status' => '200','message'=>'succssfuly logged out'],400);
				}else{
					return response()->json(['status' => '400','message'=>'Bad Request : You are not logged in'],400);
				}
			}else{
				return response()->json(['status' => '401','message'=>'Unauthorized : wrong secret key'],401);
			}
		}else{
			return response()->json(['status' => '400','message'=>'missing secret key'],400);
		}
	}
	
}
