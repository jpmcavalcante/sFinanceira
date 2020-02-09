<?php
namespace Controllers;

use \Core\Controller;
use Models\Colaborador;
use Models\Proposta;


class HomeController extends Controller {

    

    public function __construct()
    {
        
    }

    public function index() {
    

		$this->loadTemplate('home', $this->arrayInfo);
	}

	
}