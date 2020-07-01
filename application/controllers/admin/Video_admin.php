<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Video_admin extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->helper(array('form', 'url'));
		$this->load->model('model_video');
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
		$data['video'] = $this->model_video->tampil_data()->result();
		$this->load->view('template_admin/header');
		$this->load->view('template_admin/sidebar');
		$this->load->view('admin/video_galeri', $data);
		$this->load->view('template_admin/footer');
	}

	public function tambah_video()
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

			$this->model_video->tambah_gambar($data, 'tb_galeri');
			redirect('admin/galeri_admin/index');

	}

	public function hapus($id)
	{
		$where = array('id_galeri' => $id);
		$this->model_video->hapus_data($where, 'tb_galeri');
		redirect('admin/galeri_admin/index');
	}
}

?>