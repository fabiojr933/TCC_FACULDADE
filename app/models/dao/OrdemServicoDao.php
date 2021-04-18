<?php 
namespace app\models\dao;

use app\core\Model;

class OrdemServicoDao extends Model{
    public function getPrisma(){
        $sql = "SELECT * FROM PRISMA A WHERE A.STATUS <> '2'"; 
        return $this->select($this->db, $sql);
    }
    public function fecharPrisma($id_prisma){
         /**
          * STATUS 1 = PRISMA ABERTO
          * STATUS 2 = PRISMA FECHADO
          */
        $sql = "UPDATE PRISMA P SET P.STATUS = '2' WHERE P.ID =  :ID_PRISMA";
        $qry = $this->db->prepare($sql);
        $qry->bindValue(":ID_PRISMA",$id_prisma);
        $qry->execute();
    }    
    public function getPedidoFechado($id_pedido){
        $sql = "SELECT  p.id as pedido,
                        p.id_cliente as id_cliente,
                        c.nome as cliente,
                        p.data_pedido,
                        p.total_pedido
                        FROM pedido p
                        inner join cliente c on p.id_cliente = c.id
                                              AND p.id = $id_pedido
                                              where p.id = $id_pedido";
         $qry = $this->db->prepare($sql);
         $qry->execute();
         return $qry->fetch(\PDO::FETCH_OBJ);
    }
}