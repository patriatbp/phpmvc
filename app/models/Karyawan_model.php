<?php

class Karyawan_model {
	private $table = 'karyawan';
	private $bd;

	public function __construct(){
		$this->db = new Database;
	}
	public function getAllKaryawan()
	{
		$this->db->query('SELECT * FROM '.$this->table);
		return $this->db->resultSet();
	}

	public function getKaryawanById($id){
		$this->db->query('SELECT * FROM '.$this->table.' WHERE id = :id');
		$this->db->bind('id', $id);
		return $this->db->single();
	}

	public function tambahDataKaryawan($data)
	{
		$query = "INSERT INTO karyawan
					VALUES
					('', :nama, :nk, :email, :stat)";

		$this->db->query($query);
		$this->db->bind('nama', $data['nama']);
		$this->db->bind('nk', $data['nk']);
		$this->db->bind('email', $data['email']);
		$this->db->bind('stat', $data['status']);

		$this->db->execute();

		return  $this->db->rowCount();
	}
}