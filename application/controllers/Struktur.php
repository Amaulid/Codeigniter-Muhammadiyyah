<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Struktur extends CI_Controller {

	public function index()
	{
		$this->load->view('template_user/header');
		$this->load->view('struktur_organisasi');
		$this->load->view('template_user/footer');
	}
}

?>