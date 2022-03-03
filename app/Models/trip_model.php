<?php namespace App\Models;

use CodeIgniter\Model;
class trip_model extends Model{
       public $table="trip";
       protected $returnType="array";
       protected $allowedFields=['Email','Address','Destination',"Begin_Date","Return_Date"];

}

?>