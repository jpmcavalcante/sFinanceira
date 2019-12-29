<?php
namespace Controllers;

use \Core\Controller;
use Models\Arquivos;

class ArquivosController extends Controller {


    public function upload_pdf_action(){
        $a = new Arquivos();
        $file = $_FILES['arquivo'];
        $nomes = $_POST['nomeArquivos'];
  
        if($a->salvarPDF($file, $nomes)){
            echo "enviou";
        }else{
            echo "não foi";
        };
    }

}