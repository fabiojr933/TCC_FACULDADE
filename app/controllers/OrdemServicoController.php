<?php

namespace app\controllers;

use app\core\Controller;
use app\core\Flash;
use app\models\dao\OrdemServicoDao;
use app\models\service\OrdemServicoService;
use app\models\service\Service;
use app\util\UtilService;

class OrdemServicoController extends Controller
{

   private $tabelaVendedor = "vendedor";
   private $tabelaMecanico = "mecanico";
   private $tabela = "pedido";
   private $tabelaItemPedido = "itenpedido";
   private $campo = "id";

   public function __construct()
   {
      $this->usuario = UtilService::getUsuario();
      if (!$this->usuario) {
         $this->redirect(URL_BASE . "login");
         exit;
      }
   }

   public function index()
   {
      $dados["prisma"] = Service::lista("prisma");
      $prisma =  new OrdemServicoService(); 
      $dados["listaOs"] = $prisma->getPedidoPrisma();  
      $dados["listaTop"] = $prisma->getLimit();  
      $dados["view"] = "OrdemServico/index";
      $this->load("template", $dados);
   }
   public function novo($id_pedido)
   {  
      $pedido = OrdemServicoService::getPedidoFechado($id_pedido);
      $pedido2 = new OrdemServicoService();
      $dados["pedido"] = Flash::getForm();     
      $dados["pedido2"] = $pedido2->getPedidoFechado2($id_pedido);  
      $dados["lista"] = $pedido;   
      $dados["pagamento"] = Service::lista("pagamento");
      $dados["view"] = "OrdemServico/novo";
      $this->load("template", $dados);
   }
   public function abertura($id_prisma)
   {
      $dados["listaPrisma"] = OrdemServicoService::getPrisma2($id_prisma);
      $dados["listaVendedor"] = Service::lista($this->tabelaVendedor);
      $dados["listaMecanico"] = Service::lista($this->tabelaMecanico);
      $dados["view"] = "OrdemServico/abertura";
      $this->load("template", $dados);
   }
   public function buscarObjeto($obj)
   {
      $lista = Service::getLike("objeto", "descricao", $obj, true);
      echo json_encode($lista);
   }
   public function salvar()
   {
      $pedido = new \stdClass();
      $pedido->id = $_POST["id"];
      $pedido->id_prisma = $_POST["prisma"];
      $pedido->id_cliente = $_POST["id_cliente"];
      $pedido->id_objeto = $_POST["id_objeto2"];
      $pedido->placa = $_POST["placa"];
      $pedido->km = $_POST["km"];
      $pedido->id_pagamento = $_POST["pagamento"];
      $pedido->telefone = $_POST["telefone"];
      $pedido->id_vendedor = $_POST["vendedor"];
      $pedido->id_mecanico = $_POST["mecanico"];
      $pedido->pertence_deixado = $_POST["pertence_deixado"];
      $pedido->defeito_apresentado = $_POST["defeito_apresentado"];
      $pedido->data_pedido = date("Y-m-d");
      $pedido->data_previsao = $_POST["data_previsao"];

      Flash::setForm($pedido);

      // i($pedido);
      OrdemServicoService::salvar($pedido, $this->campo, $this->tabela);
      if (!$pedido->id) {
         /**
          * STATUS 1 = PRISMA ABERTO
          * STATUS 2 = PRISMA FECHADO
          */
         $prisma = new OrdemServicoDao();
         $prisma->fecharPrisma($pedido->id_prisma);
         $ultimoPedido = Service::getMaximo($this->tabela, "id");        
         $this->redirect(URL_BASE . "OrdemServico/novo/".$ultimoPedido);
         
        
      } else {
         $this->redirect(URL_BASE . "OrdemServico/abertura");
      }
   }      
}
