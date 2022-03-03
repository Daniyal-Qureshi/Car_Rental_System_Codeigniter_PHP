<?php namespace App\Controllers;

class recieve extends BaseController
{
	public function index()
	{
	
		$id= $_POST["Id"];
		$password=$_POST["password"];	
		

		$mymodel=model('App\Models\Mymodel',false);
		
		$user=$mymodel->findAll();

		

		if($id==$user[0]["Id"]&&$password==$user[0]["Password"])	
			return view('loginview',['response'=>'Successfull']);
		else
			return view('loginview',['response'=>'Incorrect Id password']);


	}


	//--------------------------------------------------------------------

}
