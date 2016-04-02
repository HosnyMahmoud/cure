<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\About;
class AboutCtrl extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$abouts = About::paginate(10);
		return View('admin.about.index',compact('abouts'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View('admin.about.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		$about = About::create($request->all());
		return redirect('admin/about');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$about = About::findOrFail($id);
		return View('admin.about.show',compact('about'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$about = About::findOrFail($id);
		return View('admin.about.edit',compact('about'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Request $request,$id)
	{
		$about = About::findOrFail($id);
		$about->update($request->all());
		return redirect('admin/about');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$about = About::findOrFail($id);
		$about->delete($id);
		return redirect('admin/about');
	}

	public function front()
	{
		$abouts = About::get();
		return View('front.about.index',compact('abouts'));
	}

}
