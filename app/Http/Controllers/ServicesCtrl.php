<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Services;
use Validator;
use Redirect;


class ServicesCtrl extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$services = Services::paginate(5);
		return View('admin.services.index',compact('services'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View('admin.services.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{

		$validator = Validator::make($request->all(),[
  				'name_ar'            	=> 'required',
  				'name_en'            	=> 'required',
			    'desc_ar'       	=> 'required',
			    'desc_en'       	=> 'required',
			    'image'       	=> 'required',
			],Services::$rules);
		if($validator->fails()){
			return redirect()->back()->withErrors($validator)->withInput();
		}else{
			
			$rules = array('image' => 'image');
	    	$input = ['image'=>$request->file('image')];
	    	$validator = Validator::make($input, $rules);
	    	if ($validator->fails())
		    {
		        return Redirect::back()->withErrors($validator);
		    }else{
		    	$ext = $request->file('image')->getClientOriginalExtension();
		    	$request->file('image')->move('uploads/services',time().'.'.$ext);
		    	$service = Services::create(['image'=>time().'.'.$ext,
								    		'name_ar'=>$request->name_ar,
								    		'name_en'=>$request->name_en,
								    		'desc_ar'=>$request->desc_ar,
								    		'desc_en'=>$request->desc_en,
		    		]);
	    		return Redirect::to(Url('/').'/admin/services');
		    }
	    }
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$services = Services::findOrFail($id);
		return View('admin.services.edit',compact('services'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id,Request $request)
	{
		$validator = Validator::make($request->all(),[
  				'name_ar'            	=> 'required',
  				'name_en'            	=> 'required',
			    'desc_ar'       	=> 'required',
			    'desc_en'       	=> 'required',
			],Services::$rules);
		if($validator->fails()){
			return redirect()->back()->withErrors($validator)->withInput();
		}else{
			$services = Services::findOrFail($id);
			if($request->hasfile('image')){
				$rules = array(
	        	'image' => 'image',
		    	);
		    	$input = ['image'=>$request->file('image')];
		    	$validator = Validator::make($input, $rules);
		    	if ($validator->fails())
			    {
			        return Redirect::back()->withErrors($validator);
			    }else{
			    	$ext = $request->file('image')->getClientOriginalExtension();
			    	$request->file('image')->move('uploads/services',time().'.'.$ext);
			    	$services->update(['image'=>time().'.'.$ext,
						    		 'name_ar'=>$request->name_ar,
								     'name_en'=>$request->name_en,
								     'desc_ar'=>$request->desc_ar,
								     'desc_en'=>$request->desc_en,
	    					]);
		    		return Redirect::to(Url('/').'/admin/services');
			    }
			}
			$services->update($request->all());
		    return Redirect::to(Url('/').'/admin/services');
		}    
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function front(){
		$services = Services::paginate(16);
		return view('front.services.index',compact('services'));
	}
	public function destroy($id)
	{
		$services = Services::findOrFail($id);
		$services->delete();
		return Redirect::to(Url('/').'/admin/services');
	}

}
