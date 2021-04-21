<?php  
namespace app\models\validacao;

use app\core\Validacao;

class OrdemServicoItemValidacao{
    public static function salvar($item){
        $validacao = new Validacao($item);
        $validacao->setData("id_produto", $item->id_cliente);
        $validacao->setData("id_pedido", $item->id_objeto);
        $validacao->setData("valor", $item->id_pagamento);
        $validacao->setData("qdte", $item->id_vendedor);

        $validacao->getData("id_produto")->isVazio();
        $validacao->getData("id_pedido")->isVazio();
        $validacao->getData("valor")->isVazio();
        $validacao->getData("qdte")->isVazio();

        return $validacao;
    }
}
