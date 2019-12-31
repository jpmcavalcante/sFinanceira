<?php
namespace Controllers;

use \Core\Controller;
use Models\Colaborador;
use Models\Proposta;


class HomeController extends Controller {

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

        $prop = new Proposta();

        $this->arrayInfo['listarPropostasNova'] = $prop->listprop();
        $this->arrayInfo['listarPropostasAprovadas'] = $prop->listpropAprovadas();

		$this->loadTemplate('home', $this->arrayInfo);
	}

	public function listProposta(){

        $this->loadTemplate('teste', $this->arrayInfo);

    }

}