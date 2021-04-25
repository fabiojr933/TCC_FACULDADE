<?php

namespace app\models\service;

use app\models\dao\OrdemServicoDao;
use app\models\validacao\OrdemServicoItemValidacao;
use app\models\validacao\OrdemServicoValidacao;

class OrdemServicoService
{
    public static function getPrisma()
    {
        $dao = new OrdemServicoDao();
        return $dao->getPrisma();
    }
    public static function getPrisma2($id)
    {
        $dao = new OrdemServicoDao();
        return $dao->getPrisma2($id);
    }
    public static function salvar($pedido, $campo, $tabela)
    {
        $validacao = OrdemServicoValidacao::salvar($pedido);
        return Service::salvar($pedido, $campo, $validacao->listaErros(), $tabela);
    }
    public function fecharPrisma($id_prisma)
    {
        $dao = new OrdemServicoDao();
        return $dao->fecharPrisma($id_prisma);
    }
    public static function getPedidoFechado($id_pedido)
    {
        $dao = new OrdemServicoDao();
        return $dao->getPedidoFechado($id_pedido);
    }
    public static function getPedidoFechado2($id_pedido)
    {
        $dao = new OrdemServicoDao();
        return $dao->getPedidoFechado2($id_pedido);
    }
    public function getPedidoPrisma()
    {
        $dao = new OrdemServicoDao();
        return $dao->getPedidoPrisma();
    }
    public function getLimit()
    {
        $dao = new OrdemServicoDao();
        return $dao->getLimit();
    }
    public static function atualizaPedido2($id_pedido){
        $dao = new OrdemServicoDao();
        return $dao->atualizaPedido2($id_pedido);
    }
    public static function todoPedido(){
        $dao = new OrdemServicoDao();
        return $dao->todoPedido();
    }
    public static function filtro($filtro){
        $dao = new OrdemServicoDao();
        return $dao->filtro($filtro);
    }
    public static function todoClientes(){
        $dao = new OrdemServicoDao();
        return $dao->todoClientes();
    }
    public function getPedidoPrismaRelatorio($data1, $data2)
    {
        $dao = new OrdemServicoDao();
        return $dao->getPedidoPrismaRelatorio($data1, $data2);
    }
    public static function somaPorData($data01, $data02){
        $dao = new OrdemServicoDao();
        return $dao->somaPorData($data01, $data02);
    }
}
