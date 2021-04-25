<?php
namespace app\models\service;
use app\models\validacao;
use app\models\validacao\CategoriaValidacao;

class GraficoService{
    public static function gerar($valores){
        $d1 = new \DateTime($valores->data01);
        $d2 = new \DateTime($valores->data02);

        $listaPedidos = array();
        $totalDias = diferenciaDataEmDias($d1, $d2);
        for($i = 0; $i <= $totalDias; $i++){
            $novaData = somarDataMysql($valores->data01,0,0,$i);
            $dias[] = date("d/m", strtotime($novaData));
            $listaPedidos[$novaData] = 0;        
        }
       $pedido = OrdemServicoService::somaPorData($valores->data01, $valores->data02);
       foreach($pedido as $ped){
            $listaPedidos[$ped->data] = $ped->total;
       }
      return (object) ["dias"=>$dias, "pedidos"=>$listaPedidos];
    } 
}