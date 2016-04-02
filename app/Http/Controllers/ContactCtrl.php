<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Validator;
use Mail;
use Lang;
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

        if(Mail::send('emails.feedback',
        array(
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'msg' => $request->get('msg'),

        ), function($message)use($request)
	    {
	        $message->from($request->get('email'));
	        $message->to('eng.ahmedmgad@gmail.com', 'Admin')->subject('Contact Details From:'.Url('/'));
	    })){
        	return redirect()->to('/contact')->with('success',Lang::get('index.success'));
	    }
	}
}