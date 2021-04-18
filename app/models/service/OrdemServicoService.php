<?php 
namespace app\models\service;

use app\models\dao\OrdemServicoDao;
use app\models\validacao\OrdemServicoValidacao;

class OrdemServicoService {
    public static function getPrisma(){
        $dao = new OrdemServicoDao();
        return $dao->getPrisma();
    }
    public static function salvar($pedido, $campo, $tabela){
        $validacao = OrdemServicoValidacao::salvar($pedido);
        return Service::salvar($pedido, $campo, $validacao->listaErros(), $tabela);
    }
}