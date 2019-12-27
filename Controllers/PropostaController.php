<?php
namespace Controllers;

use \Core\Controller;
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


}