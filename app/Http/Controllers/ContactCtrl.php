<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Validator;
use Mail;
class ContactCtrl extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		return view('front.contact.index');
	}

	
	public function getContactUsForm(Request $request){

        Mail::send('emails.feedback',
        array(
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'msg' => $request->get('msg'),

        ), function($message)use($request)
	    {
	        $message->from($request->get('email'));
	        $message->to('m.3laa.95@gmail.com', 'Admin')->subject('Contact Details From:'.Url('/'));
	    });
	}
}