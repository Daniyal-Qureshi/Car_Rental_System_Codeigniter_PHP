<?php 

namespace App\Models;
use CodeIgniter\Model;


/**
 * 
 */
class LoginFormModel extends Model
{
	
protected $table= 'login';
protected $primaryKey='Id';
protected $returnType='array';
protected $allowedFields=['name','password'];



function check(){

	
}

}



 ?>