<?php namespace App\Http\Controllers;
use App;
class HomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		//$this->middleware('auth');
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		$events = \App\Event::orderBy('whengo', 'desc')->simplePaginate(3);
		return view('home', compact('events'));
	}

	public function about()
	{
		return view('about');
	}

	public function workers()
	{
		$workers = \App\Worker::all();
		return view('workers', compact('workers'));
	}

	public function circles()
	{
		$circles = \App\Circle::all();
		return view('circles', compact('circles'));
	}

	public function schedular()
	{
		$schedular = \App\Schedular::all();
		return view('schedular', compact('schedular'));
	}
}