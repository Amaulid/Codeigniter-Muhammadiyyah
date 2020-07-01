<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Berita extends CI_Controller {

	function __construct() {
    parent::__construct();
    $this->load->helper('tanggal');
  }

	public function index()
	{
		$data['berita'] = $this->model_berita->tampil_data()->result();
		$this->load->view('template_user/header');
		$this->load->view('berita', $data);
		$this->load->view('template_user/footer');
	}
}

?>