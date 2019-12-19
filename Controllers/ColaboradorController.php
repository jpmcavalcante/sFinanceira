<?php
namespace Controllers;

use \Core\Controller;
use Models\Colaborador;


class ColaboradorController extends Controller {


    private $arrayInfo;
    private $col;

    public function __construct()
    {
        $this->col = new Colaborador();

        if (!$this->col->isLogged()){
            header("Location:".BASE_URL."login");
            exit;
        }

        $this->arrayInfo = array(
            'frase' => ''
        );
    }

    public function index() {

        $this->arrayInfo['erros'] = array('er' => '', 'suc' =>'');

        if (!empty($_SESSION['errorMsg'])){
            $this->arrayInfo['erros']['er'] = $_SESSION['errorMsg'];

            $_SESSION['errorMsg'] = '';
        }elseif (!empty($_SESSION['sucMsg'])){
            $this->arrayInfo['erros']['suc'] = $_SESSION['sucMsg'];

            $_SESSION['sucMsg'] = '';
        }

        $col = new Colaborador();

        $this->arrayInfo['list'] = $col->getAllItems();

        $this->loadTemplate('colaborador_add', $this->arrayInfo);
    }

    public function save(){

        if (!empty($_POST['nome']) && !empty($_POST['senha']) && !empty($_POST['nome'])){
            $nome = addslashes($_POST['nome']);
            $email = addslashes($_POST['email']);
            $senha = addslashes($_POST['senha']);

            $col = new Colaborador();

            if($col->salvar($nome, $email, $senha)){
                $_SESSION['sucMsg'] = 'Colaborador adicionado com sucesso';
                header("Location:".BASE_URL."colaborador");
                exit;
            }else{
                $_SESSION['errorMsg'] = 'Ocorreu algum erro!! Entre em contato com o administrador do sistema';
            }
            header("Location:".BASE_URL."colaborador");
            exit;
        }
    }

    public function edit($id){
        $col = new Colaborador();

        if(!empty($id)){

            $this->arrayInfo['listColab'] = $col->get($id);



            if(count($this->arrayInfo['listColab']) > 0){

            }
            $this->loadTemplate('colaborador_edit', $this->arrayInfo);
        }else{
            header("Location:".BASE_URL."colaborador");
            exit;
        }
    }

    public function edit_action($id){
        $col = new Colaborador();

        if (!empty($id)){

            if (!empty($_POST['nome']) && !empty($_POST['senha']) && !empty($_POST['nome'])) {
                $nome = addslashes($_POST['nome']);
                $email = addslashes($_POST['email']);
                $senha = addslashes($_POST['senha']);

                $col->update($nome, $email, $senha, $id);

                $_SESSION['sucMsg'] = 'Colaborador editado com sucesso';
                header("Location:".BASE_URL."colaborador");
                exit;
            }else{
                header("Location:".BASE_URL."colaborador/edit/".$id);
                exit;
            }
        }else{
            header("Location: ".BASE_URL."colaborador");
            exit;
        }


    }

    public function del($id){

        if (!empty($id)){
            $col = new Colaborador();

            if ($col->delete($id)){
                $_SESSION['sucMsg'] = 'Colaborador excluido com sucesso';
                header("Location: ".BASE_URL."colaborador");
                exit;
            }
        }else{
            header("Location: ".BASE_URL."colaborador");
            exit;
        }
    }


}
