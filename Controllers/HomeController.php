<?php
namespace Controllers;

use \Core\Controller;
use Models\Colaborador;


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
          
       );
    }

    public function index() {

		$this->loadTemplate('home', $this->arrayInfo);
	}

}