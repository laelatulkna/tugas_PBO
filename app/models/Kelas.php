<?php

namespace App\Models;

use App\Core\Model;

class Kelas extends Model
{

      public function show()
      {
            $query = "SELECT * FROM tb_kelas";
            $stmt = $this->db->prepare($query);
            $stmt->execute();

            return $this->selects($stmt);
      }

      public function save()
      {
            $nama_kelas = $_POST['nama_kelas'];
            $warna_kelas = $_POST['warna_kelas'];
            $jumlah_kelas = $_POST['jumlah_kelas'];
            $angkatan_kelas = $_POST['angkatan_kelas'];

            $sql = "INSERT INTO tb_kelas
            SET nama_kelas=:nama_kelas, warna_kelas=:warna_kelas, jumlah_kelas=:jumlah_kelas, angkatan_kelas=:angkatan_kelas";
            $stmt = $this->db->prepare($sql);

            $stmt->bindParam(":nama_kelas", $nama_kelas);
            $stmt->bindParam(":warna_kelas", $warna_kelas);
            $stmt->bindParam(":jumlah_kelas", $jumlah_kelas);
            $stmt->bindParam(":angkatan_kelas", $angkatan_kelas);

            $stmt->execute();
      }

      public function edit($id)
      {
            $query = "SELECT * FROM tb_kelas WHERE id_kelas=:id_kelas";
            $stmt = $this->db->prepare($query);

            $stmt->bindParam(":id_kelas", $id);
            $stmt->execute();

            return $this->select($stmt);
      }

      public function update()
      {
            $nama_kelas = $_POST['nama_kelas'];
            $warna_kelas = $_POST['warna_kelas'];
            $jumlah_kelas = $_POST['jumlah_kelas'];
            $angkatan_kelas = $_POST['angkatan_kelas'];
            $id_kelas = $_POST['id'];

                  $sql = "UPDATE tb_kelas
                  SET nama_kelas=:nama_kelas, warna_kelas=:warna_kelas, jumlah_kelas=:jumlah_kelas, angkatan_kelas=:angkatan_kelas 
                  WHERE id_kelas=:id_kelas";

            $stmt = $this->db->prepare($sql);

            $stmt->bindParam(":nama_kelas", $nama_kelas);
            $stmt->bindParam(":warna_kelas", $warna_kelas);
            $stmt->bindParam(":jumlah_kelas", $jumlah_kelas);
            $stmt->bindParam(":angkatan_kelas", $angkatan_kelas);
            $stmt->bindParam(":id_kelas", $id_kelas);

            $stmt->execute();
      }

      public function delete($id)
      {
            $sql = "DELETE FROM tb_kelas WHERE id_kelas=:id_kelas";
            $stmt = $this->db->prepare($sql);

            $stmt->bindParam(":id_kelas", $id);
            $stmt->execute();
      }
}
