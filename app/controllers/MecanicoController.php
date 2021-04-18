<?php

namespace app\controllers;

use app\core\Controller;
use app\core\Flash;
use app\models\service\MecanicoService;
use app\models\service\Service;
use app\util\UtilService;

class MecanicoController extends Controller
{

    public function __construct()
    {
        $this->usuario = UtilService::getUsuario();
        if (!$this->usuario) {
            $this->redirect(URL_BASE . "login");
            exit;
        }
    }
    
    private $tabela = "mecanico";
    private $campo = "id";

    public function index()
    {
        $dados["listaMecanico"] = Service::lista($this->tabela);
        $dados["view"] = "mecanico/index";
        $this->load("template", $dados);
    }
    public function novo()
    {
        $dados["mecanico"] = Flash::getForm();
        $dados["view"] = "mecanico/novo";
        $this->load("template", $dados);
    }
    public function salvar()
    {
        $mecanico = new \stdClass();
        $mecanico->id = $_POST["id"];
        $mecanico->nome = $_POST["nome"];

        Flash::setForm($mecanico);
        if (MecanicoService::salvar($mecanico, $this->campo, $this->tabela)) {
            $this->redirect(URL_BASE . "mecanico");
        } else {
            if (!$mecanico->id) {
                $this->redirect(URL_BASE . "mecanico/novo");
            } else {
                $this->redirect(URL_BASE . "editar");
            }
        }
    }
    public function editar($id)
    {
        $mecanico = Service::get($this->tabela, $this->campo, $id);
        if (!$mecanico) {
            $this->redirect(URL_BASE . "mecanico");
        }
        $dados["lista"] = $mecanico;
        $dados["view"] = "mecanico/novo";
        $this->load("template", $dados);
    }
    public function excluir($id)
    {
        Service::excluir($this->tabela, $this->campo, $id);
        $this->redirect(URL_BASE . "mecanico");
    }
    public function pesquisar()
    {
        $valor = $_GET["pesquisa"];
        $campo = "nome";
        $dados["listaMecanico"] = Service::getLike($this->tabela, $campo, $valor, true);
        $dados["view"] = "mecanico/index";
        $this->load("template", $dados);
    }
}
