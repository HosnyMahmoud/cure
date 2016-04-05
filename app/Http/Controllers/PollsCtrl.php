<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Polls;
use Illuminate\Http\Request;
use Auth;
use Validator;
use Carbon\Carbon ;
use App\PollsAnswers;
class PollsCtrl extends Controller {

	

	public function index()
	{
		//
		
		$polls = Polls::all();
		return view('admin.polls.index',compact('polls'));


	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
		return view('admin.polls.create');

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
			'name_ar'=>'required',
			'name_en'=>'required',
			'from'=>'required',
			'to'=>'required',
			],Polls::$rules);
		if ($validator->fails()) {
			return redirect()->back()->withErrors($validator)->withInput();
		}else{
			$request->merge(['choose_en'=>implode('|',$request->choose_en)]);	
			$request->merge(['choose_ar'=>implode('|',$request->choose_ar)]);	
			//dd($request->all());
			Polls::create($request->all());
			return redirect()->to('admin/polls');
		}
	}


	public function front(Request $request)
	{
		//

		//dd($request->all());
		$choose = $request->choose;
		$polls_answers = PollsAnswers::create($request->all());
		$polls = PollsAnswers::where('poll_id',$polls_answers->poll_id)->where('choose',$request->choose)->get();
		$polls_count = PollsAnswers::where('poll_id',$polls_answers->poll_id)->get();
		$percent = (count($polls)/count($polls_count))*100;

		//dd($persent);
		return view('front.polls.result',compact('percent','choose'));
	}


	public function edit($id)
	{
		//
			$polls = Polls::find($id);
			$c = explode('|',$polls->choose_ar);
			$p = explode('|',$polls->choose_en);
			return view('admin.polls.edit',compact('polls','c','p'));

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
		$validator = Validator::make($request->all(),[
			'name_ar'=>'required',
			'name_en'=>'required',
			'from'=>'required',
			'to'=>'required',
			],Polls::$rules);
		if ($validator->fails()) {
			return redirect()->back()->withErrors($validator);
		}else{
			$request->merge(['choose_ar'=>implode('|',$request->choose_ar)]);
			$request->merge(['choose_en'=>implode('|',$request->choose_en)]);
			$polls = Polls::findOrFail($id);
			$polls ->update($request->all());
			return redirect()->to('admin/polls');
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

			$polls = Polls::findOrFail($id);
			$polls->delete();
			//$answers = PollsAnswers::where('poll_id',$id)->delete();
			return redirect()->back();
	}

}
