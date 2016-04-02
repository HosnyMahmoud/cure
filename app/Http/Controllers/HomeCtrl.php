<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Images;
use App\Videos;
use App\Services;
use App\About;
use App\Blog;
use App\Slider;
use App\Testimonials;
use App\Clinic;

class HomeCtrl extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$about = About::first();
		$images = Images::take(7)->get();
		$videos = Videos::take(7)->get();
		$services = Services::take(4)->get();
		$blog = Blog::latest('created_at')->take(5)->get();
		$slider = Slider::latest('created_at')->get();
		$testimonials = Testimonials::latest('created_at')->take(5)->get();
		$clinic = Clinic::latest('created_at')->take(4)->get();


		return View('front.index',compact('images','videos','services','about','blog','slider','testimonials','clinic'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
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
