<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
use Input;
use App\Blog;
use App\ads;

class BlogCtrl extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$articles = Blog::paginate('10');
		return View('admin.blog.index',compact('articles'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View('admin.blog.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		//dd($request->all());
		$validator =  Validator::make($request->all(), [
			'title_ar' => 'required|min:5',
			'title_en' => 'required|min:5',
			'image' =>'image|required',
			'content_ar' =>'required',
			'content_en' =>'required',
			'tags_ar' =>'required',
			'tags_en' =>'required',
		],Blog::$rules);
		if($validator->fails()){
			return redirect()->back()->withErrors($validator)->withInput();
		}else{
			$image = Input::file('image');
            $filename  = time() . '.' . $image->getClientOriginalExtension();
            $path = public_path('/uploads/blog/');
            $image->move($path, $filename);

			$blog = Blog::create([
				'title_ar'=>$request->title_ar,
				'title_en'=>$request->title_en,
				'content_ar'=>$request->content_ar,
				'content_en'=>$request->content_en,
				'image'=>$filename,
				'tags_ar'=>$request->tags_ar,
				'tags_en'=>$request->tags_en,
				]);
			return redirect()->to('admin/blog/');
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
		$article = Blog::findOrFail($id);
		return view('admin.blog.show',compact('article'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$article = Blog::findOrFail($id);

		return view('admin.blog.edit',compact('article'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id,Request $request)
	{
		$article = Blog::findOrFail($id);
		$validator =  Validator::make($request->all(), [
			'title_ar' => 'required|min:5',
			'title_en' => 'required|min:5',
			'image' =>'image',
			'content_ar' =>'required',
			'content_en' =>'required',
			'tags_ar' =>'required',
			'tags_en' =>'required',
		],Blog::$rules);
		if($validator->fails()){
			return redirect()->back()->withErrors($validator)->withInput();
		}else{
			if($request->hasFile('image')){
				
				\File::Delete('/uploads/blog/'.$article->image);
				$image = Input::file('image');
	            $filename  = time() . '.' . $image->getClientOriginalExtension();
	            $path = public_path('/uploads/blog/');
	            $image->move($path, $filename);

				$article->update([
					'title_ar'=>$request->title_ar,
					'title_en'=>$request->title_en,
					'content_ar'=>$request->content_ar,
					'content_en'=>$request->content_en,
					'image'=>$filename,
					'tags_ar'=>$request->tags_ar,
					'tags_en'=>$request->tags_en,
					]);
			}else{
				$request->merge(['image' => $article->image]);
				$article->update($request->all());
			}

			return redirect()->to('admin/blog/');
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
		$article = Blog::findOrFail($id);
		$article->delete();
		return redirect()->to('admin/blog/');
	}
		

	public function frontBlog()
	{
		$articles = Blog::paginate('20');
		return View('front.blog.index',compact('articles'));
	}
	public function singlePost($id)
	{
		$article = Blog::findOrFail($id);
		$ads = ads::orderByRaw("RAND()")->first();
		return View('front.blog.single',compact('article','ads'));
	}
}
