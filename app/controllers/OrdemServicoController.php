<?php
namespace app\controllers;
use app\core\Controller;
class OrdemServicoController extends Controller{  
    
   public function index(){       
       $dados["view"] = "OrdemServico/index";
	   $this->load("template", $dados); 
   } 
   public function novo(){
    $dados["view"] = "OrdemServico/novo";
    $this->load("template", $dados);
   }
  
}
