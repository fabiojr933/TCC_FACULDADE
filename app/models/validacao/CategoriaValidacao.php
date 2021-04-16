<?php

namespace app\models\validacao;

use app\core\Validacao;

class CategoriaValidacao
{
    public static function salvar($categoria)
    {
        $validacao = new Validacao($categoria);
        $validacao->setData("descricao", $categoria->descricao);
        $validacao->getData("descricao")->isVazio();
        return $validacao;
    }
}
