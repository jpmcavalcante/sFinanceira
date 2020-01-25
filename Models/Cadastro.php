<?php
namespace Models;

use \Core\Model;

class Cadastro extends Model {

	public function salvar($nome, $usuario, $senha, $rua, $bairro, $cpf) {
        try {
            $sql = "INSERT INTO usuario (nome, usuario, senha, rua, bairro, cpf) VALUES (:nome, :usuario, :senha, :rua , :bairro, :cpf) ";
            $sql = $this->db->prepare($sql);
            $sql->bindValue(':nome', $nome);
            $sql->bindValue(':usuario', $usuario);
            $sql->bindValue(':senha', $senha);
            $sql->bindValue(':rua', $rua);
            $sql->bindValue(':bairro', $bairro);
            $sql->bindValue(':cpf', $cpf);
            $sql->execute();
            return true;

        }catch (\PDOException $e){
            $e->getMessage();
            return false;
        }

   	}

}