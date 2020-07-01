<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Video extends CI_Controller {

	public function index()
	{
		$this->load->view('template_user/header');
		$this->load->view('galeri_video');
		$this->load->view('template_user/footer');
	}
}

?>