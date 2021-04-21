<?php 
namespace app\models\service;

use app\models\validacao\ItemValidacao;

class ItemService {
    public static function salvar($item, $campo, $tabela){
        $validacao = ItemValidacao::salvar($item);
        return Service::salvar($item, $campo, $validacao->listaErros(), $tabela);
    }
}