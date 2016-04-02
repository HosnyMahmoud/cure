<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Images;
use Validator;
class ImagesCtrl extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		$images = Images::all();
		return view('admin.images.index',compact('images'));

	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
		return view('admin.images.create');

	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		//
		$validator = Validator::make($request->all(),[
  				 'name_ar'            	=> 'required',
  				 'name_en'            	=> 'required',
			     'img'                  => 'required',
		]);
		if($validator->fails()){
			return redirect()->back()->withErrors($validator)->withInput();
		}else{

			if($request->hasFile('img')){
                $ext = $request->file('img')->getClientOriginalExtension();
                $dest = 'uploads/images';
                $request->file('img')->move($dest, time().'.'.$ext);
                //$request->merge(['img'=>time().'.'.$ext]);
            }
            //dd($request->all());
        	$images =  new Images();
        	$images->name_ar = $request->name_ar;
        	$images->name_en = $request->name_en;
        	$images->img  = time().'.'.$ext ;
        	$images->save();
			//return redirect()->back();
	   	 	return back()->with('msg','تم الاضافة بنجاح');

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
		//
		$img = Images::find($id);
		return view('admin.images.edit',compact('img'));

	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update( Request $request ,$id)
	{
		//
		$images = Images::findOrFail($id);
		$validator = Validator::make($request->all(),[
  				 'name_ar'            	=> 'required',
  				 'name_en'            	=> 'required',
			     'img'                  => 'required',
		]);
		if($validator->fails()){
			return redirect()->back()->withErrors($validator)->withInput();
		}else{

			if($request->hasFile('img')){
                $ext = $request->file('img')->getClientOriginalExtension();
                $dest = 'uploads/images';
                $request->file('img')->move($dest, time().'.'.$ext);
                $request->merge(['img'=>time().'.'.$ext]);
            }
            //dd($request->all());
        	//$images =  Images::create($request->all());
        	$images->name_ar = $request->name_ar;
        	$images->name_en = $request->name_en;
        	$images->img  = time().'.'.$ext ;
        	$images->save();
	   	 	return back()->with('msg','تم الاضافة بنجاح');

   		}
	}

	public function front(){
		$images = Images::paginate(20);
		return view('front.images.images',compact('images'));
	}

	public function destroy($id)
	{
		//
		$img = Images::findOrFail($id);
		$img->delete();
		return back();
	}

}
