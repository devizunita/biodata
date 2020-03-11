<?php
Class model_pengurus extends CI_model {

	function __construct() {
		parent:: __construct();
		$this->load->database();//load fungsi database pada CI
	}

	function get() { //fungsi untuk menampilkan data
		$data=$this->db->query("SELECT * FROM pengurus");
		return $data;
	}

	function simpan($id,$nama,$gender,$alamat,$gaji) { 
	 $query="INSERT INTO pengurus VALUES ('$id','$nama','$gender','$alamat','$gaji')";
			$this->db->query($query);
	}

	function  edit($id) {
		$data=$this->db->query("SELECT * FROM pengurus WHERE id=$id");
		return $data;
	}

	function update($id,$nama,$gender,$alamat,$gaji) { 
		$query="UPDATE pengurus SET nama='$nama', gender='$gender', alamat='$alamat' WHERE id='$id'";
		$this->db->query($query);
	}

	function delete($id) {
		$data=$this->db->query("DELETE FROM pengurus WHERE id=$id");
		return $data;
	}
}
?>