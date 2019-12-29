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

    public function add_action(){



        if ($_POST['operacao']){

            $p = new Proposta();


            $operacao = addslashes($_POST['operacao']);
            $tabela = "Tabela ". addslashes($_POST['tabela']);
            $valor = addslashes($_POST['valorFinal']);
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
           /* echo  $operacao." - ".$tabela." - ".$valor." - ".$QtParcelas." - ".$valorFinal." - ".$bandeiraBancaria." - ".$numeroCartao." - ".$titular." - ".$mesVenci." - ".$anoVenci." - ".$codigoSeguranca." - ".$idCliente." - ".$banco." - ".$agencia." - ".$conta." - ".$digito." - ".$dataDeAbertura." - ".
                $group1." - ".$nomeTerceiro." - ".$cpfTerceiro." - ".$group3." - ".$outro." - ".$razaoSocial." - ".$cnpj." - ".$vinculo." - ".$obs1." - ".$obs2." - ". $obs3." - ".$obs4; exit;*/

             if ($p->salvar($operacao, $tabela, $valor, $QtParcelas, $valorFinal, $bandeiraBancaria, $numeroCartao, $titular, $mesVenci, $anoVenci, $codigoSeguranca,
                            $idCliente, $banco, $agencia, $conta, $digito, $dataDeAbertura, $group1, $nomeTerceiro, $cpfTerceiro, $group3, $outro, $razaoSocial,
                            $cnpj, $vinculo)){

                 //SALVANDO OS ANEXOS E SUAS OBSERVAÇOES ALEM DO CAMINHO
                $a = new Arquivos();
                $file = $_FILES['arquivo'];
                $nomes = $_POST['obss'];
                if($a->salvarPDF($file, $nomes)){
                    $_SESSION['sucMsg'] = 'Proposta cadastrada com sucesso';
                    header("Location: ".BASE_URL.'Proposta');
                    exit;
                }else{
                    echo "não foi";
                    exit;
                };
             }


        }else{
            header("Location: ".BASE_URL.'proposta');
            exit;
        }
    }

} 