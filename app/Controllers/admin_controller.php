<?php namespace App\Controllers;
use PHPMailer\PHPMailer\PHPMailer;
class admin_controller extends BaseController
{
	public function index()
    {
       session_start();

        
       $modelobj=model('App\Models\rent_model',false);        
    
        $_SESSION["data"]=$modelobj->findall();
        
        $modelobj=model('App\Models\customer_model',false);        
    
        $data=$modelobj->findall();
        
        $_SESSION['Email']=array();
        for($i=0;$i<count($data);$i++)  
        $_SESSION['Email'][$data[$i]['Email']]=$data[$i]["Name"];

        
        $this->history();
        
        return view('admin');
        

    }
    public function history(){
        $modelobj=model('App\Models\trip_model',false);
        $history=$modelobj->findall();
        $Email=array();
        for($i=0;$i<count($history);$i++)
            $Email[]=$history[$i]["Email"];
    
    
        for($i=0;$i<count($_SESSION['data']);$i++)       
           {
               $value=$_SESSION["data"][$i]["Email"];
               if(in_array( $value,$Email))
                 {   
                    $index=array_search($value,$Email,true);
                    $_SESSION["data"][$i]["Address"]=$history[$index]["Address"];
                    $_SESSION["data"][$i]["Destination"]=$history[$index]["Destination"];
                    $_SESSION["data"][$i]["Begin_Date"]=$history[$index]["Begin_Date"];
                    $_SESSION["data"][$i]["Return_Date"]=$history[$index]["Return_Date"];
                    
                 }
            }
    
    }
    




    public function update(){
    session_start();
        
     $modelobj=model('App\Models\rent_model',false);   
        $modelobj->where("Email", $_GET["Email"]);
        
        if($_GET["n"]==1){
            $modelobj->set('Status',"Approval");
            $this->send("Congratulations","Your Application for applying  car at Dany's Car Rent Service has been approved",$_GET["Email"]);
        }
        else{
            $modelobj->set('Status',"Rejected");
            $this->send("Application status","Your Application for applying  car at Dany's Car Rent Service has been rejected",$_GET["Email"]);
  
        }
        $where=[

             'Email'=>$_GET["Email"],
             'Name'=>$_GET["Name"]
         ];
         $modelobj->where($where);
        
         $modelobj->update();
         return redirect()->to('http://localhost/CI/public/admin_controller');					
 

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