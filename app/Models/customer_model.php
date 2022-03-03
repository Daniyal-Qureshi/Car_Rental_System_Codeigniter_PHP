<?php namespace App\Models;

use CodeIgniter\Model;
class customer_model extends Model{
       protected $table="customer";
       protected $primaryKey="Email";
       protected $returnType="array";
       protected $allowedFields=['Email','Password','Name'];

}


?>