<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Clinic;
use Validator;
class ClinicCtrl extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		$clinics = Clinic::all();
		return view('admin.clinic.index',compact('clinics'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
		return view('admin.clinic.create');
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
  				'title_ar'            	=> 'required',
  				'title_en'            	=> 'required',
			    'img'       	        => 'required',
			],Clinic::$rules);
		if($validator->fails()){
			return redirect()->back()->withErrors($validator)->withInput();
		}else{

    		if($request->hasFile('img')){
	            $ext = $request->file('img')->getClientOriginalExtension();
	            $dest = 'uploads/clinic';
	            $request->file('img')->move($dest, time().'.'.$ext);
	            $request->merge(['img'=>time().'.'.$ext]);
            }

            $clinic = new Clinic();
            $clinic->title_ar = $request->title_ar;
            $clinic->title_en = $request->title_en;
            $clinic->img = time().'.'.$ext;
            $clinic->save();

            return redirect('admin/clinic');
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
		$clinic = Clinic::find($id);
		return view('admin.clinic.edit',compact('clinic'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Request $request,$id)
	{
		//
        $clinic = Clinic::find($id);
		$validator = Validator::make($request->all(),[
  				'title_ar'            	=> 'required',
  				'title_en'            	=> 'required',
				],Clinic::$rule);
		if($validator->fails()){
			return redirect()->back()->withErrors($validator)->withInput();
		}else{

    		if($request->hasFile('img')){
	            $ext = $request->file('img')->getClientOriginalExtension();
	            $dest = 'uploads/clinic';
	            $request->file('img')->move($dest, time().'.'.$ext);
	            $request->merge(['img'=>time().'.'.$ext]);
            	$clinic->img = time().'.'.$ext;
            }

            $clinic->title_ar = $request->title_ar;
            $clinic->title_en = $request->title_en;
            $clinic->save();

            return redirect('admin/clinic');
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
		//
		$clinic = Clinic::findOrFail($id);
		$clinic->delete();
		return redirect('/admin/clinic/');
	}

}
