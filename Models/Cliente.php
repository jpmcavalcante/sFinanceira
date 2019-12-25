<?php
namespace Models;

use \Core\Model;
use mysql_xdevapi\Exception;

class Cliente extends Model {

	public function getAll() {
		$array = array();

		$sql = "SELECT * FROM clientes";
		$sql = $this->db->query($sql);
		$sql->execute();

		if ($sql->rowCount() > 0){
		    $array = $sql->fetchAll(\PDO::FETCH_ASSOC);
        }

		return $array;
	}

    public function getUsers($id){

        $array = array();

        try {
            $sql = "SELECT id, nome, cpf, email, rg, emissor, estado_emissor, data_expedicao, data_nascimento, estado_civil, sexo, telefone, celular, cep, endereco, numero, complemento, 
	    bairro, estado, cidade, tipo_residencia, tempo_residencia, naturalidade, nome_pai, nome_mae FROM clientes WHERE id = :id";

            $sql = $this->db->prepare($sql);
            $sql->bindValue(':id', $id);
            $sql->execute();

            if ($sql->rowCount() > 0){
                $array = $sql->fetch(\PDO::FETCH_ASSOC);
                return $array;
            }
        }catch (\PDOException $e){
            $e->getMessage();
        }

        return $array;

    }

	public function salvar($nome, $cpf, $email, $rg, $emissor, $estado_emissor, $data_expedicao, $data_nascimento, $estado_civil, $sexo, $telefone, $celular, $cep, $endereco, $numero,
                           $complemento, $bairro, $estado, $cidade, $tipo_residencia, $tempo_residencia, $naturalidade, $nome_pai, $nome_mae){

        try {

            $sql = "INSERT INTO clientes (nome, cpf, email, rg, emissor, estado_emissor, data_expedicao, data_nascimento, estado_civil, sexo, telefone, celular, cep, endereco, numero, complemento, bairro, estado, cidade, tipo_residencia, tempo_residencia, naturalidade, nome_pai, nome_mae)  
                    VALUES (:nome, :cpf, :email, :rg, :emissor, :estado_emissor, :data_expedicao, :data_nascimento, :estado_civil, :sexo, :telefone, :celular, :cep, :endereco, :numero, :complemento, :bairro, :estado, :cidade, :tipo_residencia, 
                            :tempo_residencia, :naturalidade, :nome_pai, :nome_mae)";

            $sql = $this->db->prepare($sql);
            $sql->bindValue(':nome', $nome);
            $sql->bindValue(':cpf', $cpf);
            $sql->bindValue(':email', $email);
            $sql->bindValue(':rg', $rg);
            $sql->bindValue(':emissor', $emissor);
            $sql->bindValue(':estado_emissor', $estado_emissor);
            $sql->bindValue(':data_expedicao', $data_expedicao);
            $sql->bindValue(':data_nascimento', $data_nascimento);
            $sql->bindValue(':estado_civil', $estado_civil);
            $sql->bindValue(':sexo', $sexo);
            $sql->bindValue(':telefone', $telefone);
            $sql->bindValue(':celular', $celular);
            $sql->bindValue(':cep', $cep);
            $sql->bindValue(':endereco', $endereco);
            $sql->bindValue(':numero', $numero);
            $sql->bindValue(':complemento', $complemento);
            $sql->bindValue(':bairro', $bairro);
            $sql->bindValue(':estado', $estado);
            $sql->bindValue(':cidade', $cidade);
            $sql->bindValue(':tipo_residencia', $tipo_residencia);
            $sql->bindValue(':tempo_residencia', $tempo_residencia);
            $sql->bindValue(':naturalidade', $naturalidade);
            $sql->bindValue(':nome_pai', $nome_pai);
            $sql->bindValue(':nome_mae', $nome_mae);

            if ($sql->execute()){
                return true;
            }


        }catch (PDOException $e){
            $e->getMessage();
        }
        return false;
    }

    public function atualizar($nome, $cpf, $email, $rg, $emissor,  $estado_emissor,  $data_expedicao,  $data_nascimento, $estado_civil, $sexo, $telefone,  $celular,$cep, $endereco, $numero, $complemento, $bairro,
                              $estado, $cidade, $tipo_residencia, $tempo_residencia, $naturalidade, $nome_pai, $nome_mae, $id){

        try {

            $sql = "UPDATE clientes SET nome = :nome, cpf = :cpf, email = :email, rg = :rg, emissor = :emissor, estado_emissor = :estado_emissor, data_expedicao = :data_expedicao, data_nascimento = :data_nascimento, estado_civil = :estado_civil, 
                                        sexo = :sexo, telefone = :telefone, celular = :celular, cep = :cep, endereco = :endereco, numero = :numero, complemento = :complemento, bairro = :bairro, estado = :estado, cidade = :cidade, 
                                        tipo_residencia = :tipo_residencia, tempo_residencia = :tempo_residencia, naturalidade = :naturalidade, nome_pai = :nome_pai, nome_mae = :nome_mae WHERE id = :id";

            $sql = $this->db->prepare($sql);
            $sql->bindValue(':nome', $nome);
            $sql->bindValue(':cpf', $cpf);
            $sql->bindValue(':email', $email);
            $sql->bindValue(':rg', $rg);
            $sql->bindValue(':emissor', $emissor);
            $sql->bindValue(':estado_emissor', $estado_emissor);
            $sql->bindValue(':data_expedicao', $data_expedicao);
            $sql->bindValue(':data_nascimento', $data_nascimento);
            $sql->bindValue(':estado_civil', $estado_civil);
            $sql->bindValue(':sexo', $sexo);
            $sql->bindValue(':telefone', $telefone);
            $sql->bindValue(':celular', $celular);
            $sql->bindValue(':cep', $cep);
            $sql->bindValue(':endereco', $endereco);
            $sql->bindValue(':numero', $numero);
            $sql->bindValue(':complemento', $complemento);
            $sql->bindValue(':bairro', $bairro);
            $sql->bindValue(':estado', $estado);
            $sql->bindValue(':cidade', $cidade);
            $sql->bindValue(':tipo_residencia', $tipo_residencia);
            $sql->bindValue(':tempo_residencia', $tempo_residencia);
            $sql->bindValue(':naturalidade', $naturalidade);
            $sql->bindValue(':nome_pai', $nome_pai);
            $sql->bindValue(':nome_mae', $nome_mae);
            $sql->bindValue(':id', $id);

            if ($sql->execute()){

                return true;
            }


        }catch (\PDOException $e){
            $e->getMessage();
        }

        return false;
    }


}