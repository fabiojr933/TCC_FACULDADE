<?php
namespace app\models\validacao;

use app\core\Validacao;

class VendedorValidacao{
    public static function salvar($vendedor){
        $validacao = new Validacao();
        $validacao->setData("nome", $vendedor->nome);

        $validacao->getData("nome")->isVazio();
        return $validacao;
    }
}