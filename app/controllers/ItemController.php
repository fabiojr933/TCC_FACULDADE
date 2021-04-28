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




    Flash::setForm($itenpedido);
    ItemService::salvar($itenpedido, $this->campo, $this->tabela);
    //   OrdemServicoService::atualizaPedido2($id_pedido);
    ItemService::atualizaPedido($itenpedido->id_pedido);
    $lista = OrdemServicoService::getPedidoFechado($itenpedido->id_pedido);
    echo json_encode($lista);
  }
  public function excluir($id) 
  {
   
    $pedido = ItemService::getItem($id);
    Service::excluir($this->tabela, $this->campo, $id);
    OrdemServicoService::atualizaPedido2($pedido[0]->id_pedido);
    $this->redirect(URL_BASE . "OrdemServico/novo/" . $pedido[0]->id_pedido);
    //  ItemService::atualizaPedido($pedido[0]->id_pedido);    
    //   echo json_encode($lista);

  }
  public function finalizado($id_pedido)
  {
    
    $item = new \stdClass();
    $item->id_pedido = $_POST["pedidoItem"];
    $item->id_pagamento = $_POST["pagamento"];
    $item->valor_bruto = $_POST["valor_bruto"];
    $item->valor_desconto = $_POST["desconto"];
    $item->valor_liquido = $_POST["valor_liquido"];
    $item->valor_informado = $_POST["valor_informado"];
    $item->troco = $_POST["troco"];

    Flash::setForm($item);  
    ItemService::insertPagamento($item->id_pagamento, $item->id_pedido, $item->valor_bruto, $item->valor_desconto, $item->valor_liquido, $item->valor_informado, $item->troco);
    
    $lista = OrdemServicoService::getPedidoFechado2($id_pedido);
 
    Service::editar(["finalizado" => "S", "id" => $id_pedido], "id", "pedido");
    ItemService::finalizarPrisma($lista->id_prisma);
    $this->redirect(URL_BASE . "OrdemServico");
  }
  public function cancelar($id_pedido)
  {
    $lista = OrdemServicoService::getPedidoFechado2($id_pedido);
    $id = Service::excluir("itenpedido", "id_pedido", $id_pedido);
    if ($id) {
      Service::excluir("pedido", "id", $id_pedido);
    }
    ItemService::finalizarPrisma($lista->id_prisma);
    $this->redirect(URL_BASE . "OrdemServico");
  }  
}
