<?php namespace App\Models;

use CodeIgniter\Model;
class rent_model extends Model{
       public $table="rent";
       protected $returnType="array";
       protected $allowedFields=['Email','Name','Status',"Price","Image","Date"];

}

?>