<?php

namespace app\controllers;

use app\core\Controller;
use app\core\Flash;
use app\models\service\ItemService;
use app\models\service\OrdemServicoService;
use app\models\service\Service;

class ItemController extends Controller
{
  private $tabela = "itenpedido";
  private $campo = "id";


  public function salvar()
  {
    $itenpedido = new \stdClass();
    $itenpedido->id = null;
    $itenpedido->id_produto = $_POST["id_produto"];
    $itenpedido->id_pedido = $_POST["id_pedido"];
    $itenpedido->valor = $_POST["valor"];
    $itenpedido->qtde = $_POST["qtde"];
    $itenpedido->subtotal = ($itenpedido->valor * $itenpedido->qtde);


    i($itenpedido);

    Flash::setForm($itenpedido);
    ItemService::salvar($itenpedido, $this->campo, $this->tabela);    
 //   OrdemServicoService::atualizaPedido2($id_pedido);
    ItemService::atualizaPedido($itenpedido->id_pedido);
    $lista = OrdemServicoService::getPedidoFechado($itenpedido->id_pedido);
    echo json_encode($lista);
   
  }
  public function excluir($id_item, $id_pedido)
  {

    Service::excluir($this->tabela, $this->campo, $id_item);
    $lista = OrdemServicoService::getPedidoFechado($id_pedido);
    ItemService::atualizaPedido($id_pedido);
  //  OrdemServicoService::atualizaPedido2($id_pedido);
    echo json_encode($lista);
    
  }
  
}