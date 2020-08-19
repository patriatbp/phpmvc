<?php

class Karyawan_model {
	private $dbh;
	private $stat;

	public function __construct()
	{
		// data source name
		$dsn = 'mysql:hot=localhost;dbname=phpmvc';

		try {
			$this->dbh = new PDO($dsn, 'root', '');
		} catch(PDOException $e) {
			die($e->getMessage());
		}
	}

	public function getAllKaryawan()
	{
		$this->stat = $this->dbh->prepare('SELECT * FROM karyawan');
		$this->stat->execute();
		return $this->stat->fetchAll(PDO::FETCH_ASSOC);
	}
}