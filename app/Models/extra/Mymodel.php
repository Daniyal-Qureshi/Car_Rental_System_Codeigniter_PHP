<?php namespace App\Models;

use CodeIgniter\Model;
class Mymodel extends Model{
       protected $table="login";
       protected $primaryKey="Id";
       protected $returnType="array";
       protected $allowedFields=['password'];
    


}


?>