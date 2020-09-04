<?php 

class Karyawan extends Controller {
	public function index()
	{
		$data['judul'] = 'Daftar Karyawan';
		$data['kry'] = $this->model('Karyawan_model')->getAllKaryawan();
		$this->view('templates/header', $data);
		$this->view('karyawan/index', $data);
		$this->view('templates/footer');
	}
	public function detail($id)
	{
		$data['judul'] = 'Detail Karyawan';
		$data['kry'] = $this->model('Karyawan_model')->getKaryawanById($id);
		$this->view('templates/header', $data);
		$this->view('karyawan/detail', $data);
		$this->view('templates/footer');
	}

	public function tambah(){
		if ($this->model('Karyawan_model')->tambahDataKaryawan($_POST) > 0) {
			header('Location: ' . BASEURL . '/karyawan');
			exit;
		}
	}
} 

