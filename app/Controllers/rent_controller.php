<?php namespace App\Controllers;
use PHPMailer\PHPMailer\PHPMailer;
class rent_controller extends BaseController
{
	public function rent()
	{
        session_start();
        $modelobj=model('App\Models\trip_model',false);
        if(!$modelobj->where("Email",$_SESSION["Email"])->findall()){
            
         return redirect()->to('http://localhost/CI/public/CarRental?value=null');	
        
        }
        
            
        $modelobj=model('App\Models\rent_model',false);
        $data = [
            'Email' =>$_SESSION["Email"],
            'Name'=>$_GET["Name"],
            'Status' => $_GET["Status"],
            'Price'=>$_GET["Price"],
            "Image"=>$_GET["Image"],
            "Date"=>date("d-m-Y")
        ];
        
        $_SESSION["car"][$_GET["Name"]]="Wait for Approval";         
        $modelobj->insert($data);
        $this->send("You Applied for Car Rent","Thanks for choosing Dany's Car Rent Service ,your request is in pending we will let you know in at least one week",$_SESSION["Email"]);
        return redirect()->to('http://localhost/CI/public/car_controller');	
   
    }
    public function index(){
    //     session_start();
    //     $modelobj=model('App\Models\Order_Model',false);
    //     $_SESSION["data"] = $modelobj->where('Email' ,$_SESSION["Email"] )->findall();
    //     return view("order");     
    // }
    
    }

    public function send($subject,$body,$email){

    if($email!="daniyalqureshi268@gmail.com"&&$email!="talha.sibau@gmail.com")
        return;

        $name ='Daniyal Qureshi';
        require_once "PHPMailer/PHPMailer.php";
        require_once "PHPMailer/SMTP.php";
        require_once "PHPMailer/Exception.php";

        $mail = new PHPMailer();

        //SMTP Settings
        $mail->isSMTP();
        $mail->Host = "smtp.gmail.com";
        $mail->SMTPAuth = true;
        $mail->Username = "daniyalqureshi.cs@gmail.com"; //enter you email address
        $mail->Password = 'F#D$12&30'; //enter you email password
        $mail->Port = 465;
        $mail->SMTPSecure = "ssl";

        //Email Settings
        $mail->isHTML(true);
        $mail->setFrom($email, $name);
        $mail->addAddress($email); //enter you email address
        $mail->Subject =$subject;
        $mail->Body = $body;

        if ($mail->send()) {
            $status = "success";
            $response = "Email is sent!";
        } else {
            $status = "failed";
            $response = "Something is wrong: <br><br>" . $mail->ErrorInfo;
        }

        
    
    }







    

}
