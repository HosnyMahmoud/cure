<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Http\Requests\PagesRequest;
use App\Pages;
use Redirect;
use App\ads;
use Validator;
class PagesCtrl extends Controller {

	public function index()
	{
		$securities=Pages::where('ct_id',0)->orderby('sort')->paginate(5);
		return View('admin.pages.index',compact('securities'));
	}

	public function create()
	{
		$pages = Pages::where('ct_id',0)->lists('title_ar','id');
		return View('admin.pages.create',compact('pages'));
	}

	public function store(Request $request)
	{
		//dd($request->add());
		$validator = Validator::make($request->all(),[
  				'title_ar'            	=> 'required',
  				'title_en'            	=> 'required',
			    'content_ar'       	=> 'required',
			    'content_en'       	=> 'required',
			],Pages::$rules);
		if($validator->fails()){
			return redirect()->back()->withErrors($validator)->withInput();
		}else{
			Pages::create($request->all());
			return redirect()->to(Url('/').'/admin/pages/');
		}	
	}

	public function show($id)
	{
		$securities = Pages::findorfail($id);
		$sub = Pages::where('ct_id',$id)->orderby('sort')->paginate(5);
		return View('admin.pages.show',compact('securities','sub'));		
	}

	public function edit($id)
	{
		$pages = Pages::where('ct_id',0)->where('id',!$id)->lists('title_ar','id');
		$securities = Pages::findorfail($id);
		return View('admin.pages.edit',compact('securities','pages'));
	}

	public function update($id,Request $request)
	{
		$validator = Validator::make($request->all(),[
  				'title_ar'            	=> 'required',
  				'title_en'            	=> 'required',
			    'content_ar'       	=> 'required',
			    'content_en'       	=> 'required',
			],Pages::$rules);
		if($validator->fails()){
			return redirect()->back()->withErrors($validator)->withInput();
		}else{
			$securities = Pages::findorfail($id);
			$securities->update($request->all());
			return redirect()->to(Url('/').'/admin/pages/');
		}	
	}

	public function sort() {
		unset($_POST['_token']);
		foreach ($_POST as $k => $v) {
			Pages::where('id', $k)
				->update(['sort' => $v]);
		}
		return Redirect::back();
	}
	public function destroy($id)
	{
		$sub = Pages::where('ct_id',$id)->delete();
		$pages = Pages::find($id);
		$pages->delete();
		return Redirect::back();
	}


	public function frontpage($id)
	{
		$page = Pages::findorfail($id);
		$ads = ads::orderByRaw("RAND()")->first();

		return View('front.pages.index',compact('page','ads'));
	}
	public function frontsubpage($id,$subid)
	{
		$page = Pages::findorfail($subid);
		$ads = ads::orderByRaw("RAND()")->first();
		return View('front.pages.index',compact('page','ads'));
	}

}