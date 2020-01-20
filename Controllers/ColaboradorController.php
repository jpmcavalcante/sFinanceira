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
        //impede o acesso pela url se o cara não tem permissão
        if (!$this->col->temPermissao('cad_colaborador')) {
            header("Location:".BASE_URL);
            exit;
        }


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

            $this->arrayInfo = array(
                'colaborador' => $this->col
            );

            $col = new Colaborador();

            $this->arrayInfo['list'] = $col->getAllItems();

            $this->arrayInfo['listGroups'] = $col->getGroups();

            $this->loadTemplate('colaborador', $this->arrayInfo);

        }

    public function add(){
        $this->arrayInfo = array(
            'colaborador' => $this->col
        );

        $col = new Colaborador();

        $this->arrayInfo['list'] = $col->getAllItems();

        $this->arrayInfo['listGroups'] = $col->getGroups();

        $this->loadTemplate('colaborador_add', $this->arrayInfo);
    }

    public function add_action() {

        $c = new Colaborador();


        if (!empty($_POST['nome']) && !empty($_POST['email'])){

            $nome = addslashes($_POST['nome']);
            $email = addslashes($_POST['email']);
            $atendente = addslashes($_POST['atendente']);
            $unidade = addslashes($_POST['unidade']);
            $senha = addslashes($_POST['senha']);
            $id_permissao = addslashes($_POST['id_permissao']);


            if ($c->salvar($nome, $email, $atendente, $unidade, $senha, $id_permissao)){
                $_SESSION['sucMsg'] = 'Colaborador cadastrado com sucesso';
                header("Location: ".BASE_URL.'colaborador');
                exit;
            }
        }
        header("Location: ".BASE_URL.'colaborador/add');
        exit;


    }

    public function edit($id){
        $this->arrayInfo = array(
            'colaborador' => $this->col

        );

        $col = new Colaborador();

        $this->arrayInfo['permissaoList'] = $col->listaPermissao();
        $this->arrayInfo['id_col'] = $id;
        $this->arrayInfo['info'] = $col->get($id);

        if(!empty($id)){

            $this->loadTemplate('colaborador_edit', $this->arrayInfo);
        }else{
            header("Location:".BASE_URL."colaborador");
            exit;
        }
    }

    public function edit_action($id)   {


        if (isset($id)){

            $col = new Colaborador();

            if(isset($_POST['nome']) && !empty($_POST['nome'])){
                $nome = addslashes($_POST['nome']);
                $email = addslashes($_POST['email']);
                $atendente = addslashes($_POST['atendente']);
                $unidade = addslashes($_POST['unidade']);
                $nivel = addslashes($_POST['nivel']);


                if ($col->update($nome, $email, $atendente, $unidade, $nivel, $id)){
                    $_SESSION['sucMsg'] = 'Colaborador cadastrado com sucesso';
                    header("Location: ".BASE_URL.'colaborador');
                    exit;
                }

            }else{
                $_SESSION['errorMsg'] = 'Colaborador não cadastrado.';
                header("Location: ".BASE_URL.'colaborador/edit/'.$id);
                exit;
            }

        }else{
            header("Location: ".BASE_URL.'colaborador');
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
