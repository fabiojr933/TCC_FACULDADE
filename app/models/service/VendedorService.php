<?php 
namespace app\models\service;

use app\models\validacao\VendedorValidacao;

class VendedorService{
    public static function salvar($vendedor, $campo, $tabela){
        $validacao = VendedorValidacao::salvar($vendedor);
        return Service::salvar($vendedor, $campo, $validacao->listaErros(), $tabela);
    }
}