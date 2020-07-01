<?php

class Model_galeri extends CI_Model{

	public function tampil_data(){
		return $this->db->get('tb_galeri');
	}

	public function tambah_gambar($data,$table){
		$this->db->insert($table,$data);
	}

	public function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}
}

?>