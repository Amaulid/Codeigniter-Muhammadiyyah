<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ppdb extends CI_Controller {

	public function index()
	{
		$this->load->view('template_user/header');
		$this->load->view('info_ppdb');
		$this->load->view('template_user/footer');
	}
}

?>