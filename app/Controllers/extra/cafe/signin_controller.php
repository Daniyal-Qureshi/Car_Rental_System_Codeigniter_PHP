<?php namespace App\Controllers;

class signin_controller extends BaseController
{
	public function index()
	{	
		session_start();
		
		if(isset($_SESSION["login"]))
			return redirect()->to('http://localhost/CI/public/cafe');

		return view('signin');
		
	}

	public function validateData(){
		session_start();
	
		$Signin=model('App\Models\Signup_Model',false);
		$user=$Signin->findAll();
		for($i=0;$i<count($user);$i++){
		if($user[$i]["Email"]==$_POST["email"]&&$user[$i]["Password"]==$_POST["password"]){
			$_SESSION["login"]=true;
			$_SESSION["Fullname"]=$user[$i]["Name"];
			$_SESSION["Email"]=$user[$i]["Email"];
		}
			
			
		}

		return redirect()->to('http://localhost/CI/public/cafe');	
	
	}

	//--------------------------------------------------------------------

}
