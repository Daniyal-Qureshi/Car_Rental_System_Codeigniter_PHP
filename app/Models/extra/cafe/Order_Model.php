<?php namespace App\Models;

use CodeIgniter\Model;
class Order_Model extends Model{
       protected $table="_order";
       protected $returnType="array";
       protected $allowedFields=['Email','product','Price'];


}



?>