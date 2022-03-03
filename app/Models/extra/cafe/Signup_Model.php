<?php namespace App\Models;

use CodeIgniter\Model;
class Signup_Model extends Model{
       protected $table="customer";
       protected $primaryKey="Email";
       protected $returnType="array";
       protected $allowedFields=['Email','Password','Name'];


}



?>