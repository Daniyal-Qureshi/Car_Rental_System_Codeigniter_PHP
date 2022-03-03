<?php namespace App\Controllers;

class signup_controller extends BaseController
{
	public function index()
	{
		session_start();
		if(isset($_SESSION["login"]))
			return redirect()->to('http://localhost/CI/public/cafe');
		
		return view('signup');
		
	}
	public function save(){

		$modelobj=model('App\Models\Signup_Model',false);
		
		$data = [
            'Email' => $_POST["email"],
            'Password'=> $_POST["password"],
            'Name' => $_POST["Fullname"]
        ];

		$modelobj->insert($data);
		return redirect()->to('http://localhost/CI/public/cafe');



	}

	//--------------------------------------------------------------------

}
