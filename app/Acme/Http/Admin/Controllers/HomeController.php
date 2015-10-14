<?php
namespace Admin\Controllers;

class HomeController extends Controller {
	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
	}
	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function Home()
	{
		return view('Admin::home');
	}

	public function History()
	{
		return view('Admin::layouts.history');
	}
}