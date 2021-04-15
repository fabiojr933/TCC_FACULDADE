<?php

namespace app\models\validacao;

use app\core\Validacao;

class ClienteValidacao
{
    public static function salvar($cliente)
    {
        $validacao = new Validacao($cliente);
        $validacao->setData("nome", $cliente->nome);
        $validacao->setData("endereco", $cliente->endereco);
        $validacao->setData("telefone", $cliente->telefone);

        $validacao->getData("nome")->isVazio();
        $validacao->getData("endereco")->isVazio();
        $validacao->getData("telefone")->isVazio();

        return $validacao;
    }
}
