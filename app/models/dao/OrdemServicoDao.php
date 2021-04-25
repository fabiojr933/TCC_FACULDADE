<?php 
namespace app\models\dao;

use app\core\Model;
use app\models\service\Service;

class OrdemServicoDao extends Model{
    public function getPrisma(){
        $sql = "SELECT * FROM PRISMA A WHERE A.STATUS <> '2'"; 
        return $this->select($this->db, $sql);
    }
    public function getPrisma2($id){
        $sql = "SELECT * FROM PRISMA A WHERE A.ID = $id"; 
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
    public function getPedidoFechado2($id_pedido){
          $sql = "SELECT  p.id as pedido,
                              P.id_prisma, 
                              p.id_pagamento, 
                              p.id_cliente as id_cliente,
                              c.nome as cliente,
                              p.data_pedido,
                              p.total_pedido
                              FROM pedido p
                              inner join cliente c on p.id_cliente = c.id                                                   
                                                    where p.id = $id_pedido";      
            
        $qry = $this->db->prepare($sql);
        $qry->execute();
        return $qry->fetch(\PDO::FETCH_OBJ);
    }          
    public function getPedidoFechado($id_pedido){
  /*      $sql = "SELECT  p.id as pedido,
                        p.id_cliente as id_cliente,
                        c.nome as cliente,
                        p.data_pedido,
                        p.total_pedido
                        FROM pedido p
                        inner join cliente c on p.id_cliente = c.id
                                              AND p.id = $id_pedido
                                              where p.id = $id_pedido"; */

        $sql = "SELECT  p.id as pedido,
                p.id_cliente,
                e.id as id_item,
                a.nome as cliente,
                b.id as id_produto,
                b.descricao as produto,
                p.data_pedido,
                p.total_pedido,
                e.VALOR as valor_item,
                e.subtotal,
                e.QTDE as qtde_item
                
                FROM pedido p      
                inner join itenpedido e on p.id = e.ID_PEDIDO      
                inner join cliente a on p.id_cliente = a.id
                inner join produto b on e.ID_PRODUTO = b.id
                WHERE p.id = $id_pedido";
         $qry = $this->db->prepare($sql);
         $qry->execute();
         return $qry->fetchAll(\PDO::FETCH_OBJ);
    }
    public function getPedidoPrisma(){
        $sql = "SELECT a.id as id_prisma,
        c.id as id_cliente,
        a.status,
        b.data_pedido,
        c.endereco,
        c.nome as nome_cliente,
        b.id as id_pedido,
        b.total_pedido 
        FROM prisma A
        LEFT join pedido b on a.id = b.id_prisma
        LEFT join cliente c on b.id_cliente = c.id       
        order by a.id asc";       
        $qry = $this->db->prepare($sql);
        $qry->execute();
        return $qry->fetchAll(\PDO::FETCH_OBJ);
    }
    public function getLimit(){
        $sql = "select 
                a.id as id_pedido,
                a.data_pedido,
                b.id as id_cliente,
                b.nome as nome_cliente,
                a.total_pedido
                from pedido A
                join cliente b on a.id_cliente = b.id
                LIMIT 3";
                return $this->select($this->db, $sql);
    }   
    public function inserirItemPedido($id_pedido, $id_produto, $valor, $qtde, $subtotal){
        $sql = "INSERT INTO ITENPEDIDO SET
                    ID_PEDIDO = :ID_PEDIDO,
                    ID_PRODUTO = :ID_PRODUTO,
                    VALOR = :VALOR,
                    QTDE = :QTDE
                    SUBTOTAL = :SUBTOTAL";
        $qry = $this->db->prepare($sql);
        $qry->bindValue(":ID_PEDIDO", $id_pedido);
        $qry->bindValue(":ID_PRODUTO", $id_produto);
        $qry->bindValue(":VALOR", $valor);
        $qry->bindValue(":QTDE", $qtde);
        $qry->bindValue(":SUBTOTAL", $subtotal);
        $qry->execute();
        return $this->db->lastInsertId(); 
    }
    public function getItem($id){
        $sql = "SELECT a.id_pedido
        FROM itenpedido a
        where a.id = $id";
        $qry = $this->db->prepare($sql);
        $qry->execute();
        return $qry->fetchAll(\PDO::FETCH_OBJ);
    }
    public function atualizaPedido2($id_pedido){
        $sql = "update pedido ped
            set ped.total_pedido = (select SUM(ite.subtotal)
            from itenpedido ite
            where ite.id_pedido = $id_pedido) 
            where ped.id = $id_pedido";
        $qry = $this->db->prepare($sql);
        $qry->execute();
        return $this->db->lastInsertId(); 
    }   
    public function finalizarPrisma($id_prisma){
        $sql = "UPDATE PRISMA A SET A.STATUS = '1' WHERE A.ID = $id_prisma";
        $qry = $this->db->prepare($sql);
        $qry->execute();
        return $this->db->lastInsertId(); 
    }
    public function todoPedido(){
        $sql = "SELECT b.nome as cliente,
                a.id as pedido,	
                a.finalizado,
                a.data_pedido as data,
                a.total_pedido
                FROM pedido A
                join cliente b on a.id_cliente = b.id
                GROUP by 2";
        $qry = $this->db->prepare($sql);
        $qry->execute();
        return $qry->fetchAll(\PDO::FETCH_OBJ);
    }
    public function filtro($filtro){
        $sql = "SELECT b.nome as cliente,
                a.id as pedido,	
                a.finalizado,
                a.data_pedido as data,
                a.total_pedido
                FROM pedido A
                join cliente b on a.id_cliente = b.id";
        if($filtro->data01){
            if($filtro->data02){
                $sql .=" where data_pedido BETWEEN '$filtro->data01' and '$filtro->data02' GROUP by 2";
            }else{
                $sql .=" where data_pedido = '$filtro->data01' GROUP by 2";
            }
        }
        return $this->select($this->db, $sql, true);
    }
    public function todoClientes(){
        $sql = "SELECT b.id, b.nome from cliente b";
        return $this->select($this->db, $sql);
    }
    public function getPedidoPrismaRelatorio($data1, $data2){
        $sql = "SELECT a.id as id_prisma,
        c.id as id_cliente,
        a.status,
        b.data_pedido,
        c.endereco,
        c.nome as nome_cliente,
        b.id as id_pedido,
        b.total_pedido 
        FROM prisma A
        LEFT join pedido b on a.id = b.id_prisma
        LEFT join cliente c on b.id_cliente = c.id 
        where b.data_pedido between '$data1' and '$data2'";       
        $qry = $this->db->prepare($sql);
        $qry->execute();
        return $qry->fetchAll(\PDO::FETCH_OBJ);
    }
    public function somaPorData($data01, $data02){
        $sql = "SELECT A.data_pedido AS data, SUM(A.total_pedido) as total 
                            FROM pedido A 
                            WHERE A.FINALIZADO = 'S'
                            AND  a.data_pedido BETWEEN '$data01' AND '$data02'
                            GROUP BY A.data_pedido";
          $qry = $this->db->prepare($sql);
          $qry->execute();
          return $qry->fetchAll(\PDO::FETCH_OBJ);
        
    }
}