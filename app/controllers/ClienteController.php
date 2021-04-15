<?php
namespace app\controllers;

use app\core\Controller;
use app\core\Flash;
use app\models\service\ClienteService;
use app\models\service\Service;

class ClienteController extends Controller{
    private $campo = "id";
    private $tabela = "cliente";

    public function index(){
        $dados["listaCliente"] = Service::lista($this->tabela);
        $dados["view"] = "Cliente/index";
        $this->load("template", $dados);
    }
    public function novo(){
        $dados["cliente"] =Flash::getForm();
        $dados["view"] = "Cliente/novo";
        $this->load("template", $dados);
    }
    public function salvar(){
        $cliente = new \stdClass();
        $cliente->id = $_POST["id"];
        $cliente->nome = $_POST["nome"];
        $cliente->endereco = $_POST["endereco"];
        $cliente->bairro = $_POST["bairro"];
        $cliente->cidade = $_POST["cidade"];
        $cliente->telefone = $_POST["telefone"];
        $cliente->cep = $_POST["cep"];
        $cliente->logradouro = $_POST["logradouro"];
        $cliente->foto =  $_FILES["foto"];      

        $arquivo = $_FILES["foto"]["tmp_name"];
        $tamanho = $_FILES["foto"]["size"];
        $tipo = $_FILES["foto"]["type"];
        $nome = $_FILES["foto"]["name"];

        if ( $arquivo != "none" )
        {
            $fp = fopen($arquivo, "rb");
            $conteudo = fread($fp, $tamanho);
            $conteudo = addslashes($conteudo);
            fclose($fp);
            $cliente->foto = $conteudo;
        }

        
                

        Flash::setForm($cliente);
        if(ClienteService::salvar($cliente, $this->campo, $this->tabela)){
            $this->redirect(URL_BASE."Cliente");
        }else{
            if(!$cliente->id){
                $this->redirect(URL_BASE."Cliente/novo");
            }else{
                $this->redirect(URL_BASE."editar");
            }
        }        
    }
    public function editar($id){
        $cliente = Service::get($this->tabela, $this->campo, $id);
            if(!$cliente){
                $this->redirect(URL_BASE."Cliente");
            }
            $dados["lista"] = $cliente;
            $dados["view"] = "Cliente/novo";
            $this->load("template", $dados);
        }
        public function excluir($id){
            Service::excluir($this->tabela, $this->campo, $id);
            $this->redirect(URL_BASE."cliente");            
        }
    }
