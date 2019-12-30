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
            echo "foi";
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
}