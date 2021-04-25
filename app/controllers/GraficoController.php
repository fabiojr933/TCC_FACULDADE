<?php

namespace app\controllers;

use app\core\Controller;
use app\models\service\GraficoService;
use app\models\service\ItemService;
use app\models\service\OrdemServicoService;
use app\models\service\Service;
use app\util\UtilService;


class GraficoController extends Controller
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
     //   $dados["Rel_cliente"] = OrdemServicoService::todoClientes(); 
        $dados["view"] = "grafico/index";
        $this->load("template", $dados);
    }
    public function gerarGrafico(){
        $valores = new \stdClass();
        $valores->data01 = $_GET["data01"];
        $valores->data02 = $_GET["data02"];
        $valores->tipo = $_GET["tipo"];

        $resultado = GraficoService::gerar($valores);
        $dados["dias"] = $resultado->dias;
        $dados["valores"] = $resultado->pedidos;
        $dados["tipo"] = $valores->tipo;
        $dados["view"] = "grafico/grafico";
        $this->load("template", $dados);
    }
  
}
