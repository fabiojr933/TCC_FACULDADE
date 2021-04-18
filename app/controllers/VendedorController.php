<?php

namespace app\controllers;

use app\core\Controller;
use app\core\Flash;
use app\models\service\Service;
use app\models\service\VendedorService;
use app\util\UtilService;
use stdClass;

class VendedorController extends Controller
{
    public function __construct()
    {
        $this->usuario = UtilService::getUsuario();
        if (!$this->usuario) {
            $this->redirect(URL_BASE . "login");
            exit;
        }
    }

    private $tabela = "vendedor";
    private $campo = "id";

    public function index()
    {
        $dados["listaVendedor"] = Service::lista($this->tabela);
        $dados["view"] = "Vendedor/index";
        $this->load("template", $dados);
    }
    public function novo()
    {
        $dados["vendedor"] = Flash::getForm();
        $dados["view"] = "Vendedor/novo";
        $this->load("template", $dados);
        
    }
    public function editar($id)
    {
        $vendedor = Service::get($this->tabela, $this->campo, $id);
        if (!$vendedor) {
            $this->redirect(URL_BASE . "vendedor");
        }
        $dados["lista"] = $vendedor;
        $dados["view"] = "vendedor/novo";
        $this->load("template", $dados);
    }
    public function salvar()
    {
        $vendedor = new \stdClass();
        $vendedor->id = $_POST["id"];
        $vendedor->nome = $_POST["descricao"];

        Flash::setForm($vendedor);
        if (VendedorService::salvar($vendedor, $this->campo, $this->tabela)) {
            $this->redirect(URL_BASE . "vendedor");
        } else {
            if (!$vendedor) {
                $this->redirect(URL_BASE . "vendedor/novo");
            } else {
                $this->redirect(URL_BASE . "editar");
            }
        }
    }
    public function excluir($id){
        Service::excluir($this->tabela, $this->campo, $id);
        $this->redirect(URL_BASE."vendedor");
    }
    public function pesquisar(){
        $valor = $_GET["pesquisa"];
        $campo = "nome";
        $dados["listaVendedor"] = Service::getLike($this->tabela, $campo, $valor, true);
        $dados["view"] = "vendedor/index";
        $this->load("template", $dados);
    }
}
