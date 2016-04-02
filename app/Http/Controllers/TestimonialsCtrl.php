<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Testimonials;
class TestimonialsCtrl extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$testimonials = Testimonials::paginate(10);
		return View('admin.testimonials.index',compact('testimonials'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View('admin.testimonials.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		Testimonials::create($request->all());
		return redirect()->to('/admin/testimonials');
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
		$testimonials = Testimonials::findOrFail($id);
		return View('admin.testimonials.edit',compact('testimonials'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id,Request $request)
	{
		$testimonials = Testimonials::findOrFail($id);
		$testimonials->update($request->all());
		return redirect()->to('/admin/testimonials');

	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$testimonials = Testimonials::findOrFail($id);
		$testimonials->delete();
		return redirect()->to('/admin/testimonials');
	}

}
