<?php
namespace Models;

use \Core\Model;

class Arquivos extends Model {

    public function getAllBanco() {
		$array = array();

		$sql = "SELECT * FROM arquivos_pdf_banco";
		$sql = $this->db->query($sql);
		$sql->execute();

		if ($sql->rowCount() > 0){
		    $array = $sql->fetchAll(\PDO::FETCH_ASSOC);
        }

		return $array;
    }
    
    public function salvarPDFProposta($file,$nomes,$idProposta){

        $count = count($file['name']);

        for($i=0;$i<$count;$i++){

            $file_tmp = $file['tmp_name'][$i];
            $file_name = $file['name'][$i];
            $file_ext = explode('.', $file_name);
            $file_ext = strtolower(end($file_ext));

            $allowed = array('pdf','pdf');

            if(in_array($file_ext, $allowed)){
                $file_name_new = md5(rand(0,9999).time()) .'.'. $file_ext;
                $file_Desti = PATH_ARQUIVOS.'arquivos/PDFs/propostas/' . $file_name_new;

                if(move_uploaded_file($file_tmp, $file_Desti)){
                    try {
                        $sql = "INSERT INTO arquivos_pdf (nome_arquivo , caminho ,id_proposta) VALUES (:nome , :caminho, :idProposta)";
                        $sql = $this->db->prepare($sql);
                        $sql->bindValue(':nome', $nomes[$i]);
                        $sql->bindValue(':caminho', $file_name_new);
                        $sql->bindValue(':idProposta', $idProposta);
                       
                        $sql->execute();

                    }catch (\PDOException $e){
                        $e->getMessage();
                    }
                }
            }

        }

        return true;

    }

    public function salvarPDFBanco($file,$nome ,$descricao){


        $file_tmp = $file['tmp_name'];
        $file_name = $file['name'];
        $file_ext = explode('.', $file_name);
        $file_ext = strtolower(end($file_ext));

        $allowed = array('pdf','pdf');

        if(in_array($file_ext, $allowed)){
            $file_name_new = md5(rand(0,9999).time()) .'.'. $file_ext;
            $file_Desti = PATH_ARQUIVOS.'arquivos/PDFs/bancos/' . $file_name_new;

            if(move_uploaded_file($file_tmp, $file_Desti)){
                try {
                    $sql = "INSERT INTO arquivos_pdf_banco (nome_arquivo , caminho , descricao) VALUES (:nome , :caminho ,:descricao)";
                    $sql = $this->db->prepare($sql);
                    $sql->bindValue(':nome', $nome);
                    $sql->bindValue(':caminho', $file_name_new);
                    $sql->bindValue(':descricao', $descricao);

                    $sql->execute();

                }catch (\PDOException $e){
                    $e->getMessage();
                }
            }
        }

        return true;

    }
    
}