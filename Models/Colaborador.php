<?php
namespace Models;

use \Core\Model;

class Colaborador extends Model {

    private $uid;

  public function isLogged(){
      if(!empty($_SESSION['token'])){
          $token = $_SESSION['token'];

          $sql = "SELECT id from colaborador WHERE :token";
          $sql = $this->db->prepare($sql);
          $sql->bindValue(':token', $token);
          $sql->execute();

          if ($sql->rowCount() > 0){
                $data = $sql->fetch();
                $this->uid = $data['id'];

              return true;
          }

      }

      return false;
  }

  public function validateLogin($email, $senha)
  {
      try {
          $sql = "SELECT id FROM colaborador WHERE email = :email AND senha = :senha ";
          $sql = $this->db->prepare($sql);
          $sql->bindValue(':email', $email);
          $sql->bindValue(':senha', $senha);
          $sql->execute();


          if ($sql->rowCount() > 0) {

              $data = $sql->fetch();
              $token = md5(time() . rand(0, 999) . $data['id'] . time());

              $sql = "UPDATE colaborador SET token = :token WHERE id = :id";
              $sql = $this->db->prepare($sql);
              $sql->bindValue(':token', $token);
              $sql->bindValue(':id', $data['id']);
              $sql->execute();

              $_SESSION['token'] = $token;

              return true;
          }
          }catch(\PDOException $e){
          $e->getMessage();
          return false;
     }

  }

  public function salvar($nome, $email, $senha){
      try {

          $sql = "INSERT INTO colaborador (nome, email,senha) VALUES (:nome, :email, :senha)";
          $sql = $this->db->prepare($sql);
          $sql->bindValue(':nome', $nome);
          $sql->bindValue(':email', $email);
          $sql->bindValue(':senha', $senha);
          $sql->execute();
return true;
      }catch(\PDOException $e){
          $e->getMessage();
      }

      return false;
  }

  public function getAllItems(){
      $array = array();

      $sql = "SELECT * FROM colaborador ORDER BY nome desc";
      $sql = $this->db->query($sql);
      $sql->execute();

      if ($sql->rowCount() > 0){
          $array = $sql->fetchAll(\PDO::FETCH_ASSOC);
      }
      return $array;
  }

  public function get($id){
       $array = array();

          $sql = "SELECT id, nome, email, senha FROM colaborador WHERE id = :id";
          $sql = $this->db->prepare($sql);
          $sql->bindValue(':id', $id);
          $sql->execute();

          if ($sql->rowCount() > 0){
              $array = $sql->fetch(\PDO::FETCH_ASSOC);
          }

          return $array;
  }

  public function update($nome, $email, $senha, $id){


          $sql = "UPDATE colaborador SET nome = :nome, email = :email, senha = :senha WHERE id = :id";
          $sql = $this->db->prepare($sql);
          $sql->bindValue(':nome', $nome);
          $sql->bindValue(':email', $email);
          $sql->bindValue(':senha', $senha);
          $sql->bindValue(':id', $id);
          $sql->execute();
  }

  public function delete($id){

      try {
          $sql = "DELETE FROM  colaborador WHERE  id = :id";
          $sql = $this->db->prepare($sql);
          $sql->bindValue(':id', $id);
          $sql->execute();
          return true;
      }catch (\PDOException $e){
          $e->getMessage();
          return false;
      }
  }


  public function getId(){
      return $this->uid;
  }

}