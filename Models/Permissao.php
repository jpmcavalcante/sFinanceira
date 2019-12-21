<?php
namespace Models;

use \Core\Model;

class Permissao extends Model {



	public function getPermissions($id_permission) {
		$array = array();

		$sql = "SELECT id_permission_item FROM permission_links WHERE id_permission_group = :id_permission";
		$sql = $this->db->prepare($sql);
		$sql->bindValue(':id_permission', $id_permission);
		$sql->execute();

		if ($sql->rowCount() > 0){
		    $data = $sql->fetchAll();
		    $ids = array();

		    foreach ($data as $data_item){
		        $ids[] = $data_item['id_permission_item'];
            }

            $sql = "SELECT slug FROM permission_items WHERE id IN (".implode(',', $ids).")";
            $sql = $this->db->query($sql);

            if ($sql->rowCount() > 0){
                $data = $sql->fetchAll();

                foreach ($data as $data_item){
                    $array[] = $data_item['slug'];
                }
            }

        }

        return $array;
	}

	public function getAllGroups(){

        $array = array();

        $sql = "SELECT permission_groups.*, (SELECT count(colaborador.id) FROM colaborador WHERE colaborador.id_permission = permission_groups.id) as totalColab FROM permission_groups";
        $sql = $this->db->query($sql);
        $sql->execute();

        if ($sql->rowCount() > 0){
            $array = $sql->fetchAll(\PDO::FETCH_ASSOC);
        }

        return $array;
    }

    public function getAllItems(){
        $array = array();

        $sql = "SELECT * FROM permission_items";
        $sql = $this->db->query($sql);
        $sql->execute();

        if ($sql->rowCount() > 0){
            $array = $sql->fetchAll(\PDO::FETCH_ASSOC);
        }

        return $array;
    }

    public function getPermissionGroupName($id_permission){

	    $sql = "SELECT name FROM permission_groups WHERE id = :id";
	    $sql = $this->db->prepare($sql);
	    $sql->bindValue(':id', $id_permission);
	    $sql->execute();

	    if ($sql->rowCount() > 0){
	        $data = $sql->fetch();

	        return $data['name'];
        }else{
	        return '';
        }

    }


    public function canDeleteGroup($id_group){
        try {

	    $sql = "SELECT id FROM colaborador WHERE id_permission = :id_group";
	    $sql = $this->db->prepare($sql);
	    $sql->bindValue(':id_group', $id_group);
	    $sql->execute();

	    if ($sql->rowCount() === 0){

	        $sql = "DELETE FROM permission_links WHERE id_permission_group = :id_group";
	        $sql = $this->db->prepare($sql);
	        $sql->bindValue('id_group', $id_group);
	        $sql->execute();

            $sql = "DELETE FROM permission_groups WHERE id = :id_group";
            $sql = $this->db->prepare($sql);
            $sql->bindValue('id_group', $id_group);
            $sql->execute();
        }
    }catch (\PDOException $e){
         $e->getMessage();
}

    }

    public function addGroup($nome){
        try {
            $sql = "INSERT INTO permission_groups (name) VALUES (:name)";
            $sql = $this->db->prepare($sql);
            $sql->bindValue(':name', $nome);
            $sql->execute();

            return $this->db->lastInsertId();
        }catch (\PDOException $e){
            $e->getMessage();

        }

    }

    public function linkItemToGroup($id_item, $id_group){

        try {
            $sql = "INSERT INTO permission_links (id_permission_group, id_permission_item) VALUES (:id_group, :id_item )";
            $sql = $this->db->prepare($sql);
            $sql->bindValue(':id_group', $id_group);
            $sql->bindValue(':id_item', $id_item);
            $sql->execute();
        }catch (\PDOException $e){
            $e->getMessage();
        }
    }

   public function editName($nome, $id){
       try {
	    $sql = "UPDATE permission_groups SET name = :name WHERE id = :id";
	    $sql = $this->db->prepare($sql);
	    $sql->bindValue(':name', $nome);
	    $sql->bindValue(':id', $id);
	    $sql->execute();
       }catch (\PDOException $e){
           $e->getMessage();
       }
  }

  public function clearLinks($id){
           try {
	    $sql = " DELETE FROM permission_links WHERE id_permission_group = :id";
	    $sql = $this->db->prepare($sql);
	    $sql->bindValue(':id', $id);
	    $sql->execute();
           }catch (\PDOException $e){
               $e->getMessage();
           }
  }

}