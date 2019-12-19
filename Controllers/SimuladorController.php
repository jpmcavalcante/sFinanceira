<?php
namespace Controllers;

use \Core\Controller;
use Models\Colaborador;

class SimuladorController extends Controller {

    private $arrayInfo;
    private $col;

    public function __construct(){

        $this->arrayInfo = array(

        );

        $this->col = new Colaborador();

        if (!$this->col->isLogged()){
            header("Location:".BASE_URL."login");
            exit;
        }
    }

    public function index() {

        $this->loadTemplate('simulador', $this->arrayInfo);
    }


}