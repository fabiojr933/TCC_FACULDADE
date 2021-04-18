<?php 
namespace app\models\dao;

use app\core\Model;

class OrdemServicoDao extends Model{
    public function getPrisma(){
        $sql = "SELECT * FROM PRISMA A WHERE A.STATUS <> '2'"; 
        return $this->select($this->db, $sql);
    }
}