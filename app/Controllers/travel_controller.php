<?php namespace App\Controllers;

class travel_controller extends BaseController
{
	public function index()
	{
        session_start();
        $modelobj=model('App\Models\trip_model',false);
        $data = [
            'Email' =>$_SESSION["Email"],
            'Address'=>$_POST["Address"],
            'Destination' => $_POST["Destination"],
            'Begin_Date'=>$_POST["Date"],
            "Return_Date"=>$_POST["Returndate"],
            
        ];
        
    $modelobj->insert($data);
     return redirect()->to('http://localhost/CI/public/CarRental');	
   


    }

   

}