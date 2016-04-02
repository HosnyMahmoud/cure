<?php namespace App\Http\Controllers\Api;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Reservations;
use App\ApiSettings;
use App\Departments;
use App\User;
use Auth;
use Validator;
use Carbon\Carbon;
class Reservation extends Controller {
	public function api()
	{
		$api = ApiSettings::first();
		return $api;
	}
	public function get_departs(Request $bag)
	{
		if($bag->has('secret'))
		{
			if($bag->secret == @$this->api()->secret)
			{
				if(Auth::client()->check() == true)
				{
					$departments = Departments::all();
					return response()->json(['status' => '200','data'=>$departments],200);

				}else{
					return response()->json(['status' => '400','message'=>'Bad Request : Must be Logged In'],400);	
				}
			}else{
				return response()->json(['status' => '401','message'=>'Unauthorized : wrong secret key'],401);
			}
		}else{
			return response()->json(['status' => '400','message'=>'missing secret key'],400);
		}
	}
	public function reserve(Request $bag)
	{
		if($bag->has('secret'))
		{
			if($bag->secret == @$this->api()->secret)
			{
				if(Auth::client()->check() !== true)
				{
					$validator =  Validator::make($bag->all(), [
						'patient_name' 		=> 'required',
						'patient_phone' 	=> 'required',
						'patient_email' 	=> 'required|email',
						'reservation_date' 	=> 'required',

					]);
					if($validator->fails()){
						return response()->json(['status' => '400','message'=>'Some Errors Happened','errors'=>$validator->errors()->all()],400);
					}else{
						$bag->merge(['reservation_date'=>Carbon::parse($bag->reservation_date)]);
						//$bag->merge(['user_id'=>Auth::client()->get()->id]);
						$reservation = Reservations::create($bag->all());
						return response()->json(['status' => '200','message'=>'Successfuly Created'],200);
					}
				}else{
					return response()->json(['status' => '400','message'=>'Bad Request : Must be Logged In'],400);	
				}
			}else{
				return response()->json(['status' => '401','message'=>'Unauthorized : wrong secret key'],401);
			}
		}else{
			return response()->json(['status' => '400','message'=>'missing secret key'],400);
		}
	}

}
