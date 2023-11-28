<?php

namespace App\Models;

use App\Core\Model;

class Category extends Model
{

     public function show()
     {
          $query = "SELECT * FROM tb_golongan";
          $stmt = $this->db->prepare($query);
          $stmt->execute();

          return $this->selects($stmt);
     }

     public function save()
     {
          $gol_kode = $_POST['gol_kode'];
          $gol_name = $_POST['gol_name'];

          $sql = "INSERT INTO tb_golongan
            SET gol_kode=:gol_kode,  gol_name=:gol_name";
          $stmt = $this->db->prepare($sql);

          $stmt->bindParam(":gol_kode", $gol_kode);
          $stmt->bindParam(":gol_name", $gol_name);
          $stmt->execute();
          }

     public function edit($id)
     {
          $query = "SELECT * FROM tb_golongan WHERE gol_id=:gol_id";
          $stmt = $this->db->prepare($query);

          $stmt->bindParam(":gol_id", $id);
          $stmt->execute();

          return $this->select($stmt);
     }
    
     public function update()
     {
          var_dump($_POST);
          
          $gol_kode = $_POST['gol_kode'];
          $gol_name = $_POST['gol_name'];
           // Debugging
           if (!isset($_POST['id'])) {
          die('id tidak diatur dalam $_POST');
          }

     $id = $_POST['id'];

          $sql = "UPDATE tb_golongan
          SET gol_name=:gol_name, gol_kode=:gol_kode WHERE gol_id=:gol_id";

          $stmt = $this->db->prepare($sql);

          $stmt->bindParam(":gol_kode", $gol_kode);
          $stmt->bindParam(":gol_name", $gol_name);
          $stmt->bindParam(":gol_id", $id);

          $stmt->execute();
     }
     public function delete($id)
     {
          $sql = "DELETE FROM tb_golongan WHERE gol_id=:gol_id";
          $stmt = $this->db->prepare($sql);

          $stmt->bindParam(":gol_id", $id);
          $stmt->execute();
     }

}
