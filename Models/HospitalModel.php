<?php
namespace App\Models;

use CodeIgniter\Model;

class HospitalModel extends Model
{
   
    function getHospitals(){
        $builder = $this->db->table("hospitals");
        $query = $builder->get();
        if (count($query->getResult()) >= 1) {
            return $query->getResult();
        } else {
            return null;
        }
    }
    
}

