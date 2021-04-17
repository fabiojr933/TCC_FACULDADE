<?php  
namespace app\controllers;

use app\core\Controller;
use app\core\Flash;
use app\models\dao\LoginDao;
use app\models\service\Service;
use app\util\UtilService;

class LoginController extends Controller{
    public function index(){
        $dados["view"] = "login";
        $this->load("login", $dados);
    }
    public function logar(){
        $credencial  = $_POST["email"];
        $senha       = $_POST["senha"];
        
        Flash::setForm($_POST);
        if(Service::logar("login", $credencial, $senha, "usuario")){
            $this->redirect(URL_BASE ."login/resultado");
        }else{
            $this->redirect(URL_BASE ."login");
        }   
     }
     public function resultado(){
        $this->usuario = UtilService::getUsuario();
        if(!$this->usuario){
            $this->redirect(URL_BASE ."login");
            exit;
           
        }
        $_SESSION[SESSION_LOGIN] = $this->usuario;
        $this->redirect(URL_BASE."Home");
     }
     public function logoff(){
        unset($_SESSION[SESSION_LOGIN]);
        $this->redirect(URL_BASE ."login");
     }
}