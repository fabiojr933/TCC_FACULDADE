<?php
namespace app\models\service;

use app\models\validacao\MecanicoValidacao;

class MecanicoService{
    public static function salvar($mecanico, $campo, $tabela){
        $validacao = MecanicoValidacao::salvar($mecanico);
        return Service::salvar($mecanico, $campo, $validacao->listaErros(), $tabela);
    }
}