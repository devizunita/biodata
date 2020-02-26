<?php

Class Biodata extends CI_Controller {
	function __construct() {
		parent :: __construct();
	}

	function index() {
		$data['judul']="BiodataKuu";
		$data['judul2']="Biodata Ku";
		$data['nama']="Devi Zunita Tiana Rosa";
		$data['alamat']="Ds.Singkalanyar Kec.Prambon Kab.Nganjuk";
		$data['gender']="Perempuan";
		$data['asal_sekolah']="MTsN 3 NGANJUK";
		$this->load->view('profil',$data);
	}
 
}

?>