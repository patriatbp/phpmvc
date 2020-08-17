<?php 

class About {
	public function index($nama = 'Patria', $pekerjaan="Programmer")
	{
		echo "Halo nama saya $nama, pekerjaan saya adalah $pekerjaan";
	}
	public function page(){
		echo 'About/page';
	}
}
