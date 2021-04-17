<?php  
namespace app\models\service;

use app\core\Flash;
use app\models\dao\Dao;

class LogarService{
    public static function logar($campo, $valor,  $senha, $tabela){        
        $dao        = new Dao();        
        Flash::limpaForm();
        Flash::limpaMsg();
        $usuario    = $dao->get($tabela, $campo, $valor);
        if($usuario){
            if($usuario->senha == $senha ){
                $_SESSION[SESSION_LOGIN] = $usuario;
                return true;
            }    
        }        
        unset($_SESSION[SESSION_LOGIN]);
        Flash::setMsg("Email e senha não localizados");        
        return false;
    }
    public static function retonaIdcliente(){
        $idCliente = isset($_SESSION[SESSION_LOGIN]) ? $_SESSION[SESSION_LOGIN]["usuario_logado"] : null;
        return $idCliente;
    }
}