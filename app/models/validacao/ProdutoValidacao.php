<?php

namespace app\models\validacao;

use app\core\Validacao;

class ProdutoValidacao
{
    public static function salvar($produto)
    {
        $validacao = new Validacao($produto);
        $validacao->setData("descricao", $produto->descricao);
        $validacao->setData("referencia", $produto->referencia);
        $validacao->setData("preco_custo", $produto->preco_custo);
        $validacao->setData("preco_venda", $produto->preco_venda);

        $validacao->getData("descricao")->isVazio();
        $validacao->getData("referencia")->isVazio();
        $validacao->getData("preco_custo")->isVazio();
        $validacao->getData("preco_venda")->isVazio();
        return $validacao;
    }
}
