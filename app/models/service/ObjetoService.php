<?php 
namespace app\models\service;

use app\models\validacao\ObjetoValidacao;

class ObjetoService{
    public static function salvar($objeto, $campo, $tabela){
        $validacao = ObjetoValidacao::salvar($objeto);
        return Service::salvar($objeto, $campo, $validacao->listaErros(), $tabela);
    }
   
}