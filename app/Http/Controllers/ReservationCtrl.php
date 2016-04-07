<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Reservations;
use Carbon\Carbon;
use App\Settings;
use Auth;
use Mail;
class ReservationCtrl extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$reservations = Reservations::latest('reservation_date')->paginate(20);
		return view('admin.reservations.index',compact('reservations'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		$settings = Settings::first();
		$request->merge(['reservation_date'=>Carbon::parse($request->date)]);
		$request->merge(['user_id'=>Auth::client()->get()->id]);
		$reserv = Reservations::create($request->all());
		Mail::send('emails.reservation',
        array(
            'name' => $request->patient_name,
            'email' => $request->patient_email,
            'number' => $request->patient_phone,
            'date' => $request->date,
            'url' => Url('/').'/admin/reservations',

        ), function($message)use($request,$settings)
	    {
	        $message->from($settings->email);
	        $message->to($settings->email, 'Admin')->subject('New reservation From:'.Url('/'));
	    });
		return redirect()->back()->with('success','done');	
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
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
