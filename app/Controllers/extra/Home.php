<?php namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{

		$LoginForm=model('App\Models\LoginFormModel', false);
		$users= $LoginForm->findAll();
			if ($users[0]['uname']==$_POST['Id'] && $users[0]['Password']==$_POST['password']) 
				echo("Successful");
			else
				echo($users[0]['name']."   ".$_POST['Id']);

		
	}

	//--------------------------------------------------------------------
public function login()
	{
	return view('login_page');		
    }

}
