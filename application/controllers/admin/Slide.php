<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Slide extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->helper(array('form', 'url'));
		$this->load->model('model_slide');
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
		$data['slide'] = $this->model_slide->tampil_data()->result();
		$this->load->view('template_admin/header');
		$this->load->view('template_admin/sidebar');
		$this->load->view('admin/setting_slide', $data);
		$this->load->view('template_admin/footer');
	}

	public function tambah_slide()
	{
		$deskripsi 		= $this->input->post('deskripsi');
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
				'deskripsi'		=> $deskripsi,
				'gambar'		=> $gambar
			);

			$this->model_slide->tambah_slide($data, 'tb_slide');
			redirect('admin/slide/index');

	}

	public function hapus($id)
	{
		$where = array('id_slide' => $id);
		$this->model_slide->hapus_data($where, 'tb_slide');
		redirect('admin/slide/index');
	}
}

?>