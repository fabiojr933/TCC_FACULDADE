<?php
namespace app\controllers;

use app\core\Controller;
use app\core\Flash;
use app\models\service\ObjetoService;
use app\models\service\Service;
use app\util\UtilService;

class ObjetoController extends Controller{

    public function __construct()
    {
        $this->usuario = UtilService::getUsuario();
        if (!$this->usuario) {
            $this->redirect(URL_BASE . "login");
            exit;
        }
    }
    
    private $tabela = "objeto";
    private $campo = "id";

    public function index(){
        $dados["listaObjeto"] = Service::lista($this->tabela);
        $dados["view"] = "objeto/index";
        $this->load("template", $dados);
    }
    public function novo(){
        $dados["objeto"] = Flash::getForm();
        $dados["view"] = "objeto/novo";
        $this->load("template", $dados);
    }
    public function salvar(){
        $objeto = new \stdClass();
        $objeto->id = $_POST["id"];
        $objeto->descricao = $_POST["descricao"];
        $objeto->placa = $_POST["placa"];
        $objeto->ano = $_POST["ano"];
        $objeto->modelo = $_POST["modelo"];
        $objeto->observacao = $_POST["observacao"];

        Flash::setForm($objeto);
        if(ObjetoService::salvar($objeto, $this->campo, $this->tabela)){
            $this->redirect(URL_BASE."objeto");
        }else{
            if(!$objeto->id){
                $this->redirect(URL_BASE."objeto/novo");
            }else{
                $this->redirect(URL_BASE."objeto");
            }
        }
    }
    public function editar($id){
        $objeto = Service::get($this->tabela, $this->campo, $id);
        if(!$objeto){
            $this->redirect(URL_BASE."objeto");
        }
        $dados["lista"] = $objeto;
        $dados["view"] = "objeto/novo";
        $this->load("template", $dados);
    }
    public function excluir($id){
        Service::excluir($this->tabela, $this->campo, $id);
        $this->redirect(URL_BASE."objeto");
    }
    public function pesquisar(){
        $valor = $_GET["pesquisa"];
        $campo = "descricao";
        $dados["listaObjeto"] = Service::getLike($this->tabela, $campo, $valor, true);
        $dados["view"] = "objeto/index";
        $this->load("template", $dados);
    }
}