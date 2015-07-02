<?php namespace App\Http\Controllers;

use Request;
use App;
use View;
use Redirect;

class WelcomeController extends Controller {

	public function __construct()
	{
		$this->middleware('guest');
	}

	public function index()
	{
		return view('welcome');
	}

	public function shorten()
	{
		$randomize = substr(str_shuffle(str_repeat("abcdefghijklmnopqrstuvwxyz0123456789", 5)), 0, 5);
		$input = Request::input('url');
		$url = App\Url::where('url', $input)->first();

		if(!$url) {
			$new_url = new App\Url;
			$new_url->url = $input;
			$new_url->short = $randomize;
			$new_url->save();
			View::share('shortend',$new_url);
		} else {
			View::share('shortend',$url);
		};

		return view('shortend');
	}

	public function redirect($short)
	{
		$redirect = App\Url::where('short',$short)->first();
		if($redirect) {
			return redirect($redirect->url);
		} else {
			return view('404');
		};
	}

}
