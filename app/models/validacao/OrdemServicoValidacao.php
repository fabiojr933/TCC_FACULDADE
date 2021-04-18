<?php  
namespace app\models\validacao;

use app\core\Validacao;

class OrdemServicoValidacao{
    public static function salvar($pedido){
        $validacao = new Validacao($pedido);
        $validacao->setData("id_cliente", $pedido->id_cliente);
        $validacao->setData("id_objeto", $pedido->id_objeto);
        $validacao->setData("id_pagamento", $pedido->id_pagamento);
        $validacao->setData("id_vendedor", $pedido->id_vendedor);
        $validacao->setData("id_mecanico", $pedido->id_mecanico);

        $validacao->getData("id_cliente")->isVazio();
        $validacao->getData("id_objeto")->isVazio();
        $validacao->getData("id_pagamento")->isVazio();
        $validacao->getData("id_vendedor")->isVazio();
        $validacao->getData("id_mecanico")->isVazio();

        return $validacao;
    }
}
