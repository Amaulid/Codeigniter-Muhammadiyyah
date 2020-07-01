<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Galeri extends CI_Controller {

	public function index()
	{
		$data['gambar'] = $this->model_galeri->tampil_data()->result();
		$this->load->view('template_user/header');
		$this->load->view('galeri', $data);
		$this->load->view('template_user/footer');
	}
}

?>