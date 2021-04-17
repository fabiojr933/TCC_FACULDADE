<?php 
namespace app\controllers;

use app\core\Controller;
use app\core\Flash;
use app\models\service\CategoriaService;
use app\models\service\LogarService;
use app\models\service\Service;

class CategoriaController extends Controller{

    private $campo = "id";
    private $tabela = "categoria";
   
    public function index(){
        $dados["listaCategoria"] = Service::lista($this->tabela);
        $dados["view"] = "Categoria/index";
        $this->load("template",$dados);
    }
    public function novo(){
        $dados["cliente"] = Flash::getForm();
        $dados["view"] = "Categoria/novo";
        $this->load("template", $dados);
    }
    public function salvar(){
        $categoria = new \stdClass();

        $categoria->id = $_POST["id"];
        $categoria->descricao = $_POST["descricao"];

        Flash::setForm($categoria);
        if(CategoriaService::salvar($categoria, $this->campo, $this->tabela)){
            $this->redirect(URL_BASE."categoria");
        }else{
            if(!$categoria){
                $this->redirect(URL_BASE."categoria/novo");
            }else{
                $this->redirect(URL_BASE."editar");
            }
        }
    }
    public function editar($id){
        $categoria = Service::get($this->tabela, $this->campo, $id);
            if(!$categoria){
                $this->redirect(URL_BASE."categoria");
            }
            $dados["lista"] = $categoria;
            $dados["view"] = "categoria/novo";
            $this->load("template", $dados);
     }
    public function excluir($id){
        Service::excluir($this->tabela, $this->campo, $id);
        $this->redirect(URL_BASE."categoria");        
    }
    public function pesquisar(){
        $valor = $_GET["pesquisa"];
        $campo = "descricao";
        $dados["listaCategoria"] = Service::getLike($this->tabela, $campo, $valor, true);
        $dados["view"] ="categoria/index";
        $this->load("template", $dados);
    }
}