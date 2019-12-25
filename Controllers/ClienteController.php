<?php
namespace Controllers;

use \Core\Controller;
use Models\Cliente;
use Models\Colaborador;


class ClienteController extends Controller {

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
            'colaborador' => $this->col
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

        $c = new Cliente();

        $this->arrayInfo['list'] = $c->getAll();

		$this->loadTemplate('cliente', $this->arrayInfo);
	}

	public function add(){
        $this->arrayInfo = array(
            'colaborador' => $this->col
        );

        $this->loadTemplate('cliente_add', $this->arrayInfo);
    }

    public function add_action(){

        $c = new Cliente();

        if(!empty($_POST['nome']) && !empty($_POST['cpf']) && !empty($_POST['email'])){

            $nome = addslashes($_POST['nome']);
            $cpf = addslashes($_POST['cpf']);
            $email = addslashes($_POST['email']);
            $rg = addslashes($_POST['rg']);
            $emissor = addslashes($_POST['orgaoEmissor']);
            $estado_emissor = addslashes($_POST['estadoEmissor']);
            $data_expedicao = addslashes($_POST['dataExpedicao']);
            $data_nascimento = addslashes($_POST['dataNascimento']);
            $estado_civil = addslashes($_POST['estadoCivil']);
            $sexo = addslashes($_POST['sexo']);
            $telefone = addslashes($_POST['telefone']);
            $celular = addslashes($_POST['celular']);
            $cep = addslashes($_POST['cep']);
            $endereco = addslashes($_POST['endereco']);
            $numero = addslashes($_POST['numero']);
            $complemento = addslashes($_POST['complemento']);
            $bairro = addslashes($_POST['bairro']);
            $estado = addslashes($_POST['estado']);
            $cidade = addslashes($_POST['cidade']);
            $tipo_residencia = addslashes($_POST['tipoResidencia']);
            $tempo_residencia = addslashes($_POST['tempoResidencia']);
            $naturalidade = addslashes($_POST['naturalidade']);
            $nome_pai = addslashes($_POST['nomePai']);
            $nome_mae = addslashes($_POST['nomeMae']);


            if ($c->salvar($nome, $cpf, $email, $rg, $emissor, $estado_emissor, $data_expedicao, $data_nascimento, $estado_civil, $sexo, $telefone, $celular, $cep, $endereco, $numero,
                           $complemento, $bairro, $estado, $cidade, $tipo_residencia, $tempo_residencia, $naturalidade, $nome_pai, $nome_mae)){

                $_SESSION['sucMsg'] = 'Cliente cadastrado com sucesso';
                header("Location: ".BASE_URL.'cliente');
                exit;
            }

            }else{
            $_SESSION['formError'] = array('nome');
            header("Location: ".BASE_URL.'cliente/add');
            exit;
        }
    }

    public function edit($id){
        $c= new Cliente();

        $this->arrayInfo['listar'] = $c->getUsers($id);

        $this->arrayInfo['id_cli'] = $id;


        $this->loadTemplate('cliente_edit', $this->arrayInfo);
    }

    public function edit_action($id){

        if (isset($id)){
            $c = new Cliente();


            if(!empty($_POST['nome']) && !empty($_POST['cpf']) && !empty($_POST['email'])){

                $nome = addslashes($_POST['nome']);
                $cpf = addslashes($_POST['cpf']);
                $email = addslashes($_POST['email']);
                $rg = addslashes($_POST['rg']);
                $emissor = addslashes($_POST['orgaoEmissor']);
                $estado_emissor = addslashes($_POST['estadoEmissor']);
                $data_expedicao = addslashes($_POST['dataExpedicao']);
                $data_nascimento = addslashes($_POST['dataNascimento']);
                $estado_civil = addslashes($_POST['estadoCivil']);
                $sexo = addslashes($_POST['sexo']);
                $telefone = addslashes($_POST['telefone']);
                $celular = addslashes($_POST['celular']);
                $cep = addslashes($_POST['cep']);
                $endereco = addslashes($_POST['endereco']);
                $numero = addslashes($_POST['numero']);
                $complemento = addslashes($_POST['complemento']);
                $bairro = addslashes($_POST['bairro']);
                $estado = addslashes($_POST['estado']);
                $cidade = addslashes($_POST['cidade']);
                $tipo_residencia = addslashes($_POST['tipoResidencia']);
                $tempo_residencia = addslashes($_POST['tempoResidencia']);
                $naturalidade = addslashes($_POST['naturalidade']);
                $nome_pai = addslashes($_POST['nomePai']);
                $nome_mae = addslashes($_POST['nomeMae']);



                if ($c->atualizar($nome, $cpf, $email, $rg, $emissor,  $estado_emissor,  $data_expedicao,  $data_nascimento, $estado_civil, $sexo, $telefone,  $celular,$cep, $endereco, $numero, $complemento, $bairro,
                                  $estado, $cidade, $tipo_residencia, $tempo_residencia, $naturalidade, $nome_pai, $nome_mae, $id)){

                    $_SESSION['sucMsg'] = 'Cliente editado com sucesso';
                    header("Location: ".BASE_URL.'cliente');
                    exit;
                }

            }else{
                $_SESSION['formError'] = array('nome');
                header("Location: ".BASE_URL.'cliente/add');
                exit;
            }

        }else{
            header("Location: ".BASE_URL.'cliente');
            exit;
        }
    }

}