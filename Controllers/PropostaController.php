<?php
namespace Controllers;

use \Core\Controller;
use Models\Cliente;
use Models\Colaborador;

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
            'colaborador' => $this->col
        );
    }

    public function index() {

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

} 