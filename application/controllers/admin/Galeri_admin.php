<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Galeri_admin extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->helper(array('form', 'url'));
		$this->load->model('model_galeri');
        $this->load->library('upload');

		if($this->session->userdata('role_id') != '1'){
			$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
  					Anda Belum Login!
 					 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
   					 <span aria-hidden="true">&times;</span>
  					</button>
					</div>');
			redirect('auth/login');
		}
	}

	public function index()
	{
		$data['galeri'] = $this->model_galeri->tampil_data()->result();
		$this->load->view('template_admin/header');
		$this->load->view('template_admin/sidebar');
		$this->load->view('admin/galeri_admin', $data);
		$this->load->view('template_admin/footer');
	}

	public function tambah_gambar()
	{
		$judul		= $this->input->post('judul');
		$gambar			= $_FILES['gambar']['name'];
			if($gambar = ''){}else{
				$config ['upload_path'] 	= './upload';
				$config ['allowed_types'] 	= 'jpg|jpeg|png|gif';

				$this->load->library('upload', $config);
				if(!$this->upload->do_upload('gambar')){
					echo "Gambar Gagal diUpload !";
				}else{
					$gambar=$this->upload->data('file_name');
				}
			}

			$data = array(
				'judul'		=> $judul,
				'gambar'		=> $gambar
			);

			$this->model_galeri->tambah_gambar($data, 'tb_galeri');
			redirect('admin/galeri_admin/index');

	}

	public function hapus($id)
	{
		$where = array('id_galeri' => $id);
		$this->model_galeri->hapus_data($where, 'tb_galeri');
		redirect('admin/galeri_admin/index');
	}
}

?>