<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Berita_admin extends CI_Controller {

	public function __construct(){
		parent::__construct();

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
		$data['berita'] = $this->model_berita->tampil_data()->result();
		$this->load->view('template_admin/header');
		$this->load->view('template_admin/sidebar');
		$this->load->view('admin/berita_admin', $data);
		$this->load->view('template_admin/footer');
	}

	function tambah_berita(){
		$this->form_validation->set_rules('judul','Judul','required', array(
				'required'		=> '%s harus diisi.'
		)
	);
		 		$this->form_validation->set_rules('konten_berita', 'Konten', 'required', array(
                'required'      => '%s harus diisi.'
        )
	);
				$this->form_validation->set_rules('gambar','Gambar','required', array(
				'required'		=> '%s harus diisi.'
		)
	);
		 		$this->form_validation->set_rules('tanggal','Tanggal','required', array(
				'required'		=> '%s harus diisi.'
		)
	);
		if($this->form_validation->run() == FALSE) {

		$data['berita'] = $this->model_berita->tampil_data()->result();
		$this->load->view('template_admin/header');		
		$this->load->view('template_admin/sidebar');
		$this->load->view('admin/berita_admin', $data);
		$this->load->view('template_admin/footer');
	}else {
		$data = array(
				'id_berita'		=> '',
				'judul'			=> $this->input->post('judul'),
				'konten_berita'	=> $this->input->post('konten_berita'),
				'gambar'		=> $this->input->post('gambar'),
				'tanggal'		=> $this->input->post('tanggal'),
			);
		$this->model_berita->input_data($data,'tb_berita');
		$this->session->set_flashdata('msg',"<div class='alert alert-info'>Berita Berhasil Ditambahkan!</div>");
		redirect('admin/berita_admin/index');

		
	}
	}

	public function hapus($id)
	{
		$where = array('id_berita' => $id);
		$this->model_berita->hapus_data($where, 'tb_berita');
		$this->session->set_flashdata('msg',"<div class='alert alert-danger'>Berita Berhasil Dihapus!</div>");
		redirect('admin/berita_admin/index');
	}
}

?>