<?php
namespace Models;

use \Core\Model;

class Arquivos extends Model {

    public function salvarPDF($file,$nomes){

        $count = count($file['name']);
        print_r($nomes);
        for($i=0;$i<$count;$i++){

            $file_tmp = $file['tmp_name'][$i];
            $file_name = $file['name'][$i];
            $file_ext = explode('.', $file_name);
            $file_ext = strtolower(end($file_ext));

            $allowed = array('pdf','pdf');

            if(in_array($file_ext, $allowed)){
                $file_name_new = md5(rand(0,9999).time()) .'.'. $file_ext;
                $file_Desti = PATH_ARQUIVOS.'arquivos/PDFs/' . $file_name_new;

                if(move_uploaded_file($file_tmp, $file_Desti)){
                    try {
                        $sql = "INSERT INTO pdf (nome , caminho) VALUES (:nome , :caminho)";
                        $sql = $this->db->prepare($sql);
                        $sql->bindValue(':nome', $nomes[$i]);
                        $sql->bindValue(':caminho', $file_name_new);
                    
                        $sql->execute();

                        echo "";
                    }catch (\PDOException $e){
                        $e->getMessage();
                    }
                }else{
                    echo "";
                };
            }
        }

    }

}