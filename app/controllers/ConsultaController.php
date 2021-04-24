<?php

namespace app\controllers;

use app\core\Controller;
use app\core\Flash;
use app\models\service\CategoriaService;
use app\models\service\ItemService;
use app\models\service\LogarService;
use app\models\service\OrdemServicoService;
use app\models\service\Service;
use app\util\UtilService;

class ConsultaController extends Controller
{

    public function __construct()
    {
        $this->usuario = UtilService::getUsuario();
        if (!$this->usuario) {
            $this->redirect(URL_BASE . "login");
            exit;
        }       
    }

    private $campo = "id";
    private $tabela = "categoria";

    public function index()
    {
        $dados["listaPedido"] = OrdemServicoService::todoPedido();
        $dados["view"] = "Consulta/index";
        $this->load("template", $dados);
    }
    public function filtro(){
        $filtro = new \stdClass();
        $filtro->data01 = $_GET["data01"];
        $filtro->data02 = $_GET["data02"];
        $dados["listaPedido"] = OrdemServicoService::filtro($filtro);
        $dados["view"] = "Consulta/index";
        $this->load("template", $dados);
    }
   
}
