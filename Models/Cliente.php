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

            }

            $sql = "SELECT id, url FROM imagemCliente where id_cliente = :id";
            $sql = $this->db->prepare($sql);
            $sql->bindValue(':id', $id);
            $sql->execute();


            $array['images'] = array();
            if ($sql->rowCount() > 0){
               $imgs = $sql->fetchAll(\PDO::FETCH_ASSOC);

                foreach ($imgs as $item){
                    $array['images'][$item['id']] = BASE_URL.'fotos/'.$item['url'];
                }

            }else{
                $array['images'] = BASE_URL.'fotos/sem-foto.gif';
            }

            return $array;

        }catch (\PDOException $e){
            $e->getMessage();
        }

        return $array;

    }

	public function salvar($nome, $cpf, $email, $rg, $emissor, $estado_emissor, $data_expedicao, $data_nascimento, $estado_civil, $sexo, $telefone, $celular, $cep, $endereco, $numero,
                           $complemento, $bairro, $estado, $cidade, $tipo_residencia, $tempo_residencia, $naturalidade, $nome_pai, $nome_mae, $foto){

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

           $id = $this->db->lastInsertId();

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


        }catch (PDOException $e){
            $e->getMessage();
        }
        return false;
    }

    public function addClientImage($id, $tmp_name, $type){

        switch ($type){
            case 'image/jpg';
            case 'image/jpeg';
                $o_img = imagecreatefromjpeg($tmp_name);
                break;
            case 'image/png';
                $o_img = imagecreatefrompng($tmp_name);
                break;

        }

        if (!empty($o_img)){

            $width = 460;
            $heigth = 400;
            $ratio = ($width / $heigth);

            list($o_width, $o_heigth) = getimagesize($tmp_name);

            $o_ratio = ($o_width / $o_heigth);

            if ($ratio > $o_ratio){
                $img_w = ($heigth * $o_ratio);
                $img_h = $heigth;
            }else{
                $img_h = ($width / $o_ratio);
                $img_w = $width;
            }

            if($img_w < $width){
                $img_w = $width;
                $img_h = ($img_w / $o_ratio);
            }
            if ($img_h < $heigth){
                $img_h = $heigth;
                $img_w = ($img_h * $o_ratio);
            }

            $px = 0;
            $py = 0;

            if ($img_w > $width){
                $px = ($img_w  - $width) / 2;
            }

            if ($img_h > $heigth){
                $py = ($img_h - $heigth) / 2;
            }

            $img = imagecreatetruecolor($width, $heigth);
            imagecopyresampled($img, $o_img, -$px, -$py, 0, 0, $img_w, $img_h, $o_width, $o_heigth);

            $filename = md5(time().rand(0,999).rand(0,999)).'.jpg';


            imagejpeg($img, PATH_FOTO.'fotos/'.$filename);

            $sql = "INSERT INTO imagemCliente (id_cliente, url) VALUES (:id_cliente, :url)";
            $sql = $this->db->prepare($sql);
            $sql->bindValue(':id_cliente', $id);
            $sql->bindValue(':url', $filename);
            $sql->execute();
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



    public function buscarCli($textoBusca){
        try {
            $sql = "SELECT id , nome , cpf FROM clientes WHERE nome LIKE :nome";
            $sql = $this->db->prepare($sql);
            $sql->bindValue(':nome', '%'.$textoBusca.'%');
            $sql->execute();

            $retorno = array();
            $retorno['dados'] = '';
            $conteudo = array();
            if ($sql->rowCount() > 0) {
                $retorno['qtd'] = $sql->rowCount();
                while($conteudo= $sql->fetch(\PDO::FETCH_ASSOC)){
                    $retorno['dados'] .= '<br><a  id="'.$conteudo['id'].':'.$conteudo['nome'].':'.$conteudo['cpf'].'" class="busca" >'.$conteudo['nome'].'</a>';
                };
            }
            return $retorno;           
           
        }catch (\PDOException $e){
            $e->getMessage();
        }

    }
}