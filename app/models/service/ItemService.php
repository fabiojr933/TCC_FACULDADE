<?php 
namespace app\models\service;

use app\models\dao\OrdemServicoDao;
use app\models\validacao\ItemValidacao;

class ItemService {
    public static function salvar($item, $campo, $tabela){
        $validacao = ItemValidacao::salvar($item);
        return Service::salvar($item, $campo, $validacao->listaErros(), $tabela);
    }
    public static function getItem($id){
        $dao = new OrdemServicoDao();
        return $dao->getItem($id);
    }
    public static function atualizaPedido($id_pedido)
    {
        $soma = Service::getSoma("itenpedido", "subtotal", "id_pedido", $id_pedido);
        Service::editar(["total_pedido"=>$soma, "id"=>$id_pedido], "id", "pedido");
        
    }
}