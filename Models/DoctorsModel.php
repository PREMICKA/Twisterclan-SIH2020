<?php
namespace App\Models;

use CodeIgniter\Model;

class DoctorsModel extends Model
{
   
    function getDoctors(){
        $builder = $this->db->table("doctors");
        $query = $builder->get();
        if (count($query->getResult()) >= 1) {
            return $query->getResult();
        } else {
            return null;
        }
    }
    
}

