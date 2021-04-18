<?php
namespace app\models\validacao;

use app\core\Validacao;

class ObjetoValidacao{
    public static function salvar($objeto){
        $validacao = new Validacao($objeto);
        $validacao->setData("descricao", $objeto->descricao);
        $validacao->setData("placa", $objeto->placa);
        $validacao->getData("descricao")->isVazio();
        $validacao->getData("placa")->isVazio();
        return $validacao;
        
    }
}