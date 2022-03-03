<?php namespace App\Controllers;

class service_controller extends BaseController
{

    public function index()
	{
        session_start();
        if(isset($_SESSION["login"]))
        return view("services");

        else
        return view('signin');
    }
   
}