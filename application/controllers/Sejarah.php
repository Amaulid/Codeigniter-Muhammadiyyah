<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sejarah extends CI_Controller {

	public function index()
	{
		$this->load->view('template_user/header');
		$this->load->view('sejarah_singkat');
		$this->load->view('template_user/footer');
	}
}

?>