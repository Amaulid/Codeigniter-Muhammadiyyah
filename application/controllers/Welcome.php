<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{

		$data['slide'] = $this->model_slide->tampil_data()->result();
		$data['berita'] = $this->model_berita->tampil_data()->result();
		$data['gambar'] = $this->model_galeri->tampil_data()->result();
		$data['visi'] = $this->model_visi->tampil_data()->result();
		$this->load->view('template_user/header');
		$this->load->view('home', $data);
		$this->load->view('template_user/footer');
	}
}

?>