<?php namespace App\Controllers;

class logout_controller extends BaseController
{
	public function index()
	{
        session_start();
        session_unset();
        session_destroy();
		return view('signin');
		
	}
}