<?php
namespace Controllers;

use \Core\Controller;
use Models\Arquivos;
use Models\Colaborador;

class ArquivoController extends Controller {
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

        $a = new Arquivos();

        $this->arrayInfo['list'] = $a->getAllBanco();

        $this->loadTemplate('arquivo', $this->arrayInfo);

    }

    public function add(){

        $this->loadTemplate('arquivo_add', $this->arrayInfo);
    }

    public function add_action(){
        $a = new Arquivos();

        $file = $_FILES['arquivo'];
        $nome = addslashes($_POST['nomeArquivo']);
        $descricao = addslashes($_POST['descricao']);

        if($a->salvarPDFBanco($file, $nome ,$descricao)){
            header("Location:".BASE_URL.'arquivo');
            exit;
        }
    }

    public function download_action(){
        $arquivo = $_GET["arquivo"];
        if(isset($arquivo) && file_exists($arquivo)){ 
            // faz o teste se a variavel não esta vazia e se o arquivo realmente existe
            switch(strtolower(substr(strrchr(basename($arquivo),"."),1))){ 
            // verifica a extensão do arquivo para pegar o tipo
                case "pdf": $tipo="application/pdf"; break;
                case "php": // deixar vazio por seurança
                case "htm": // deixar vazio por seurança
                case "html": // deixar vazio por seurança
            }
            header("Content-Type: ".$tipo); 
            // informa o tipo do arquivo ao navegador
            header("Content-Length: ".filesize($arquivo)); 
            // informa o tamanho do arquivo ao navegador
            header("Content-Disposition: attachment; filename=".basename($arquivo)); 
            // informa ao navegador que é tipo anexo e faz abrir a janela de download, 
            //tambem informa o nome do arquivo
            readfile($arquivo); // lê o arquivo
            exit; // aborta pós-ações
        }
    }

    public function view_action(){
        $arquivo = $_GET["arquivo"];
        if(isset($arquivo) && file_exists($arquivo)){ 
            // faz o teste se a variavel não esta vazia e se o arquivo realmente existe
            switch(strtolower(substr(strrchr(basename($arquivo),"."),1))){ 
            // verifica a extensão do arquivo para pegar o tipo
                case "pdf": $tipo="application/pdf"; break;
                case "php": // deixar vazio por seurança
                case "htm": // deixar vazio por seurança
                case "html": // deixar vazio por seurança
            }
            header("Content-Type: ".$tipo); 
            // informa o tipo do arquivo ao navegador
            header("Content-Length: ".filesize($arquivo)); 
            // informa o tamanho do arquivo ao navegador
            header("Content-Disposition: inline; filename=".basename($arquivo)); 
            // informa ao navegador que é tipo anexo e faz abrir a janela de download, 
            //tambem informa o nome do arquivo
            readfile($arquivo); // lê o arquivo
            exit; // aborta pós-ações
        }
    }
























    public function relatorio_action(){
        $a = new Arquivos();

        $id = $_GET['proposta'];

        $result = $a->generateRelatorio($id);

        $html= '
        
        <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
        <html>
        <head>
            <link rel="stylesheet" type="text/css" href="style.css"/>
            <meta charset="UTF-8">
        </head>
        <body>  
        </div>
        <div style="">
            <span style="">Produto:</span><span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:ArialMT;color:#000000"> </span><br/></SPAN></div>
        <div style="">
            <span style="">Cartão de Crédito  - TT L MS CRED</span><span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:ArialMT;color:#000000"> </span><br/></SPAN></div>
        <div style="">
            <span style="">Valor Solicitado: </span><span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:ArialMT;color:#000000">R$ '.$result['valor'].'- </span><span style="font-style:normal;font-weight:bold;font-size:9pt;font-family:Arial-BoldMT;color:#000000">Quantidade de parcelas: </span><span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:ArialMT;color:#000000">12x de R$  - </span><span style="font-style:normal;font-weight:bold;font-size:9pt;font-family:Arial-BoldMT;color:#000000">Total: </span><span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:ArialMT;color:#000000">R$ '.$result['valorFinal'].'</span><span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:ArialMT;color:#000000"> </span><br/></SPAN></div>
        <div style="">
            <span style="">Bandeira do Cartão: </span><span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:ArialMT;color:#000000">'.$result['bandeiraCartao'].'- </span><span style="font-style:normal;font-weight:bold;font-size:9pt;font-family:Arial-BoldMT;color:#000000">Número do cartão: </span><span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:ArialMT;color:#000000">'.$result['codSeguranca'].' - </span><span style="font-style:normal;font-weight:bold;font-size:9pt;font-family:Arial-BoldMT;color:#000000">Titular do Cartão: </span><span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:ArialMT;color:#000000">   </span><span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:ArialMT;color:#000000"> </span><br/></SPAN></div>
        <div style="">
            <span style="">FONTES</span><span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:ArialMT;color:#000000"> </span><br/></SPAN></div>
        <div style="">
            <span style="">Dados Pessoais:</span><span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:ArialMT;color:#000000"> </span><br/></SPAN></div>
        <div style="">
            <span style="">Nome: </span><span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:ArialMT;color:#000000">'.$result['nome_cli'].' - </span><span style="font-style:normal;font-weight:bold;font-size:9pt;font-family:Arial-BoldMT;color:#000000">CPF: </span><span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:ArialMT;color:#000000">'.$result['cpf'].'-</span><span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:ArialMT;color:#000000">20 </span><span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:ArialMT;color:#000000">- </span><span style="font-style:normal;font-weight:bold;font-size:9pt;font-family:Arial-BoldMT;color:#000000">RG: </span><span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:ArialMT;color:#000000">'.$result['rg'].'- </span><span style="font-style:normal;font-weight:bold;font-size:9pt;font-family:Arial-BoldMT;color:#000000">Orgão Emissor: </span><span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:ArialMT;color:#000000">'.$result['emissor'].'</span><span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:ArialMT;color:#000000"> </span><br/></SPAN></div>
        <div style="">
            <span style="">PROPOSTA - HCRED</span><span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:ArialMT;color:#000000"> </span><br/></SPAN></div>
        <div style="">
            <span style="">Franqueado: MS CRED</span><span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:ArialMT;color:#000000"> </span><br/></SPAN></div>
        <div style="">
            <span style="">Op: - MS CRED - ATENDENTE </span><span style="font-style:normal;font-weight:normal;font-size:7pt;font-family:ArialMT;color:#000000"> </span><br/></SPAN></div>
        <div style="">
            <span style="">Id da proposta: '.$result['id'].'</span><span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:ArialMT;color:#000000"> </span><br/></SPAN></div>
        <div style="">
            <span style="">Data da Proposta: '.$result['data_proposta'].'</span><span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:ArialMT;color:#000000"> </span><br/></SPAN></div>
        <div style="">
            <span style="">Data expedição RG: </span><span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:ArialMT;color:#000000">'.$result['data_expedicao'].' - </span><span style="font-style:normal;font-weight:bold;font-size:9pt;font-family:Arial-BoldMT;color:#000000">E-mail: </span><a href="mailto:AGNTCRED@GMAIL.COM"><span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:ArialMT;color:#000000"> '.$result['email'].' - </span></a>
        <span style="">Data Nascimento: </span></a>
        <span style="">'.$result['data_nascimento'].' - </span>
        <span style="">Estado civil: </span>
        <span style="">'.$result['estado_civil'].'</span>
        <span style=""> </span>
        <br/></SPAN></div>
        <div style=""><span style="font-style:normal;font-weight:bold;font-size:9pt;font-family:Arial-BoldMT;color:#000000">Sexo: </span><span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:ArialMT;color:#000000">'.$result['sexo'].' - </span><span style="font-style:normal;font-weight:bold;font-size:9pt;font-family:Arial-BoldMT;color:#000000">Telefone: </span><span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:ArialMT;color:#000000">'.$result['telefone'].' - </span><span style="font-style:normal;font-weight:bold;font-size:9pt;font-family:Arial-BoldMT;color:#000000">Celular: </span><span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:ArialMT;color:#000000">'.$result['celular'].'</span><span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:ArialMT;color:#000000"> </span><br/></SPAN></div>
        <div style=""><span style="font-style:normal;font-weight:bold;font-size:9pt;font-family:Arial-BoldMT;color:#000000">Endereço: </span><span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:ArialMT;color:#000000">'.$result['endereco'].' , </span><span style="font-style:normal;font-weight:bold;font-size:9pt;font-family:Arial-BoldMT;color:#000000">No </span><span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:ArialMT;color:#000000">'.$result['numero'].' - </span><span style="font-style:normal;font-weight:bold;font-size:9pt;font-family:Arial-BoldMT;color:#000000">Bairro: </span><span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:ArialMT;color:#000000">'.$result['bairro'].'</span><span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:ArialMT;color:#000000"> </span><br/></SPAN></div>
        <div style=""><span style="font-style:normal;font-weight:bold;font-size:9pt;font-family:Arial-BoldMT;color:#000000">Cidade: </span><span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:ArialMT;color:#000000">'.$result['cidade'].' - </span><span style="font-style:normal;font-weight:bold;font-size:9pt;font-family:Arial-BoldMT;color:#000000">Estado: </span><span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:ArialMT;color:#000000">'.$result['estado'].' </span><span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:ArialMT;color:#000000">- </span><span style="font-style:normal;font-weight:bold;font-size:9pt;font-family:Arial-BoldMT;color:#000000">Cep: </span><span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:ArialMT;color:#000000">'.$result['cep'].'</span><span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:ArialMT;color:#000000"></span><span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:ArialMT;color:#000000"></span><span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:ArialMT;color:#000000">- </span><span style="font-style:normal;font-weight:bold;font-size:9pt;font-family:Arial-BoldMT;color:#000000">Tipo de residência: </span><span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:ArialMT;color:#000000">'.$result['tipo_residencia'].' - </span><span style="font-style:normal;font-weight:bold;font-size:9pt;font-family:Arial-BoldMT;color:#000000">Tempo de residência: </span><span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:ArialMT;color:#000000">'.$result['tempo_residencia'].'</span><span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:ArialMT;color:#000000"> </span><br/></SPAN></div>
        <div style=""><span style="font-style:normal;font-weight:bold;font-size:9pt;font-family:Arial-BoldMT;color:#000000">Naturalidade: </span><span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:ArialMT;color:#000000">'.$result['naturalidade'].'- </span><span style="font-style:normal;font-weight:bold;font-size:9pt;font-family:Arial-BoldMT;color:#000000">Nome do Pai: </span><span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:ArialMT;color:#000000">'.$result['nome_pai'].' - </span><span style="font-style:normal;font-weight:bold;font-size:9pt;font-family:Arial-BoldMT;color:#000000">Nome da Mãe: </span><span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:ArialMT;color:#000000">'.$result['nome_mae'].'</span><span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:ArialMT;color:#000000"> </span><br/></SPAN></div>
        <div style=""><span style="font-style:normal;font-weight:bold;font-size:9pt;font-family:Arial-BoldMT;color:#000000">Dados Bancários:</span><span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:ArialMT;color:#000000"> </span><br/></SPAN></div>
        <div style=""><span style="font-style:normal;font-weight:bold;font-size:9pt;font-family:Arial-BoldMT;color:#000000">Banco: </span><span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:ArialMT;color:#000000">'.$result['banco'].' - </span><span style="font-style:normal;font-weight:bold;font-size:9pt;font-family:Arial-BoldMT;color:#000000">Agência: </span><span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:ArialMT;color:#000000">'.$result['agencia'].'</span><span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:ArialMT;color:#000000"></span><span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:ArialMT;color:#000000"></span><span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:ArialMT;color:#000000">- </span><span style="font-style:normal;font-weight:bold;font-size:9pt;font-family:Arial-BoldMT;color:#000000">Conta: </span><span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:ArialMT;color:#000000">'.$result['conta'].'</span><span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:ArialMT;color:#000000"></span><span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:ArialMT;color:#000000">- </span><span style="font-style:normal;font-weight:bold;font-size:9pt;font-family:Arial-BoldMT;color:#000000">Tipo de Conta: </span><span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:ArialMT;color:#000000">'.$result['group1'].'</span><span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:ArialMT;color:#000000"> </span><br/></SPAN></div>
        <div style=""><span style="font-style:normal;font-weight:bold;font-size:9pt;font-family:Arial-BoldMT;color:#000000">Data de Abertura: </span><span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:ArialMT;color:#000000">'.$result['dtAbertura'].' - </span><span style="font-style:normal;font-weight:bold;font-size:9pt;font-family:Arial-BoldMT;color:#000000">Conta de Terceiros: </span><span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:ArialMT;color:#000000">'.$result['conta_terceiro'].'</span><span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:ArialMT;color:#000000"> </span><br/></SPAN></div>

        <pagebreak type="NEXT-ODD" pagenumstyle="1" />
        <!-- PAGINA 2 -->

        <span style=""> </span><br/></SPAN></div>
        
        <div style=""><span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:ArialMT;color:#000000">TERMO DE ADESÃO AO CONTRATO DE SERVIÇOS MS CRED </span><span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:ArialMT;color:#000000"> </span><br/></SPAN></div>
        <div style=""><span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:ArialMT;color:#000000">DADOS DO(A) DEVEDOR(A)</span><span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:ArialMT;color:#000000"> </span><br/></SPAN></div>
        <div style=""><span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:ArialMT;color:#000000">Nome: '.$result['nome'].'    Data Nascimento: '.$result['data_nascimento'].'</span><span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:ArialMT;color:#000000"> </span><br/></SPAN></div>
        <div style=""><span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:ArialMT;color:#000000">CPF/CNPJ: '.$result['cpf'].'     RG: Estado Civil:Casado(a)</span><span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:ArialMT;color:#000000"> </span><br/></SPAN></div>
        <div style=""><span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:ArialMT;color:#000000">Endereço Residencial:'.$result['endereco'].'</span><span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:ArialMT;color:#000000"> </span><br/></SPAN></div>
        <div style=""><span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:ArialMT;color:#000000">No: '.$result['numero'].' Complemento: '.$result['complemento'].' Bairro:'.$result['bairro'].'</span><span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:ArialMT;color:#000000"> </span><br/></SPAN></div>
        <div style=""><span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:ArialMT;color:#000000">Cidade: '.$result['cidade'].' Estado:'.$result['estado'].' CEP: '.$result['cep'].'</span><span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:ArialMT;color:#000000"> </span><br/></SPAN></div>
        <div style=""><span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:ArialMT;color:#000000">Telefone Fixo: '.$result['telefone'].' Telefone Celular: '.$result['celular'].'</span><span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:ArialMT;color:#000000"> </span><br/></SPAN></div>
        <div style=""><span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:ArialMT;color:#000000">DADOS DO SERVIÇO</span><span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:ArialMT;color:#000000"> </span><br/></SPAN></div>
        <div style=""><span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:ArialMT;color:#000000">Valor Solicitado: R$ '.$result['valor'].' Valor Total: R$ '.$result['valorFinal'].'</span><span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:ArialMT;color:#000000"> </span><br/></SPAN></div>
        <div style=""><span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:ArialMT;color:#000000">Quantidade de parcelas:12 Valor da Parcela: '.$result['valor_parcela'].'</span><span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:ArialMT;color:#000000"> </span><br/></SPAN></div>
        <div style=""><span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:ArialMT;color:#000000">Primeiro Vencimento: Vencimento fatura cartão</span><span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:ArialMT;color:#000000"> </span><br/></SPAN></div>
        <div style=""><span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:ArialMT;color:#000000">Dados para Liberação:</span><span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:ArialMT;color:#000000"> </span><br/></SPAN></div>
        <div style=""><span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:ArialMT;color:#000000">Banco: '.$result['banco'].' AGENCIA: '.$result['agencia'].' CONTA: '.$result['conta'].'</span><span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:ArialMT;color:#000000"> </span><br/></SPAN></div>
        <div style=""><span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:ArialMT;color:#000000">CONSULTA E INFORMAÇÕES AO BACEN E DEMAIS ORGÃOS</span><span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:ArialMT;color:#000000"> </span><br/></SPAN></div>
        <div style=""><span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:ArialMT;color:#000000">SCR/SERASA/SPC -Declaro, sob as penas da lei, que as informações ora prestadas são verídicas, completas e exatas, sob pena de aplicação das sanções legais, inclusive do disposto no Artigo</span><span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:ArialMT;color:#000000"> </span><br/></SPAN></div>
        <div style=""><span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:ArialMT;color:#000000">64  da  Lei  8.383/91.  Autorizo  a  H  CRED  e  as  instituições  financeiras  a  ele  ligadas  ou  por  ele  controladas,  bem  como  seus  sucessores,  a:  (a)  consultar,  a  qualquer  tempo,  os  débitos </span><span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:ArialMT;color:#000000"> </span><br/></SPAN></div>
        <div style=""><span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:ArialMT;color:#000000">e responsabilidades decorrentes de operações de crédito constantes em meu nome do Sistema de Informações de Crédito (SCR) gerido pelo Banco Central do Brasil, ou dos sistemas que venham</span><span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:ArialMT;color:#000000"> </span><br/></SPAN></div>
        <div style=""><span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:ArialMT;color:#000000">a complementá-lo; e (b) verificar a exatidão de meus dados pessoais e informações cadastrais, bem como a proceder a análise de risco para efeito de concessão de crédito, inclusive através da</span><span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:ArialMT;color:#000000"> </span><br/></SPAN></div>
        <div style=""><span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:ArialMT;color:#000000">divulgação desses dados a empresas terceiras, incluindo, sem limitação, SERASA - Centro de Serviços de Bancos S/A ou SPC - Serviço de Proteção ao Crédito. CET - O Devedor concorda que: (a)</span><span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:ArialMT;color:#000000"> </span><br/></SPAN></div>
        <div style=""><span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:ArialMT;color:#000000">o Custo Efetivo Total (CET) acima previsto foi calculado considerando-se os fluxos referentes às liberações nesta data e os pagamentos descritos, incluindo taxas de juros, tributos e tarifas; (b)  os</span><span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:ArialMT;color:#000000"> </span><br/></SPAN></div>
        <div style=""><span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:ArialMT;color:#000000">fluxos considerados no cálculo do CET e a taxa percentual indicada na referida letra, representam as condições vigentes na presente data de cálculo; e (c) no caso do crédito ser liberado em parcelas</span><span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:ArialMT;color:#000000"> </span><br/></SPAN></div>
        <div style=""><span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:ArialMT;color:#000000">será calculado e informado ao Devedor o respectivo CET, observadas as taxas e prazos acima estabelecidos.</span><span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:ArialMT;color:#000000"> </span><br/></SPAN></div>
        <div style=""><span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:ArialMT;color:#000000">O devedor está ciente e concorda com as taxas, tarifas e juros cobrados, bem como está ciente que o parcelamento será realizado por meio de cartão de crédito por ele indicado.</span><span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:ArialMT;color:#000000"> </span><br/></SPAN></div>
        <br><br><br><br><br>
        <div style=""><span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:ArialMT;color:#000000">Assinatura: </span><span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:ArialMT;color:#000000">_____________________________________________________________________________</span><br/></SPAN></div>
        
        
        <pagebreak type="NEXT-ODD" pagenumstyle="1" />
        <!-- PAGINA 3 -->

        <div style=""><span style="font-style:normal;font-weight:normal;font-size:8pt;font-family:ArialMT;color:#000000">HCred - Gestão de Propostas</span><span style="font-style:normal;font-weight:normal;font-size:8pt;font-family:ArialMT;color:#000000"> </span><br/></SPAN></div>
        <div style=""><span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:ArialMT;color:#000000">Após firmada a negociação e assinado o presente, o DEVEDOR poderá desistir do empréstimo, desde cumulativamente, devolva a quantia integral emprestada, pague a quantia correspondente a</span><span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:ArialMT;color:#000000"> </span><br/></SPAN></div>
        <div style=""><span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:ArialMT;color:#000000">12% (Doze por cento) do valor contratado, quantia esta estipulado como multa por descumprimento contratual, encargos fiscais e a ainda a desistência deverá ocorrer dentro do prazo máximo de</span><span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:ArialMT;color:#000000"> </span><br/></SPAN></div>
        <div style=""><span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:ArialMT;color:#000000">até 7 (Sete) dias, contados a partir da assinatura do presente Termo de Adesão.</span><span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:ArialMT;color:#000000"> </span><br/></SPAN></div>
        <div style=""><span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:ArialMT;color:#000000">Havendo  a  desistência  do  presente,  por  parte  do  DEVEDOR  e  ocorrendo  o  inadimplemento  quanto  ao  pagamento  da  multa  contratual  e  demais  encargos,  poderá  a  INTERMEDIADORA </span><span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:ArialMT;color:#000000"> </span><br/></SPAN></div>
        <div style=""><span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:Arial;color:#000000">–</span><span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:ArialMT;color:#000000"> CONCEDENTE, depois de constituído o DEVEDOR em mora, tomar as medidas judiciais cabíveis para receber seu crédito, bem como p romover a competente Execução por Quantia Certa, com</span><span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:ArialMT;color:#000000"> </span><br/></SPAN></div>
        <div style=""><span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:ArialMT;color:#000000">base nos artigos, 566, I e 585, II, ambos do Código de Processo Civil, acrescidos de juros legais, correção monetária e 20% de honorários advocatícios, além de requerer a inclusão do nome do</span><span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:ArialMT;color:#000000"> </span><br/></SPAN></div>
        <div style=""><span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:ArialMT;color:#000000">DEVEDOR no Cadastro de Maus Pagadores, Protestos, Serasa, bastando simples petição requerendo tal providência. O que desde já concordam expressamente as partes.</span><span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:ArialMT;color:#000000"> </span><br/></SPAN></div>
        <div style=""><span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:ArialMT;color:#000000">Ainda, o DEVEDOR se compromete a assinar com o presente, o Termo de Entendimento do Regulamento de Adesão para Contratantes.</span><span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:ArialMT;color:#000000"> </span><br/></SPAN></div>
        <div style=""><span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:ArialMT;color:#000000">As partes contratantes elegem o Foro da comarca de Camacari-</span><span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:ArialMT;color:#000000">BA</span><span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:ArialMT;color:#000000">, renunciando qualquer outro foro por mais privilegiado que seja. Devedor:</span><span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:ArialMT;color:#000000"> </span><br/></SPAN></div>
        <div style=""><span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:ArialMT;color:#000000">'.strtoupper($result['nome']).'</span><span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:ArialMT;color:#000000"> </span><br/></SPAN></div>
        <div style=""><span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:ArialMT;color:#000000">CAMACARI, </span></SPAN><br/></div>
        <div style=""><DIV style="position:relative; left:0.82in;"><span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:ArialMT;color:#000000">17 </span></SPAN></DIV><br/></div>
        <div style=""><DIV style="position:relative; left:1.03in;"><span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:ArialMT;color:#000000">DE </span></SPAN></DIV><br/></div>
        <div style=""><DIV style="position:relative; left:1.28in;"><span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:ArialMT;color:#000000">DEZEMBRO </span></SPAN></DIV><br/></div>
        <div style=""><DIV style="position:relative; left:2.11in;"><span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:ArialMT;color:#000000">DE</span><span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:ArialMT;color:#000000"> </span><br/></SPAN></DIV></div>
        <br><br><br><br><br>
        <div style=""><span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:ArialMT;color:#000000">Assinatura: </span><span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:ArialMT;color:#000000">_____________________________________________________________________________</span><br/></SPAN></div>
        
        

        <pagebreak type="NEXT-ODD" pagenumstyle="1" />
        <!-- PAGINA 4 -->
        

        <div style=""><span style="font-style:normal;font-weight:normal;font-size:8pt;font-family:ArialMT;color:#000000">M$ CRÉDITO - Gestão de Propostas</span><span style="font-style:normal;font-weight:normal;font-size:8pt;font-family:ArialMT;color:#000000"> </span><br/></SPAN></div>
        <div style=""><span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:ArialMT;color:#000000">Declaração</span><span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:ArialMT;color:#000000"> </span><br/></SPAN></div>
        <div style=""><span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:ArialMT;color:#000000">AVARÉ, 17 DE DEZEMBRO DE </span><span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:ArialMT;color:#000000">2019</span><span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:ArialMT;color:#000000"> </span><br/></SPAN></div>
        <div style=""><span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:ArialMT;color:#000000">Eu, '.strtoupper($result['nome']).' RG e CPF '.$result['cpf'].', residente '.$result['endereco'].' - No: '.strtoupper($result['numero']).' '.strtoupper($result['complemento']).' - Bairro:'.$result['bairro'].' - Cidade: '.$result['cidade'].' - Estado:SE - CEP:</span><span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:ArialMT;color:#000000"> </span><br/></SPAN></div>
        <div style=""><span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:ArialMT;color:#000000">49095</span><span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:ArialMT;color:#000000">-803, reconheço a transação realizada na empresa Mscred no dia '.$result['data_proposta'].', no valor de R$ '.$result['valorFinal'].' ( dois mil e novecentos e noventa e sete reais ) parcelado em 12 vezes de R$</span><span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:ArialMT;color:#000000"> </span><br/></SPAN></div>
        <div style=""><span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:ArialMT;color:#000000">249,75 (duzentos e quarenta e nove reais e setenta e cinco centavos ) no cartão bandeira Visa final número 2501</span><span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:ArialMT;color:#000000"> </span><br/></SPAN></div>
        <div style=""><span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:ArialMT;color:#000000">Sem mais para o momento.</span><span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:ArialMT;color:#000000"> </span><br/></SPAN></div>
        <div style=""><span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:ArialMT;color:#000000">Nome: '.strtoupper($result['nome']).'</span><span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:ArialMT;color:#000000"> </span><br/></SPAN></div>
        <div style=""><span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:ArialMT;color:#000000">FONTES CPF: '.$result['cpf'].'</span><span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:ArialMT;color:#000000"></span><span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:ArialMT;color:#000000"> </span><br/></SPAN></div>
        </html>
        ';

        $mpdf = new \Mpdf\Mpdf(['tempDir' => '/tmp', 'format' => 'A4','margin left' => 15, 'margin right' => 15,'margin top' => 58 ,'margin bottom' => 60 , 'margin header' => 6]);
        $mpdf->debug = true;
        $mpdf->allow_charset_conversion=true;
        $mpdf->use_kwt = true;
        $mpdf->autoPageBreak = false;
        $mpdf->setFooter('{PAGENO}');

        $mpdf->AddPage('','','','','on');
        $mpdf->WriteHTML(utf8_encode($html) ,\Mpdf\HTMLParserMode::HTML_BODY);


        $filename   = md5(date('d/m/y')).".pdf";
        $mpdf->Output();

        exit;
    }
}