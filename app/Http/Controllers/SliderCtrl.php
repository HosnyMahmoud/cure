<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Slider;
use Validator;
use Redirect;


class SliderCtrl extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$slider = Slider::paginate(5);
		return View('admin.slider.index',compact('slider'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View('admin.slider.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		$validator = Validator::make($request->all(),[
  				'background'            	=> 'required',
  				'head_ar'            	=> 'required',
			    'head_en'       	=> 'required',
			    'text_ar'       	=> 'required',
			    'text_en'       	=> 'required',
			],Slider::$rules);
		if($validator->fails()){
			return redirect()->back()->withErrors($validator)->withInput();
		}else{
			$rules = array('background' => 'image');
	    	$input = ['background'=>$request->file('background')];
	    	$validator = Validator::make($input, $rules);
	    	if ($validator->fails())
		    {
		        return Redirect::back()->withErrors($validator);
		    }else{
		    	$ext = $request->file('background')->getClientOriginalExtension();
		    	$request->file('background')->move('uploads/slider','back-'.time().'.'.$ext);
		    	$clients = Slider::create(['background'=>'back-'.time().'.'.$ext,
								    		'head_ar'=>$request->head_ar,
								    		'head_en'=>$request->head_en,
								    		'text_ar'=>$request->text_ar,
								    		'text_en'=>$request->text_en,
		    		]);
	    		return Redirect::to(Url('/').'/admin/slider');
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
		$slides = Slider::findOrFail($id);
		return View('admin.slider.edit',compact('slides'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id,Request $request)
	{
		$slides = Slider::findOrFail($id);
		$validator = Validator::make($request->all(),[
  				'head_ar'            	=> 'required',
			    'head_en'       	=> 'required',
			    'text_ar'       	=> 'required',
			    'text_en'       	=> 'required',
			],Slider::$rules);
		if($validator->fails()){
			return redirect()->back()->withErrors($validator)->withInput();
		}else{
			if($request->hasfile('background')){
				$rules = array(
	        	'background' => 'image',
		    	);
		    	$input = ['background'=>$request->file('background')];
		    	$validator = Validator::make($input, $rules);
		    	if ($validator->fails())
			    {
			        return Redirect::back()->withErrors($validator);
			    }else{
			    	$ext = $request->file('background')->getClientOriginalExtension();
			    	$request->file('background')->move('uploads/slider','back-'.time().'.'.$ext);
			    	$slides->update(['background'=>'back-'.time().'.'.$ext,
									 'head_ar'=>$request->head_ar,
								     'head_en'=>$request->head_en,
								     'text_ar'=>$request->text_ar,
								     'text_en'=>$request->text_en,
	    					]);
		    		return Redirect::to(Url('/').'/admin/slider');
			    }
			}
			$slides->update($request->all());
		    return Redirect::to(Url('/').'/admin/slider');
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
		$slides = Slider::findOrFail($id);
		$slides->delete();
		return Redirect::to(Url('/').'/admin/slider');
	}

}
