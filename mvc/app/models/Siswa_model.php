<?php

class Siswa_model
{
    private $table = 'data_siswa';
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function getAllSiswa()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getSiswaById($id)
    {
        $this->db->query('SELECT * FROM '  . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function tambahDataSiswa($data)
    {
        $query = "INSERT INTO data_siswa VALUES
        ('',:nama, :nik, :email, :jenjang, 'dummy.jpg')";

        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('nik', $data['nik']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('jenjang', $data['jenjang']);

        if (!isset(
            $data['nama'],
            $data['nik'],
            $data['email']
        ) || $data['jenjang'] == 0) {
            return false;
            exit;
        }

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function hapusDataSiswa($id)
    {
        $query = "DELETE FROM data_siswa WHERE id = :id";

        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }
    public function ubahDataSiswa($data)
    {
        $query = "UPDATE data_siswa SET
        nama = :nama,
        nik = :nik,
        email = :email,
        jenjang = :jenjang
        WHERE id = :id";

        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('nik', $data['nik']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('jenjang', $data['jenjang']);
        $this->db->bind('id', $data['id']);

        if (!isset(
            $data['nama'],
            $data['nik'],
            $data['email']
        ) || $data['jenjang'] == 0) {
            return false;
            exit;
        }

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function cariDataSiswa()
    {
        $keyword = $_POST['keyword'];
        $query = "SELECT * FROM data_siswa WHERE nama LIKE :keyword";
        $this->db->query($query);
        $this->db->bind('keyword', "%$keyword%");
        return $this->db->resultSet();
    }
}
