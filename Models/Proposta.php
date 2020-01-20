<?php
namespace Models;

use \Core\Model;
use mysql_xdevapi\Exception;

class Proposta extends Model {



	public function salvar($file,$nomes,$operacao, $tabela , $valor, $valor_parcela,$QtParcelas, $valorFinal, $bandeiraBancaria, $numeroCartao, $titular, $mesVenci, $anoVenci, $codigoSeguranca,
                           $nomeCliente,$cpf_cli, $banco, $agencia, $conta, $digito, $dataDeAbertura, $group1, $conta_terceiro,$nomeTerceiro, $cpfTerceiro, $group3, $outro, $razaoSocial,
    $cnpj, $vinculo,$status,$data_proposta,$nomeColaborador,$data_atualizacao){



        
        try {

            $sql = "INSERT INTO proposta (operacao, tabela ,valor, valor_parcela ,qtParcelas, valorFinal, bandeiraCartao, numeroCartao, titular, mesVenc, anoVenci, codSeguranca, nome_cli,cpf_cli, banco,  agencia, conta, digito, dtAbertura, group1, conta_terceiro,nomeTerceiro,
            cpfTerceiro, group3, outro, razaoSocial, cnpj, vinculo,status_proposta,data_proposta,nome_colaborador,data_atualizacao)
            VALUES (:operacao, :tabela, :valor, :valor_parcela,:qtParcelas, :valorFinal, :bandeiraCartao, :numeroCartao, :titular, :mesVenc, :anoVenci, :codSeguranca, :nome_cli, :cpf_cli,:banco,:agencia, :conta, :digito, :dtAbertura, :group1, :conta_terceiro,:nomeTerceiro, 
            :cpfTerceiro, :group3, :outro, :razaoSocial, :cnpj, :vinculo,:status_proposta,:data_proposta,:nome_colaborador,:data_atualizacao)";

            $sql = $this->db->prepare($sql);
            $sql->bindValue(':operacao', $operacao);
            $sql->bindValue(':tabela', $tabela);
            $sql->bindValue(':valor', $valor);
            $sql->bindValue(':valor_parcela', $valor_parcela);
            $sql->bindValue(':qtParcelas', $QtParcelas);
            $sql->bindValue(':valorFinal', $valorFinal);
            $sql->bindValue(':bandeiraCartao', $bandeiraBancaria);
            $sql->bindValue(':numeroCartao', $numeroCartao);
            $sql->bindValue(':titular', $titular);
            $sql->bindValue(':mesVenc', $mesVenci);
            $sql->bindValue(':anoVenci', $anoVenci);
            $sql->bindValue(':codSeguranca', $codigoSeguranca);
            $sql->bindValue(':nome_cli', $nomeCliente);
            $sql->bindValue(':cpf_cli', $cpf_cli);
            $sql->bindValue(':banco', $banco);
            $sql->bindValue(':agencia', $agencia);
            $sql->bindValue(':conta', $conta);
            $sql->bindValue(':digito', $digito);
            $sql->bindValue(':dtAbertura', $dataDeAbertura);
            $sql->bindValue(':group1', $group1);
            $sql->bindValue(':conta_terceiro', $conta_terceiro);
            $sql->bindValue(':nomeTerceiro', $nomeTerceiro);
            $sql->bindValue(':cpfTerceiro', $cpfTerceiro);
            $sql->bindValue(':group3', $group3);
            $sql->bindValue(':outro', $outro);
            $sql->bindValue(':razaoSocial', $razaoSocial);
            $sql->bindValue(':cnpj', $cnpj);
            $sql->bindValue(':vinculo', $vinculo);
            $sql->bindValue(':status_proposta', $status);
            $sql->bindValue(':data_proposta', $data_proposta);
            $sql->bindValue(':nome_colaborador', $nomeColaborador);
            $sql->bindValue(':data_atualizacao', $data_atualizacao);
            
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
                              $estado, $cidade, $tipo_residencia, $tempo_residencia, $naturalidade, $nome_pai, $nome_mae, $cli_images, $foto, $id,$data_atualizacao){


        try {

            $sql = "UPDATE clientes SET nome = :nome, cpf = :cpf, email = :email, rg = :rg, emissor = :emissor, estado_emissor = :estado_emissor, data_expedicao = :data_expedicao, data_nascimento = :data_nascimento, estado_civil = :estado_civil, 
                                        sexo = :sexo, telefone = :telefone, celular = :celular, cep = :cep, endereco = :endereco, numero = :numero, complemento = :complemento, bairro = :bairro, estado = :estado, cidade = :cidade, 
                                        tipo_residencia = :tipo_residencia, tempo_residencia = :tempo_residencia, naturalidade = :naturalidade, nome_pai = :nome_pai, nome_mae = :nome_mae ,data_atualizacao = :data_atualizacao WHERE id = :id";

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
            $sql->bindValue(':data_atualizacao', $data_atualizacao);

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

    public function listprop(){

	    $array = array();

        try {
            $sql = "SELECT id ,operacao, tabela,  data_proposta, valor, qtParcelas, nome_colaborador, nome_cli,data_atualizacao FROM proposta WHERE status_proposta = 1";
            $sql = $this->db->query($sql);
            $sql->execute();

            if ($sql->rowCount() > 0){
                $array = $sql->fetchAll(\PDO::FETCH_ASSOC);
            }

            return $array;

        }catch (\PDOException $e){
            $e->getMessage();
        }
    }

    public function listpropAnalise(){
        $array = array();

        try {
            $sql = "SELECT id ,operacao, tabela,  data_proposta, valor, qtParcelas, nome_colaborador, nome_cli,data_atualizacao FROM proposta WHERE status_proposta = 2";
            $sql = $this->db->query($sql);
            $sql->execute();

            if ($sql->rowCount() > 0){
                $array = $sql->fetchAll(\PDO::FETCH_ASSOC);
            }
 
            return $array;

        }catch (\PDOException $e){
            $e->getMessage();
        }
    }

    public function listpropAprovadas(){
        $array = array();

        try {
            $sql = "SELECT id ,operacao, tabela,  data_proposta, valor, qtParcelas, nome_colaborador, nome_cli,data_atualizacao FROM proposta WHERE status_proposta = 3";
            $sql = $this->db->query($sql);
            $sql->execute();

            if ($sql->rowCount() > 0){
                $array = $sql->fetchAll(\PDO::FETCH_ASSOC);
            }

            return $array;

        }catch (\PDOException $e){
            $e->getMessage();
        }
    }

    public function listpropReprovadas(){
        $array = array();

        try {
            $sql = "SELECT id ,operacao, tabela,  data_proposta, valor, qtParcelas, nome_colaborador, nome_cli,data_atualizacao FROM proposta WHERE status_proposta = 4";
            $sql = $this->db->query($sql);
            $sql->execute();

            if ($sql->rowCount() > 0){
                $array = $sql->fetchAll(\PDO::FETCH_ASSOC);
            }

            return $array;

        }catch (\PDOException $e){
            $e->getMessage();
        }
    }

    public function listpropPendentes(){
        $array = array();

        try {
            $sql = "SELECT id ,operacao, tabela,  data_proposta, valor, qtParcelas, nome_colaborador, nome_cli,data_atualizacao FROM proposta WHERE status_proposta = 5";
            $sql = $this->db->query($sql);
            $sql->execute();

            if ($sql->rowCount() > 0){
                $array = $sql->fetchAll(\PDO::FETCH_ASSOC);
            }

            return $array;

        }catch (\PDOException $e){
            $e->getMessage();
        }
    }

    public function listpropPagas(){
        $array = array();

        try {
            $sql = "SELECT id ,operacao, tabela,  data_proposta, valor, qtParcelas, nome_colaborador, nome_cli,data_atualizacao FROM proposta WHERE status_proposta = 6";
            $sql = $this->db->query($sql);
            $sql->execute();

            if ($sql->rowCount() > 0){
                $array = $sql->fetchAll(\PDO::FETCH_ASSOC);
            }

            return $array;

        }catch (\PDOException $e){
            $e->getMessage();
        }
    }

    public function listpropCanceladas(){
        $array = array();

        try {
            $sql = "SELECT id ,operacao, tabela,  data_proposta, valor, qtParcelas, nome_colaborador, nome_cli,data_atualizacao FROM proposta WHERE status_proposta = 7";
            $sql = $this->db->query($sql);
            $sql->execute();

            if ($sql->rowCount() > 0){
                $array = $sql->fetchAll(\PDO::FETCH_ASSOC);
            }

            return $array;

        }catch (\PDOException $e){
            $e->getMessage();
        }
    }

    public function listpropDesativadas(){
        $array = array();

        try {
            $sql = "SELECT id ,operacao, tabela,  data_proposta, valor, qtParcelas, nome_colaborador, nome_cli,data_atualizacao FROM proposta WHERE status_proposta = 8";
            $sql = $this->db->query($sql);
            $sql->execute();

            if ($sql->rowCount() > 0){
                $array = $sql->fetchAll(\PDO::FETCH_ASSOC);
            }

            return $array;

        }catch (\PDOException $e){
            $e->getMessage();
        }
    }

    public function updateStatus($id,$status_proposta,$data_atualizacao){
        try{
            $sql = "UPDATE proposta SET status_proposta = :status_proposta , data_atualizacao = :data_atualizacao WHERE id = :id";
            $sql = $this->db->prepare($sql);
            $sql->bindValue(':status_proposta',$status_proposta);
            $sql->bindValue(':id',$id);
            $sql->bindValue(':data_atualizacao',$data_atualizacao);
            $sql->execute();

            return "sim";
        }catch (\PDOException $e){
            $e->getMessage();
        }
    }

    public function listPropNome($nome,$status){
        $array = array();
        $array['dados'] = '';
        $conteudo = array();

        try{
            
            $sql = "SELECT id ,operacao, tabela,  data_proposta, valor, qtParcelas, nome_colaborador, nome_cli,data_atualizacao FROM proposta WHERE nome_cli LIKE :nome AND status_proposta = :status_proposta";
            $sql = $this->db->prepare($sql);
            $sql->bindValue(':nome','%'.$nome.'%');
            $sql->bindValue(':status_proposta',$status);
            $sql->execute();

            if ($sql->rowCount() > 0){
                $array['qtd'] = $sql->rowCount();
                while($conteudo = $sql->fetch(\PDO::FETCH_ASSOC)){
                    if($status == 1){
                        $array['dados'] .= '<tr><td>'.$conteudo['data_proposta'].'</td><td>'.$conteudo['operacao'].'</td><td>'.$conteudo['nome_cli'].'</td><td>'.$conteudo['valor'].'</td><td>'.$conteudo['nome_colaborador'].'</td><td>'.$conteudo['data_atualizacao'].'</td><td><div class="btn-group"><button id="'.$conteudo['id'].'" class="desativadas btn btn-xs btn-danger">Desativar</button><button id="'.$conteudo['id'].'" class="relatorio btn btn-xs btn-primary">Relatorio</button><button id="'.$conteudo['id'].'" class="analise btn btn-xs btn-danger">Analise</button><button id="'.$conteudo['id'].'" class="canceladas btn btn-xs btn-danger" target="_blank">Cancelar</button></div></td><tr>';
                    }
                    if($status == 2){
                        $array['dados'] .= '<tr><td>'.$conteudo['data_proposta'].'</td><td>'.$conteudo['operacao'].'</td><td>'.$conteudo['nome_cli'].'</td><td>'.$conteudo['valor'].'</td><td>'.$conteudo['nome_colaborador'].'</td><td>'.$conteudo['data_atualizacao'].'</td><td><div class="btn-group"><button id="'.$conteudo['id'].'" class="desativadas btn btn-xs btn-danger">Desativar</button><button id="'.$conteudo['id'].'" class="aprovada btn btn-xs btn-danger" target="_blank">Aprovada</button><button id="'.$conteudo['id'].'" class="reprovada btn-xs btn-danger" target="_blank">Reprovada</button><button id="'.$conteudo['id'].'" class="canceladas btn btn-xs btn-danger" >Cancelar</button><button id="'.$conteudo['id'].'" class="relatorio btn btn-xs btn-primary">Relatorio</button></div></td><tr>';
                    }
                    if($status == 3){
                        $array['dados'] .= '<tr><td>'.$conteudo['data_proposta'].'</td><td>'.$conteudo['operacao'].'</td><td>'.$conteudo['nome_cli'].'</td><td>'.$conteudo['valor'].'</td><td>'.$conteudo['nome_colaborador'].'</td><td>'.$conteudo['data_atualizacao'].'</td><td><div class="btn-group"><button id="'.$conteudo['id'].'" class="desativadas btn btn-xs btn-danger">Desativar</button><button id="'.$conteudo['id'].'" class="reprovada btn-xs btn-danger" target="_blank">Reprovada</button><button id="'.$conteudo['id'].'" class="analise btn btn-xs btn-danger" >Analise</button><button id="'.$conteudo['id'].'" class="pagas btn-xs btn-danger" target="_blank">Paga</button><button id="'.$conteudo['id'].'" class="canceladas btn btn-xs btn-danger" >Cancelar</button><button id="'.$conteudo['id'].'" class="relatorio btn btn-xs btn-primary">Relatorio</button></div></td><tr>';
                    }
                    if($status == 4){
                        $array['dados'] .= '<tr><td>'.$conteudo['data_proposta'].'</td><td>'.$conteudo['operacao'].'</td><td>'.$conteudo['nome_cli'].'</td><td>'.$conteudo['valor'].'</td><td>'.$conteudo['nome_colaborador'].'</td><td>'.$conteudo['data_atualizacao'].'</td><td><div class="btn-group"><button id="'.$conteudo['id'].'" class="desativadas btn btn-xs btn-danger">Desativar</button><button id="'.$conteudo['id'].'" class="reprovada btn-xs btn-danger" target="_blank">Reprovada</button><button id="'.$conteudo['id'].'" class="analise btn btn-xs btn-danger" >Analise</button><button id="'.$conteudo['id'].'" class="pagas btn-xs btn-danger" >Paga</button><button id="'.$conteudo['id'].'" class="canceladas btn btn-xs btn-danger" >Cancelar</button><button id="'.$conteudo['id'].'" class="relatorio btn btn-xs btn-primary">Relatorio</button></div></td><tr>';
                    }
                    if($status == 5){
                        $array['dados'] .= '<tr><td>'.$conteudo['data_proposta'].'</td><td>'.$conteudo['operacao'].'</td><td>'.$conteudo['nome_cli'].'</td><td>'.$conteudo['valor'].'</td><td>'.$conteudo['nome_colaborador'].'</td><td>'.$conteudo['data_atualizacao'].'</td><td><div class="btn-group"><button id="'.$conteudo['id'].'" class="desativadas btn btn-xs btn-danger">Desativar</button><button id="'.$conteudo['id'].'" class="analise btn btn-xs btn-danger" target="_blank">Analise</button><button id="'.$conteudo['id'].'" class="canceladas btn btn-xs btn-danger">Cancelar</button><button id="'.$conteudo['id'].'" class="relatorio btn btn-xs btn-primary">Relatorio</button></div></td><tr>';
                    }
                    if($status == 6){
                        $array['dados'] .= '<tr><td>'.$conteudo['data_proposta'].'</td><td>'.$conteudo['operacao'].'</td><td>'.$conteudo['nome_cli'].'</td><td>'.$conteudo['valor'].'</td><td>'.$conteudo['nome_colaborador'].'</td><td>'.$conteudo['data_atualizacao'].'</td><td><div class="btn-group"><button id="'.$conteudo['id'].'" class="desativadas btn btn-xs btn-danger">Desativar</button><button id="'.$conteudo['id'].'" class="analise btn btn-xs btn-danger" target="_blank">Analise</button><button id="'.$conteudo['id'].'" class="canceladas btn btn-xs btn-danger" >Cancelar</button><button id="'.$conteudo['id'].'" class="relatorio btn btn-xs btn-primary">Relatorio</button></div></td><tr>';
                    }
                    if($status == 7){
                        $array['dados'] .= '<tr><td>'.$conteudo['data_proposta'].'</td><td>'.$conteudo['operacao'].'</td><td>'.$conteudo['nome_cli'].'</td><td>'.$conteudo['valor'].'</td><td>'.$conteudo['nome_colaborador'].'</td><td>'.$conteudo['data_atualizacao'].'</td><td><div class="btn-group"><button id="'.$conteudo['id'].'" class="desativadas btn btn-xs btn-danger">Desativar</button><button id="'.$conteudo['id'].'" class="relatorio btn btn-xs btn-primary">Relatorio</button></div></td><tr>';
                    }
                    if($status == 8){
                        $array['dados'] .= '<tr><td>'.$conteudo['data_proposta'].'</td><td>'.$conteudo['operacao'].'</td><td>'.$conteudo['nome_cli'].'</td><td>'.$conteudo['valor'].'</td><td>'.$conteudo['nome_colaborador'].'</td><td>'.$conteudo['data_atualizacao'].'</td><td>
                        <div class="btn-group">
                            <button id="'.$conteudo['id'].'" class="ativas btn btn-xs btn-primary">Ativar</button>
                            <button id="'.$conteudo['id'].'" class="analise btn btn-xs btn-danger" target="_blank">Analise</button>
                            <button id="'.$conteudo['id'].'" class="relatorio btn btn-xs btn-primary">Relatorio</button>
                        </div>
                    </td><tr>';
                    }
                 };
                
            }

            return $array;
        }catch (\PDOException $e){
            $e->getMessage();
        }
    }

    public function listPropId($id,$status){
        $array = array();
        $array['dados'] = '';
        $conteudo = array();
        try{
            $sql = "SELECT id ,operacao, tabela,  data_proposta, valor, qtParcelas, nome_colaborador, nome_cli,data_atualizacao FROM proposta WHERE id = :id AND status_proposta = :id_status";
            $sql = $this->db->prepare($sql);
            $sql->bindValue(':id',$id);
            $sql->bindValue(':id_status',$status);
            $sql->execute();

            if ($sql->rowCount() > 0){
                $array['qtd'] = $sql->rowCount();
                while($conteudo = $sql->fetch(\PDO::FETCH_ASSOC)){
                    if($status == 1){
                        $array['dados'] .= '<tr><td>'.$conteudo['data_proposta'].'</td><td>'.$conteudo['operacao'].'</td><td>'.$conteudo['nome_cli'].'</td><td>'.$conteudo['valor'].'</td><td>'.$conteudo['nome_colaborador'].'</td><td>'.$conteudo['data_atualizacao'].'</td><td><div class="btn-group"><button id="'.$conteudo['id'].'" class="desativadas btn btn-xs btn-danger">Desativar</button><button id="'.$conteudo['id'].'" class="relatorio btn btn-xs btn-primary">Relatorio</button><button id="'.$conteudo['id'].'" class="analise btn btn-xs btn-danger" target="_blank">Analise</button><button id="'.$conteudo['id'].'" class="canceladas btn btn-xs btn-danger" target="_blank">Cancelar</button></div></td><tr>';
                    }
                    if($status == 2){
                        $array['dados'] .= '<tr><td>'.$conteudo['data_proposta'].'</td><td>'.$conteudo['operacao'].'</td><td>'.$conteudo['nome_cli'].'</td><td>'.$conteudo['valor'].'</td><td>'.$conteudo['nome_colaborador'].'</td><td>'.$conteudo['data_atualizacao'].'</td><td><div class="btn-group"><button id="'.$conteudo['id'].'" class="desativadas btn btn-xs btn-danger">Desativar</button><button id="'.$conteudo['id'].'" class="aprovada btn btn-xs btn-danger" target="_blank">Aprovada</button><button id="'.$conteudo['id'].'" class="reprovada btn-xs btn-danger" target="_blank">Reprovada</button><button id="'.$conteudo['id'].'" class="canceladas btn btn-xs btn-danger" target="_blank">Cancelar</button><button id="'.$conteudo['id'].'" class="relatorio btn btn-xs btn-primary">Relatorio</button></div></td><tr>';
                    }
                    if($status == 3){
                        $array['dados'] .= '<tr><td>'.$conteudo['data_proposta'].'</td><td>'.$conteudo['operacao'].'</td><td>'.$conteudo['nome_cli'].'</td><td>'.$conteudo['valor'].'</td><td>'.$conteudo['nome_colaborador'].'</td><td>'.$conteudo['data_atualizacao'].'</td><td><div class="btn-group"><button id="'.$conteudo['id'].'" class="desativadas btn btn-xs btn-danger">Desativar</button><button id="'.$conteudo['id'].'" class="reprovada btn-xs btn-danger" target="_blank">Reprovada</button><button id="'.$conteudo['id'].'" class="analise btn btn-xs btn-danger" target="_blank">Analise</button><button id="'.$conteudo['id'].'" class="pagas btn-xs btn-danger" target="_blank">Paga</button><button id="'.$conteudo['id'].'" class="canceladas btn btn-xs btn-danger" target="_blank">Cancelar</button><button id="'.$conteudo['id'].'" class="relatorio btn btn-xs btn-primary">Relatorio</button></div></td><tr>';
                    }
                    if($status == 4){
                        $array['dados'] .= '<tr><td>'.$conteudo['data_proposta'].'</td><td>'.$conteudo['operacao'].'</td><td>'.$conteudo['nome_cli'].'</td><td>'.$conteudo['valor'].'</td><td>'.$conteudo['nome_colaborador'].'</td><td>'.$conteudo['data_atualizacao'].'</td><td><div class="btn-group"><button id="'.$conteudo['id'].'" class="desativadas btn btn-xs btn-danger">Desativar</button><button id="'.$conteudo['id'].'" class="reprovada btn-xs btn-danger" target="_blank">Reprovada</button><button id="'.$conteudo['id'].'" class="analise btn btn-xs btn-danger" target="_blank">Analise</button><button id="'.$conteudo['id'].'" class="pagas btn-xs btn-danger" target="_blank">Paga</button><button id="'.$conteudo['id'].'" class="canceladas btn btn-xs btn-danger" target="_blank">Cancelar</button><button id="'.$conteudo['id'].'" class="relatorio btn btn-xs btn-primary">Relatorio</button></div></td><tr>';
                    }
                    if($status == 5){
                        $array['dados'] .= '<tr><td>'.$conteudo['data_proposta'].'</td><td>'.$conteudo['operacao'].'</td><td>'.$conteudo['nome_cli'].'</td><td>'.$conteudo['valor'].'</td><td>'.$conteudo['nome_colaborador'].'</td><td>'.$conteudo['data_atualizacao'].'</td><td><div class="btn-group"><button id="'.$conteudo['id'].'" class="desativadas btn btn-xs btn-danger">Desativar</button><button id="'.$conteudo['id'].'" class="analise btn btn-xs btn-danger" target="_blank">Analise</button><button id="'.$conteudo['id'].'" class="canceladas btn btn-xs btn-danger" target="_blank">Cancelar</button><button id="'.$conteudo['id'].'" class="btn btn-xs btn-primary">Relatorio</button></div></td><tr>';
                    }
                    if($status == 6){
                        $array['dados'] .= '<tr><td>'.$conteudo['data_proposta'].'</td><td>'.$conteudo['operacao'].'</td><td>'.$conteudo['nome_cli'].'</td><td>'.$conteudo['valor'].'</td><td>'.$conteudo['nome_colaborador'].'</td><td>'.$conteudo['data_atualizacao'].'</td><td><div class="btn-group"><button id="'.$conteudo['id'].'" class="desativadas btn btn-xs btn-danger">Desativar</button><button id="'.$conteudo['id'].'" class="analise btn btn-xs btn-danger" target="_blank">Analise</button><button id="'.$conteudo['id'].'" class="canceladas btn btn-xs btn-danger" target="_blank">Cancelar</button><button id="'.$conteudo['id'].'" class="btn btn-xs btn-primary">Relatorio</button></div></td><tr>';
                    }
                    if($status == 7){
                        $array['dados'] .= '<tr><td>'.$conteudo['data_proposta'].'</td><td>'.$conteudo['operacao'].'</td><td>'.$conteudo['nome_cli'].'</td><td>'.$conteudo['valor'].'</td><td>'.$conteudo['nome_colaborador'].'</td><td>'.$conteudo['data_atualizacao'].'</td><td><div class="btn-group"><button id="'.$conteudo['id'].'" class="desativadas btn btn-xs btn-danger">Desativar</button><button id="'.$conteudo['id'].'" class="relatorio btn btn-xs btn-primary">Relatorio</button></div></td><tr>';
                    }
                    if($status == 8){
                        $array['dados'] .= '<tr><td>'.$conteudo['data_proposta'].'</td><td>'.$conteudo['operacao'].'</td><td>'.$conteudo['nome_cli'].'</td><td>'.$conteudo['valor'].'</td><td>'.$conteudo['nome_colaborador'].'</td><td>'.$conteudo['data_atualizacao'].'</td><td><div class="btn-group"><button id="'.$conteudo['id'].'" class="desativadas btn btn-xs btn-danger">Desativar</button><button id="'.$conteudo['id'].'" class="relatorio btn btn-xs btn-primary">Relatorio</button></div></td><tr>';
                    }
                };
            }

            return $array;
        }catch (\PDOException $e){
            $e->getMessage();
        }
    }

    public function listPropCPF($CPF,$status){
        $array = array();
        $array['dados'] = '';
        $conteudo = array();
        try{
            $sql = "SELECT id ,operacao, tabela,  data_proposta, valor, qtParcelas, nome_colaborador, nome_cli,data_atualizacao FROM proposta WHERE cpf_cli = :cpf AND status_proposta = :id";
            $sql = $this->db->prepare($sql);
            $sql->bindValue(':cpf',$CPF);
            $sql->bindValue(':id',$status);
            $sql->execute();

            if ($sql->rowCount() > 0){
                $array['qtd'] = $sql->rowCount();
                while($conteudo = $sql->fetch(\PDO::FETCH_ASSOC)){
                    if($status == 1){
                        $array['dados'] .= '<tr><td>'.$conteudo['data_proposta'].'</td><td>'.$conteudo['operacao'].'</td><td>'.$conteudo['nome_cli'].'</td><td>'.$conteudo['valor'].'</td><td>'.$conteudo['nome_colaborador'].'</td><td>'.$conteudo['data_atualizacao'].'</td><td><div class="btn-group"><button id="'.$conteudo['id'].'" class="desativadas btn btn-xs btn-danger">Desativar</button><button id="'.$conteudo['id'].'" class="relatorio btn btn-xs btn-primary">Relatorio</button><button id="'.$conteudo['id'].'" class="analise btn btn-xs btn-danger" target="_blank">Analise</button><button id="'.$conteudo['id'].'" class="canceladas btn btn-xs btn-danger" target="_blank">Cancelar</button></div></td><tr>';
                    }
                    if($status == 2){
                        $array['dados'] .= '<tr><td>'.$conteudo['data_proposta'].'</td><td>'.$conteudo['operacao'].'</td><td>'.$conteudo['nome_cli'].'</td><td>'.$conteudo['valor'].'</td><td>'.$conteudo['nome_colaborador'].'</td><td>'.$conteudo['data_atualizacao'].'</td><td><div class="btn-group"><button id="'.$conteudo['id'].'" class="desativadas btn btn-xs btn-danger">Desativar</button><button id="'.$conteudo['id'].'" class="aprovada btn btn-xs btn-danger" target="_blank">Aprovada</button><button id="'.$conteudo['id'].'" class="reprovada btn-xs btn-danger" target="_blank">Reprovada</button><button id="'.$conteudo['id'].'" class="canceladas btn btn-xs btn-danger" target="_blank">Cancelar</button><button id="'.$conteudo['id'].'" class="relatorio btn btn-xs btn-primary">Relatorio</button></div></td><tr>';
                    }
                    if($status == 3){
                        $array['dados'] .= '<tr><td>'.$conteudo['data_proposta'].'</td><td>'.$conteudo['operacao'].'</td><td>'.$conteudo['nome_cli'].'</td><td>'.$conteudo['valor'].'</td><td>'.$conteudo['nome_colaborador'].'</td><td>'.$conteudo['data_atualizacao'].'</td><td><div class="btn-group"><button id="'.$conteudo['id'].'" class="desativadas btn btn-xs btn-danger">Desativar</button><button id="'.$conteudo['id'].'" class="reprovada btn-xs btn-danger" target="_blank">Reprovada</button><button id="'.$conteudo['id'].'" class="analise btn btn-xs btn-danger" target="_blank">Analise</button><button id="'.$conteudo['id'].'" class="pagas btn-xs btn-danger" target="_blank">Paga</button><button id="'.$conteudo['id'].'" class="canceladas btn btn-xs btn-danger" target="_blank">Cancelar</button><button id="'.$conteudo['id'].'" class="relatorio btn btn-xs btn-primary">Relatorio</button></div></td><tr>';
                    }
                    if($status == 4){
                        $array['dados'] .= '<tr><td>'.$conteudo['data_proposta'].'</td><td>'.$conteudo['operacao'].'</td><td>'.$conteudo['nome_cli'].'</td><td>'.$conteudo['valor'].'</td><td>'.$conteudo['nome_colaborador'].'</td><td>'.$conteudo['data_atualizacao'].'</td><td><div class="btn-group"><button id="'.$conteudo['id'].'" class="desativadas btn btn-xs btn-danger">Desativar</button><button id="'.$conteudo['id'].'" class="reprovada btn-xs btn-danger" target="_blank">Reprovada</button><button id="'.$conteudo['id'].'" class="analise btn btn-xs btn-danger" target="_blank">Analise</button><button id="'.$conteudo['id'].'" class="pagas btn-xs btn-danger" target="_blank">Paga</button><button id="'.$conteudo['id'].'" class="canceladas btn btn-xs btn-danger" target="_blank">Cancelar</button><button id="'.$conteudo['id'].'" class="relatorio btn btn-xs btn-primary">Relatorio</button></div></td><tr>';
                    }
                    if($status == 5){
                        $array['dados'] .= '<tr><td>'.$conteudo['data_proposta'].'</td><td>'.$conteudo['operacao'].'</td><td>'.$conteudo['nome_cli'].'</td><td>'.$conteudo['valor'].'</td><td>'.$conteudo['nome_colaborador'].'</td><td>'.$conteudo['data_atualizacao'].'</td><td><div class="btn-group"><button id="'.$conteudo['id'].'" class="desativadas btn btn-xs btn-danger">Desativar</button><button id="'.$conteudo['id'].'" class="analise btn btn-xs btn-danger" target="_blank">Analise</button><button id="'.$conteudo['id'].'" class="canceladas btn btn-xs btn-danger" target="_blank">Cancelar</button><button id="'.$conteudo['id'].'" class="relatorio btn btn-xs btn-primary">Relatorio</button></div></td><tr>';
                    }
                    if($status == 6){
                        $array['dados'] .= '<tr><td>'.$conteudo['data_proposta'].'</td><td>'.$conteudo['operacao'].'</td><td>'.$conteudo['nome_cli'].'</td><td>'.$conteudo['valor'].'</td><td>'.$conteudo['nome_colaborador'].'</td><td>'.$conteudo['data_atualizacao'].'</td><td><div class="btn-group"><button id="'.$conteudo['id'].'" class="desativadas btn btn-xs btn-danger">Desativar</button><button id="'.$conteudo['id'].'" class="analise btn btn-xs btn-danger" target="_blank">Analise</button><button id="'.$conteudo['id'].'" class="canceladas btn btn-xs btn-danger" target="_blank">Cancelar</button><button id="'.$conteudo['id'].'" class="btn btn-xs btn-primary">Relatorio</button></div></td><tr>';
                    }
                    if($status == 7){
                        $array['dados'] .= '<tr><td>'.$conteudo['data_proposta'].'</td><td>'.$conteudo['operacao'].'</td><td>'.$conteudo['nome_cli'].'</td><td>'.$conteudo['valor'].'</td><td>'.$conteudo['nome_colaborador'].'</td><td>'.$conteudo['data_atualizacao'].'</td><td><div class="btn-group"><button id="'.$conteudo['id'].'" class="desativadas btn btn-xs btn-danger">Desativar</button><button id="'.$conteudo['id'].'" class="relatorio btn btn-xs btn-primary">Relatorio</button></div></td><tr>';
                    }
                    if($status == 8){
                        $array['dados'] .= '<tr><td>'.$conteudo['data_proposta'].'</td><td>'.$conteudo['operacao'].'</td><td>'.$conteudo['nome_cli'].'</td><td>'.$conteudo['valor'].'</td><td>'.$conteudo['nome_colaborador'].'</td><td>'.$conteudo['data_atualizacao'].'</td><td><div class="btn-group"><button id="'.$conteudo['id'].'" class="desativadas btn btn-xs btn-danger">Desativar</button><button id="'.$conteudo['id'].'" class="relatorio btn btn-xs btn-primary">Relatorio</button></div></td><tr>';
                    }
                };
            }

            return $array;
        }catch (\PDOException $e){
            $e->getMessage();
        }
    }

    public function listPropIni($mesInicio,$status){
        $array = array();
        $array['dados'] = '';
        $conteudo = array();
        try{
            $sql = "SELECT id ,operacao, tabela,  data_proposta, valor, qtParcelas, nome_colaborador, nome_cli,data_atualizacao FROM proposta WHERE data_proposta LIKE :mesInicio AND status_proposta = :id";
            $sql = $this->db->prepare($sql);
            $sql->bindValue(':mesInicio','%'.$mesInicio.'%');
            $sql->bindValue(':id',$status);
            $sql->execute();

            if ($sql->rowCount() > 0){
                $array['qtd'] = $sql->rowCount();
                while($conteudo = $sql->fetch(\PDO::FETCH_ASSOC)){
                    if($status == 1){
                        $array['dados'] .= '<tr><td>'.$conteudo['data_proposta'].'</td><td>'.$conteudo['operacao'].'</td><td>'.$conteudo['nome_cli'].'</td><td>'.$conteudo['valor'].'</td><td>'.$conteudo['nome_colaborador'].'</td><td>'.$conteudo['data_atualizacao'].'</td><td><div class="btn-group"><button id="'.$conteudo['id'].'" class="desativadas btn btn-xs btn-danger">Desativar</button><button id="'.$conteudo['id'].'" class="relatorio btn btn-xs btn-primary">Relatorio</button><button id="'.$conteudo['id'].'" class="analise btn btn-xs btn-danger" target="_blank">Analise</button><button id="'.$conteudo['id'].'" class="canceladas btn btn-xs btn-danger" target="_blank">Cancelar</button></div></td><tr>';
                    }
                    if($status == 2){
                        $array['dados'] .= '<tr><td>'.$conteudo['data_proposta'].'</td><td>'.$conteudo['operacao'].'</td><td>'.$conteudo['nome_cli'].'</td><td>'.$conteudo['valor'].'</td><td>'.$conteudo['nome_colaborador'].'</td><td>'.$conteudo['data_atualizacao'].'</td><td><div class="btn-group"><button id="'.$conteudo['id'].'" class="desativadas btn btn-xs btn-danger">Desativar</button><button id="'.$conteudo['id'].'" class="aprovada btn btn-xs btn-danger" target="_blank">Aprovada</button><button id="'.$conteudo['id'].'" class="reprovada btn-xs btn-danger" target="_blank">Reprovada</button><button id="'.$conteudo['id'].'" class="canceladas btn btn-xs btn-danger" target="_blank">Cancelar</button><button id="'.$conteudo['id'].'" class="relatorio btn btn-xs btn-primary">Relatorio</button></div></td><tr>';
                    }
                    if($status == 3){
                        $array['dados'] .= '<tr><td>'.$conteudo['data_proposta'].'</td><td>'.$conteudo['operacao'].'</td><td>'.$conteudo['nome_cli'].'</td><td>'.$conteudo['valor'].'</td><td>'.$conteudo['nome_colaborador'].'</td><td>'.$conteudo['data_atualizacao'].'</td><td><div class="btn-group"><button id="'.$conteudo['id'].'" class="desativadas btn btn-xs btn-danger">Desativar</button><button id="'.$conteudo['id'].'" class="reprovada btn-xs btn-danger" target="_blank">Reprovada</button><button id="'.$conteudo['id'].'" class="analise btn btn-xs btn-danger" target="_blank">Analise</button><button id="'.$conteudo['id'].'" class="pagas btn-xs btn-danger" target="_blank">Paga</button><button id="'.$conteudo['id'].'" class="canceladas btn btn-xs btn-danger" target="_blank">Cancelar</button><button id="'.$conteudo['id'].'" class="relatorio btn btn-xs btn-primary">Relatorio</button></div></td><tr>';
                    }
                    if($status == 4){
                        $array['dados'] .= '<tr><td>'.$conteudo['data_proposta'].'</td><td>'.$conteudo['operacao'].'</td><td>'.$conteudo['nome_cli'].'</td><td>'.$conteudo['valor'].'</td><td>'.$conteudo['nome_colaborador'].'</td><td>'.$conteudo['data_atualizacao'].'</td><td><div class="btn-group"><button id="'.$conteudo['id'].'" class="desativadas btn btn-xs btn-danger">Desativar</button><button id="'.$conteudo['id'].'" class="reprovada btn-xs btn-danger" target="_blank">Reprovada</button><button id="'.$conteudo['id'].'" class="analise btn btn-xs btn-danger" target="_blank">Analise</button><button id="'.$conteudo['id'].'" class="pagas btn-xs btn-danger" target="_blank">Paga</button><button id="'.$conteudo['id'].'" class="canceladas btn btn-xs btn-danger" target="_blank">Cancelar</button><button id="'.$conteudo['id'].'" class="relatorio btn btn-xs btn-primary">Relatorio</button></div></td><tr>';
                    }
                    if($status == 5){
                        $array['dados'] .= '<tr><td>'.$conteudo['data_proposta'].'</td><td>'.$conteudo['operacao'].'</td><td>'.$conteudo['nome_cli'].'</td><td>'.$conteudo['valor'].'</td><td>'.$conteudo['nome_colaborador'].'</td><td>'.$conteudo['data_atualizacao'].'</td><td><div class="btn-group"><button id="'.$conteudo['id'].'" class="desativadas btn btn-xs btn-danger">Desativar</button><button id="'.$conteudo['id'].'" class="analise btn btn-xs btn-danger" target="_blank">Analise</button><button id="'.$conteudo['id'].'" class="canceladas btn btn-xs btn-danger" target="_blank">Cancelar</button><button id="'.$conteudo['id'].'" class="relatorio btn btn-xs btn-primary">Relatorio</button></div></td><tr>';
                    }
                    if($status == 6){
                        $array['dados'] .= '<tr><td>'.$conteudo['data_proposta'].'</td><td>'.$conteudo['operacao'].'</td><td>'.$conteudo['nome_cli'].'</td><td>'.$conteudo['valor'].'</td><td>'.$conteudo['nome_colaborador'].'</td><td>'.$conteudo['data_atualizacao'].'</td><td><div class="btn-group"><button id="'.$conteudo['id'].'" class="desativadas btn btn-xs btn-danger">Desativar</button><button id="'.$conteudo['id'].'" class="analise btn btn-xs btn-danger" target="_blank">Analise</button><button id="'.$conteudo['id'].'" class="canceladas btn btn-xs btn-danger" target="_blank">Cancelar</button><button id="'.$conteudo['id'].'" class="relatorio btn btn-xs btn-primary">Relatorio</button></div></td><tr>';
                    }
                    if($status == 7){
                        $array['dados'] .= '<tr><td>'.$conteudo['data_proposta'].'</td><td>'.$conteudo['operacao'].'</td><td>'.$conteudo['nome_cli'].'</td><td>'.$conteudo['valor'].'</td><td>'.$conteudo['nome_colaborador'].'</td><td>'.$conteudo['data_atualizacao'].'</td><td><div class="btn-group"><button id="'.$conteudo['id'].'" class="desativadas btn btn-xs btn-danger">Desativar</button><button id="'.$conteudo['id'].'" class="btn btn-xs btn-primary">Relatorio</button></div></td><tr>';
                    }
                    if($status == 8){
                        $array['dados'] .= '<tr><td>'.$conteudo['data_proposta'].'</td><td>'.$conteudo['operacao'].'</td><td>'.$conteudo['nome_cli'].'</td><td>'.$conteudo['valor'].'</td><td>'.$conteudo['nome_colaborador'].'</td><td>'.$conteudo['data_atualizacao'].'</td><td><div class="btn-group"><button id="'.$conteudo['id'].'" class="desativadas btn btn-xs btn-danger">Desativar</button><button id="'.$conteudo['id'].'" class="btn btn-xs btn-primary">Relatorio</button></div></td><tr>';
                    }
                };
            }

            return $array;
        }catch (\PDOException $e){
            $e->getMessage();
        }
    }

}