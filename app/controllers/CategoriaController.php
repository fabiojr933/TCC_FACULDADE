<?php 
namespace app\controllers;

use app\core\Controller;

class CategoriaController extends Controller{
    public function index(){
        $dados["view"] = "Categoria/index";
        $this->load("template",$dados);
    }
    public function novo(){
        $dados["view"] = "Categoria/novo";
        $this->load("template", $dados);
    }


}