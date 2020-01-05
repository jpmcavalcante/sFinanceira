<?php
namespace Controllers;

use \Core\Controller;
use Models\Cliente;
use Models\Colaborador;
use Models\Proposta;
use Models\Arquivos;

class PropostaController extends Controller {
   
    private $arrayInfo;
    private $col;
    

    public function __construct(){

        $this->col = new Colaborador();


        if (!$this->col->isLogged()){
            header("Location:".BASE_URL."login");
            exit;
        }

        $this->arrayInfo = array(
            'colaborador' => $this->col,
            'colId' => $this->col

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

		$this->loadTemplate('novaProposta', $this->arrayInfo);
	}

	public function analise(){

        $this->loadView('analise', $this->arrayInfo);
    }


    public function buscarCliente(){

        
        $c = new Cliente();
        

        if (isset($_POST['busca']) && $_POST['busca'] == 'sim')  {

            $textoBusca = addslashes($_POST['textoBusca']);

            $d = $c->buscarCli($textoBusca);

            echo json_encode($d);
            exit;
        }else{
            echo 'entrou no else';
            exit;
        }
    }


    public function add_action()
    {

        if ($_POST['operacao']) {



            $p = new Proposta();


            $operacao = addslashes($_POST['operacao']);
            $tabela = "Tabela " . addslashes($_POST['tabela']);
            $valor = addslashes($_POST['valor']);
            $valor_parcela = addslashes($_POST['valorParcela']);
            $QtParcelas = addslashes($_POST['QtParcelas']);
            $valorFinal = addslashes($_POST['valorFinal']);
            $bandeiraBancaria = addslashes($_POST['bandeiraBancaria']);
            $numeroCartao = addslashes($_POST['numeroCartao']);
            $titular = addslashes($_POST['titular']);
            $mesVenci = addslashes($_POST['mesVenci']);
            $anoVenci = addslashes($_POST['anoVenci']);
            $codigoSeguranca = addslashes($_POST['codigoSeguranca']);


            $nomeCliente = addslashes($_POST['nome']);
            $nomeColaborador = addslashes($_POST['nome_colaborador']);

            $banco = addslashes($_POST['banco']);
            $agencia = addslashes($_POST['agencia']);
            $conta = addslashes($_POST['conta']);
            $digito = addslashes($_POST['digito']);
            $dataDeAbertura = addslashes($_POST['dataDeAbertura']);
            $group1 = addslashes($_POST['group1']);

            $nomeTerceiro = addslashes($_POST['nomeTerceiro']);
            $cpfTerceiro = addslashes($_POST['cpfTerceiro']);
            $group3 = addslashes($_POST['group3']);
            $outro = addslashes($_POST['outro']);
            $razaoSocial = addslashes($_POST['razaoSocial']);
            $cnpj = addslashes($_POST['cnpj']);
            $vinculo = addslashes($_POST['vinculo']);



            $now = new \DateTime();
            $dateTime = $now->format('Y-m-d H:i:s');

            $conta_terceiro = "não";

            if ($nomeTerceiro == "") {
                $nomeTerceiro = "não informado";
                
                $conta_terceiro = "sim";
            }
            if ($cpfTerceiro == "") {
                $cpfTerceiro = "não informado";

            }
            if ($group3 == "") {
                $group3 = "não informado";
            }
            if ($outro == "") {
                $outro = "não informado";
            }
            if ($razaoSocial == "") {
                $razaoSocial = "não informado";
            }

            if ($cnpj == "") {
                $cnpj = "não informado";
            }
            if ($vinculo == "") {
                $vinculo = "não informado";
            }


            $file = $_FILES['arquivo'];
            $nomes = $_POST['obss'];


            $status = 1;
            $data_proposta = date('d/m/y');




                if ($p->salvar($file, $nomes, $operacao, $tabela, $valor, $valor_parcela,$QtParcelas, $valorFinal, $bandeiraBancaria, $numeroCartao, $titular, $mesVenci, $anoVenci, $codigoSeguranca,
                    $nomeCliente, $banco, $agencia, $conta, $digito, $dataDeAbertura, $group1,$conta_terceiro, $nomeTerceiro, $cpfTerceiro, $group3, $outro, $razaoSocial,
                    $cnpj, $vinculo, $status, $data_proposta, $nomeColaborador)) {

                    $_SESSION['sucMsg'] = 'Proposta cadastrada com sucesso';
                    header("Location: " . BASE_URL . 'proposta');
                    exit;
                      }


            } else {
                header("Location: " . BASE_URL . 'proposta');
                exit;
            }
        }

        public function ativas_action(){
            $p = new Proposta();

            $id= $_POST['idProposta'];

            $status_proposta = 1;

            $retorno = $p->updateStatus($id,$status_proposta);
            echo json_encode($retorno);
            exit;      
            
        }

        public function analise_action(){
            $p = new Proposta();

            $id= $_POST['idProposta'];

            $status_proposta = 2;

            $retorno = $p->updateStatus($id,$status_proposta);
            echo json_encode($retorno);
            exit;      
            
        }

        public function aprovada_action(){
            $p = new Proposta();

            $id= $_POST['idProposta'];

            $status_proposta = 3;

            $retorno = $p->updateStatus($id,$status_proposta);
            echo json_encode($retorno);
            exit;      
            
        }

        public function reprovada_action(){
            $p = new Proposta();

            $id= $_POST['idProposta'];

            $status_proposta = 4;

            $retorno = $p->updateStatus($id,$status_proposta);
            echo json_encode($retorno);
            exit;      
            
        }

        public function pendente_action(){
            $p = new Proposta();

            $id= $_POST['idProposta'];

            $status_proposta = 5;

            $retorno = $p->updateStatus($id,$status_proposta);
            echo json_encode($retorno);
            exit;      
            
        }

        public function pagas_action(){
            $p = new Proposta();

            $id= $_POST['idProposta'];

            $status_proposta = 6;

            $retorno = $p->updateStatus($id,$status_proposta);
            echo json_encode($retorno);
            exit;      
            
        }

        public function canceladas_action(){
            $p = new Proposta();

            $id= $_POST['idProposta'];

            $status_proposta = 7;

            $retorno = $p->updateStatus($id,$status_proposta);
            echo json_encode($retorno);
            exit;      
            
        }

        public function desativadas_action(){
            $p = new Proposta();

            $id= $_POST['idProposta'];

            $status_proposta = 8;

            $retorno = $p->updateStatus($id,$status_proposta);
            echo json_encode($retorno);
            exit;      
            
        }
            
        
    }