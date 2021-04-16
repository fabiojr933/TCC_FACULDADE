<?php
namespace app\models\service;
use app\models\validacao;
use app\models\validacao\CategoriaValidacao;
use app\models\validacao\ProdutoValidacao;
use app\util\UtilService;

class ProdutoService{
    public static function salvar($produto, $campo, $tabela){

        global $config_upload;
        $validacao = ProdutoValidacao::salvar($produto);
        if($validacao->qtdeErro() <= 0){
            //fazendo upload da foto
            if($_FILES["arquivo"]["name"]){
                $produto->foto = UtilService::upload("arquivo", $config_upload);
                if(!$produto->foto){
                    return false;
                }
            }
        }      
        return Service::salvar($produto, $campo, $validacao->listaErros(), $tabela);
    } 
}