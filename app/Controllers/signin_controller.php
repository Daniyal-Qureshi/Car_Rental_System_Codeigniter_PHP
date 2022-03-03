<?php namespace App\Controllers;

class signin_controller extends BaseController
{
	public function index()
	{	
		session_start();
		
		if(isset($_SESSION["login"]))
			return redirect()->to('http://localhost/CI/public/CarRental');

		return view('signin');
		
	}

	public function validateData(){
		session_start();
	if($_POST["type"]=="admin"){
			$myfile = fopen("admin.txt", "r") or die("Unable to open file!");
			$str=explode(",",fgets($myfile));
			if($str[0]==$_POST["email"]&&$str[1]==$_POST["password"]){
				$_SESSION["login"]=true;
				return redirect()->to('http://localhost/CI/public/admin_controller');					

			}				

			return redirect()->to('http://localhost/CI/public/CarRental');
		}
		
	
		$Signin=model('App\Models\customer_model',false);
		$user=$Signin->findAll();
		for($i=0;$i<count($user);$i++){
			if($user[$i]["Email"]==$_POST["email"]&&$user[$i]["Password"]==$_POST["password"]){
				$_SESSION["login"]=true;
				$_SESSION["Fullname"]=$user[$i]["Name"];
				$_SESSION["Email"]=$user[$i]["Email"];
				$this->SetStatus();
			}
			
		}
				
			
		return redirect()->to('http://localhost/CI/public/CarRental');	


	
	
	}

	public function SetStatus(){

		
		$_SESSION["car"]=array(
			"Porsche"=>"Available",
			"Range Rover S64 Coupe"=>"Available",
			"Aston Martin"=>"Available",	
			"Ferrari"=>"Available",
			"Rolls Royce"=>"Available"	,
			"Lexus"=>"Available",
			"Toyota"=>"Available",
			"Ford Mustang"=>"Available"	,

		);
		$modelobj =model('App\Models\rent_model',false);

		$array=$modelobj->findAll();
	
		for($i=0;$i<count($array);$i++){
			if (array_key_exists($array[$i]["Name"], $_SESSION["car"])){ 					

					if($array[$i]["Email"]==$_SESSION["Email"])
						$_SESSION["car"][$array[$i]["Name"]]=$array[$i]["Status"];
					else if($array[$i]["Status"]!="Rejected")
					$_SESSION["car"][$array[$i]["Name"]]="Reserved";			
			}		


		}	
				
	}

	//--------------------------------------------------------------------

}
