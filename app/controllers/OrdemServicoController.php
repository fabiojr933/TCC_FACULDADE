<?php

namespace app\controllers;

use app\core\Controller;
use app\models\service\Service;
use app\util\UtilService;

class OrdemServicoController extends Controller
{

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
      $dados["view"] = "OrdemServico/index";
      $this->load("template", $dados);
   }
   public function novo()
   {
      $dados["view"] = "OrdemServico/novo";
      $this->load("template", $dados);
   }
   public function abertura()
   {
      $dados["view"] = "OrdemServico/abertura";
      $this->load("template", $dados);
   }
   public function buscarObjeto($obj){
      $lista = Service::getLike("objeto", "descricao", $obj, true);
      echo json_encode($lista);
   }
}
