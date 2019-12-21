<?php
namespace Controllers;

use \Core\Controller;
use Models\Colaborador;


class LoginController extends Controller {

    private $arrayInfo;

    public function __construct()
    {

        $this->arrayInfo = array(
            'error' => ''
        );

        if (!empty($_SESSION['errogMsg'] )){
            $this->arrayInfo['error'] = $_SESSION['errogMsg'];
            $_SESSION['errogMsg']  = '';
        }
    }

    public function index() {

        $this->loadView('login', $this->arrayInfo);
    }

    public function index_action(){
        if(!empty($_POST['email']) && !empty($_POST['senha'])) {
            $email = addslashes($_POST['email']);
            $senha = addslashes($_POST['senha']);

            $col  = new Colaborador();
            if ($col->validateLogin($email, $senha)) {
                header("Location: ".BASE_URL);
                exit;
            }else{
                $_SESSION['errogMsg'] = 'Email e/ou senha incorretos.';
            }

        }else{
            $_SESSION['errogMsg'] = 'preencha os campos abaixo';
        }
        header("Location: ".BASE_URL."login");
        exit;

    }

    public function logout(){
        unset($_SESSION['token']);
        header("Location: ".BASE_URL);
        exit;
    }

}
