<?php
namespace app\models\validacao;

use app\core\Validacao;

class MecanicoValidacao{
    public static function salvar($mecanico){
        $validacao = new Validacao($mecanico);
        $validacao->setData("nome", $mecanico->nome);
        $validacao->getData("nome")->isVazio();
        return $validacao;
    } 
}