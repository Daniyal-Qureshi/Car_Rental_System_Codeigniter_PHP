<?php namespace App\Controllers;

class cafe extends BaseController
{
	public function index()
	{
		session_start();

	if(isset($_SESSION["login"]))
			return view('index');
	else
		return view('signin');

	}


	//--------------------------------------------------------------------

}
