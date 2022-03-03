<?php namespace App\Controllers;

class car_controller extends BaseController
{
	public function index()
	{
        session_start();
        if(isset($_SESSION["login"]))
        return view("cars");

        else
        return view('signin');
    }
  

}