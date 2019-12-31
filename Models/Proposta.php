<?php
namespace Models;

use \Core\Model;
use mysql_xdevapi\Exception;

class Proposta extends Model {



	public function salvar($file,$nomes,$operacao, $tabela , $valor, $QtParcelas, $valorFinal, $bandeiraBancaria, $numeroCartao, $titular, $mesVenci, $anoVenci, $codigoSeguranca,
    $idCliente, $banco, $agencia, $conta, $digito, $dataDeAbertura, $group1, $nomeTerceiro, $cpfTerceiro, $group3, $outro, $razaoSocial,
    $cnpj, $vinculo,$status,$data_proposta,$idColaborador){

        
        try {

            $sql = "INSERT INTO proposta (operacao, tabela ,valor, qtParcelas, valorFinal, bandeiraCartao, numeroCartao, titular, mesVenc, anoVenci, codSeguranca, id_cli, banco,  agencia, conta, digito, dtAbertura, group1, nomeTerceiro,
            cpfTerceiro, group3, outro, razaoSocial, cnpj, vinculo,status_proposta,data_proposta,id_colaborador)
            VALUES (:operacao, :tabela, :valor, :qtParcelas, :valorFinal, :bandeiraCartao, :numeroCartao, :titular, :mesVenc, :anoVenci, :codSeguranca, :id_cli, :banco,:agencia, :conta, :digito, :dtAbertura, :group1, :nomeTerceiro, 
            :cpfTerceiro, :group3, :outro, :razaoSocial, :cnpj, :vinculo,:status_proposta,:data_proposta,:id_colaborador)";

            $sql = $this->db->prepare($sql);
            $sql->bindValue(':operacao', $operacao);
            $sql->bindValue(':tabela', $tabela);
            $sql->bindValue(':valor', $valor);
            $sql->bindValue(':qtParcelas', $QtParcelas);
            $sql->bindValue(':valorFinal', $valorFinal);
            $sql->bindValue(':bandeiraCartao', $bandeiraBancaria);
            $sql->bindValue(':numeroCartao', $numeroCartao);
            $sql->bindValue(':titular', $titular);
            $sql->bindValue(':mesVenc', $mesVenci);
            $sql->bindValue(':anoVenci', $anoVenci);
            $sql->bindValue(':codSeguranca', $codigoSeguranca);
            $sql->bindValue(':id_cli', $idCliente);
            $sql->bindValue(':banco', $banco);
            $sql->bindValue(':agencia', $agencia);
            $sql->bindValue(':conta', $conta);
            $sql->bindValue(':digito', $digito);
            $sql->bindValue(':dtAbertura', $dataDeAbertura);
            $sql->bindValue(':group1', $group1);
            $sql->bindValue(':nomeTerceiro', $nomeTerceiro);
            $sql->bindValue(':cpfTerceiro', $cpfTerceiro);
            $sql->bindValue(':group3', $group3);
            $sql->bindValue(':outro', $outro);
            $sql->bindValue(':razaoSocial', $razaoSocial);
            $sql->bindValue(':cnpj', $cnpj);
            $sql->bindValue(':vinculo', $vinculo);
            $sql->bindValue(':status_proposta', $status);
            $sql->bindValue(':data_proposta', $data_proposta);
            $sql->bindValue(':id_colaborador', $idColaborador);
            
            if ($sql->execute()){
                $idProposta = $this->db->lastInsertId();

                //SALVANDO OS ANEXOS E SUAS OBSERVAÇOES ALEM DO CAMINHO
                $a = new Arquivos();
                if($a->salvarPDFProposta($file, $nomes,$idProposta)){

                }
               return true;
            }
        }catch (PDOException $e){
            $e->getMessage();
        }


    }



    public function atualizar($nome, $cpf, $email, $rg, $emissor,  $estado_emissor,  $data_expedicao,  $data_nascimento, $estado_civil, $sexo, $telefone,  $celular,$cep, $endereco, $numero, $complemento, $bairro,
                              $estado, $cidade, $tipo_residencia, $tempo_residencia, $naturalidade, $nome_pai, $nome_mae, $cli_images, $foto, $id){


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

                   $sql = "DELETE FROM imagemCliente WHERE id_cliente = :id";
                   $sql = $this->db->prepare($sql);
                   $sql->bindValue(':id', $id);
                   $sql->execute();

                $allow_images = array(
                    'image/jpeg',
                    'image/png',
                    'image/jpg'
                );
                $tmp_name = $foto['tmp_name'];
                $type = $foto['type'];



                if (in_array($type, $allow_images)){

                    $this->addClientImage($id, $tmp_name, $type);
                }
                   return true;
               }




        }catch (\PDOException $e){
            $e->getMessage();
        }

        return false;
    }

    public function del($id){
        try {

            $sql = "DELETE FROM clientes WHERE id = :id";
            $sql = $this->db->prepare($sql);
            $sql->bindValue(':id', $id);
            if ($sql->execute()){
                return true;
            }
        }catch (\PDOException $e){
            $e->getMessage();
        }
        return false;
    }

    public function listarPropostas(){

	    

}


}