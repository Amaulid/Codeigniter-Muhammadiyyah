<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tentang extends CI_Controller {

	public function index()
	{
		$this->load->view('template_user/header');
		$this->load->view('tentang_kami');
		$this->load->view('template_user/footer');
	}
}

?>