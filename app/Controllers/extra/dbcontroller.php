<?php namespace App\Controllers;

class recieve extends BaseController
{
	public function index()
	{
	
		$id= $_POST["Id"];
		$password=$_POST["password"];	
		

		$mymodel=model('App\Models\Mymodel',false);
		
		$user=$mymodel->findAll();

		return view('myview',['user'=>$user]);
		


	}


	//--------------------------------------------------------------------

}
