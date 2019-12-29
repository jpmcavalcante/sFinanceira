<?php
namespace Controllers;

use \Core\Controller;
use Models\Cliente;
use Models\Colaborador;
use Models\Proposta;

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

    public function add_action(){



        if ($_POST['operacao']){

            $p = new Proposta();


            $operacao = addslashes($_POST['operacao']);
            $tabela = "Tabela ". addslashes($_POST['tabela']);
            $valor = addslashes($_POST['valor']);
            $QtParcelas = addslashes($_POST['QtParcelas']);
            $valorFinal = addslashes($_POST['valorFinal']);
            $bandeiraBancaria = addslashes($_POST['bandeiraBancaria']);
            $numeroCartao = addslashes($_POST['numeroCartao']);
            $titular = addslashes($_POST['titular']);
            $mesVenci = addslashes($_POST['mesVenci']);
            $anoVenci = addslashes($_POST['anoVenci']);
            $codigoSeguranca = addslashes($_POST['codigoSeguranca']);


            $idCliente = addslashes($_POST['idCli']);


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
            $obs1 = addslashes($_POST['obs1']);
            $obs2 = addslashes($_POST['obs2']);
            $obs3 = addslashes($_POST['obs3']);
            $obs4 = addslashes($_POST['obs4']);



           // $satus = "analise";
           // $colIdentificacao =  $_POST['idColaborador'];
            $now = new \DateTime();
            $dateTime = $now->format('Y-m-d H:i:s');
           // $data_proposta = $dateTime;



            if ($nomeTerceiro == "") {
                $nomeTerceiro = "não informado";

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
            if ($obs1 == "") {
                $obs1 = "não informado";
            }
            if ($obs2 == "") {
                $obs2 = "não informado";
            }
            if ($obs3 == "") {
                $obs3 = "não informado";
            }
            if ($obs4 == ""){
                $obs4 = "não informado";
            }
           /* echo  $operacao." - ".$tabela." - ".$valor." - ".$QtParcelas." - ".$valorFinal." - ".$bandeiraBancaria." - ".$numeroCartao." - ".$titular." - ".$mesVenci." - ".$anoVenci." - ".$codigoSeguranca." - ".$idCliente." - ".$banco." - ".$agencia." - ".$conta." - ".$digito." - ".$dataDeAbertura." - ".
                $group1." - ".$nomeTerceiro." - ".$cpfTerceiro." - ".$group3." - ".$outro." - ".$razaoSocial." - ".$cnpj." - ".$vinculo." - ".$obs1." - ".$obs2." - ". $obs3." - ".$obs4; exit;*/

             if ($p->salvar($operacao, $tabela, $valor, $QtParcelas, $valorFinal, $bandeiraBancaria, $numeroCartao, $titular, $mesVenci, $anoVenci, $codigoSeguranca,
                            $idCliente, $banco, $agencia, $conta, $digito, $dataDeAbertura, $group1, $nomeTerceiro, $cpfTerceiro, $group3, $outro, $razaoSocial,
                            $cnpj, $vinculo, $obs1, $obs2, $obs3, $obs4)){
                 $_SESSION['sucMsg'] = 'Proposta cadastrado com sucesso';
                 header("Location: ".BASE_URL.'Proposta');
                 exit;
             }


        }else{
            header("Location: ".BASE_URL.'proposta');
            exit;
        }
    }

} 