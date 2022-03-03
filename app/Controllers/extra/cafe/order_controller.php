<?php namespace App\Controllers;

class order_controller extends BaseController
{
	public function addtocart()
	{
        session_start();
        $modelobj=model('App\Models\Order_Model',false);
        $data = [
            'Email' =>$_SESSION["Email"],
            'product'=>$_GET["name"],
            'Price' => $_GET["price"]
        ];
                 
	    $modelobj->insert($data);
        
        
    }
    public function index(){
        session_start();
        $modelobj=model('App\Models\Order_Model',false);
        $_SESSION["data"] = $modelobj->where('Email' ,$_SESSION["Email"] )->findall();
        return view("order");     
    }
    


}
