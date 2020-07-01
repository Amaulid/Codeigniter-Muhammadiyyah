<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Visi_admin extends CI_Controller {

	if($this->session->userdata('role_id') != '1'){
			$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
  					Anda Belum Login!
 					 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
   					 <span aria-hidden="true">&times;</span>
  					</button>
					</div>');
			redirect('auth/login');
		}

	public function index()
	{
		$data['visi'] = $this->model_visi->tampil_data()->result();
		$this->load->view('template_admin/header');
		$this->load->view('template_admin/sidebar');
		$this->load->view('admin/visi_misi', $data);
		$this->load->view('template_admin/footer');
	}
}

?>