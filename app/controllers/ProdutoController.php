<?php 
namespace app\controllers;

use app\core\Controller;
use app\core\Flash;
use app\models\service\ProdutoService;
use app\models\service\Service;

class ProdutoController extends Controller{
    private $tabelaCategoria = "categoria";
    private $tabela = "produto";
    private $campo = "id";


    public function index(){
        $dados["view"] = "Produto/index";
        $this->load("template",$dados);
    }
    public function novo(){
        $dados["listaCategoria"] = Service::lista($this->tabelaCategoria);
        $dados["view"] = "Produto/novo";
        $this->load("template", $dados);
    }
    public function salvar(){
        $produto = new \stdClass();
        $produto->id = $_POST["id"];
        $produto->descricao = $_POST["descricao"];
        $produto->referencia = $_POST["referencia"];
        $produto->idcategoria = $_POST["categoria"];
        $produto->data_cadastro = date("Y-m-d");
        $produto->data_vencimento = $_POST["data_vencimento"];
        $produto->preco_custo = $_POST["preco_custo"];
        $produto->preco_venda = $_POST["preco_venda"];
        $produto->lucro = $_POST["lucro"];
        $produto->observacao = $_POST["observacao"];
        $produto->status = $_POST["status"]; 

     

          
        Flash::setForm($produto);
        if(ProdutoService::salvar($produto, $this->campo, $this->tabela)){
            $this->redirect(URL_BASE."produto");
        }else{
            if(!$produto->id){
                $this->redirect(URL_BASE."produto/novo");
            }else{
                $this->redirect(URL_BASE."editar");
            }
        }        
    }
    public function editar($id){
        $produto = Service::get($this->tabela, $this->campo, $id);
            if(!$produto){
                $this->redirect(URL_BASE."produto");
            }
            $dados["lista"] = $produto;
            $dados["view"] = "produto/novo";
            $this->load("template", $dados);
        }
        public function excluir($id){
            Service::excluir($this->tabela, $this->campo, $id);
            $this->redirect(URL_BASE."produto");            
        }
        public function pesquisar(){
            $valor = $_GET["pesquisa"];
            $campo = "nome";
            $dados["listaProduto"] = Service::getLike($this->tabela, $campo, $valor, true);
            $dados["view"] ="produto/index";
            $this->load("template", $dados);
        }

}