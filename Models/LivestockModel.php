<?php
namespace App\Models;

use CodeIgniter\Model;

class LivestockModel extends Model
{
    function getLivestocks(){
        $builder = $this->db->table("livestock");
        $query = $builder->get();
        if (count($query->getResult()) >= 1) {
            return $query->getResult();
        } else {
            return null;
        }
    }
    
    function getLivestock($id){
        $builder = $this->db->table("livestock");
        $query = $builder->where("id",$id)->get();
        if (count($query->getResult()) == 1) {
            return $query->getResult();
        } else {
            return null;
        }
    }
    
}

