<?php

namespace App\Http\Controllers;

use App\Feature;
use App\Http\Requests;
use Illuminate\Http\Request;

class VoteController extends Controller
{
	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('auth');
	}

	/**
	 * Show the application dashboard.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		return view('index', [
			'features' => Feature::all()
		]);
	}

	public function vote(Request $request)
	{
		Feature::find($request->input('feature_id'))->vote();
		return back();
	}

	public function unvote(Request $request)
	{
		Feature::find($request->input('feature_id'))->unvote();
		return back();
	}
}
