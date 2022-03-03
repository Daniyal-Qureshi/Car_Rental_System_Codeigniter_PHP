<?php namespace App\Controllers;

class about_controller extends BaseController
{
	
    public function index()
	{
        session_start();
        if(isset($_SESSION["login"]))
        return view("about");

        else
            return view('signin');
    }

}