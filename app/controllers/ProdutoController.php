<?php 
namespace app\controllers;

use app\core\Controller;

class ProdutoController extends Controller{
    public function index(){
        $dados["view"] = "Produto/index";
        $this->load("template",$dados);
    }
    public function novo(){
        $dados["view"] = "Produto/novo";
        $this->load("template", $dados);
    }


}