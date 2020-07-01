<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Visi extends CI_Controller {

	public function index()
	{
		$data['visi'] = $this->model_visi->tampil_data()->result();
		$this->load->view('template_user/header');
		$this->load->view('visimisi', $data);
		$this->load->view('template_user/footer');
	}
}

?>