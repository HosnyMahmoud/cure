<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Videos;
use Validator;
class VideosCtrl extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		$videos = Videos::all();
		return view('admin.videos.index',compact('videos'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
		return view('admin.videos.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		//
		//dd($request->all());
		$validator = Validator::make($request->all(),[
  				 'name_ar'            	=> 'required',
  				 'name_en'            	=> 'required',
  				 'img'            	=> 'required',
		],Videos::$rules);
		if($validator->fails()){
			return redirect()->back()->withErrors($validator)->withInput();
		}else{
            $video = new Videos();
            if($request->hasFile('videos')){
	            $exte = $request->file('videos')->getClientOriginalExtension();
	            $dest = 'uploads/videos';
	        	$upload = $request->file('videos')->move($dest, time().'.'.$exte);
            	$video->videos = time().'.'.$exte ; 
			}
			if($request->type == 0){

				$validator = Validator::make($request->all(),[
		  				'videos'            	=> 'required',
				],Videos::$rules);
				if($validator->fails()){
					return redirect()->back()->withErrors($validator)->withInput();
				}
			}else{
				$validator = Validator::make($request->all(),[
		  				'link'            	=> 'required',
				],Videos::$rules);
				if($validator->fails()){
					return redirect()->back()->withErrors($validator)->withInput();
				}
			}	
			if($request->hasFile('img')){

                $ext = $request->file('img')->getClientOriginalExtension();
                $dest = 'uploads/videos/img';
                $request->file('img')->move($dest, time().'.'.$ext);
            	$video->img = time().'.'.$ext;
            }
            //dd($request->all());
            $video->name_ar = $request->name_ar; 
            $video->name_en = $request->name_en; 
            $video->link = $request->link;
            $video->type = $request->type;

        	$video->save();
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
		//dd($id);
		$video = Videos::find($id);
		return view('admin.videos.edit',compact('video'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Request $request, $id)
	{
		//
		//dd($request->all());
		$video = Videos::findOrFail($id);
		$validator = Validator::make($request->all(),[
  				'name_ar'            	=> 'required',
  				'name_en'            	=> 'required',
		],Videos::$rules);
		if($validator->fails()){
			return redirect()->back()->withErrors($validator);
		}else{
			if($video->videos !== ''){
				$request->merge(['videos'=>$video->videos]);
			}
			//dd($request->all());
			if($request->type == 0){

				$validator = Validator::make($request->all(),[
		  				'videos'            	=> 'required',
				],Videos::$rules);
				if($validator->fails()){
					return redirect()->back()->withErrors($validator)->withInput();
				}
	            if($request->hasFile('videos')){
	                $ext = $request->file('videos')->getClientOriginalExtension();
	                $dest = 'uploads/videos';
	                if( $ext == 'mp4' ){
	                	$request->file('videos')->move($dest, time().'.'.$ext);
	                }
	            	$video->videos  = time().'.'.$ext ; 
	            }
			}else{
				$validator = Validator::make($request->all(),[
		  				'link'            	=> 'required',
				],Videos::$rules);
				if($validator->fails()){
					return redirect()->back()->withErrors($validator)->withInput();
				}
			}
            if($request->hasFile('img')){
                $exte = $request->file('img')->getClientOriginalExtension();
                $dest = 'uploads/videos/img';
                $request->file('img')->move($dest, time().'.'.$exte);
            	$video->img  = time().'.'.$exte ; 
            }
            $video->name_ar = $request->name_ar; 
            $video->name_en = $request->name_en; 
            $video->link    = $request->link; 
            $video->type    = $request->type;

        	$video->save();
            return back()->with('msg','تم التعديل بنجاح'); 
   		}
	}

	public function front(){
		$videos = Videos::paginate(20);
		return view('front.videos.videos',compact('videos'));
	}
	public function destroy($id)
	{
		//
		$vid = Videos::findOrFail($id);
		$vid->delete();
		return back();
	}

}
