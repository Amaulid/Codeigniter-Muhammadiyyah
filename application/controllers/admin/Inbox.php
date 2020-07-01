<?php

class Inbox extends CI_Controller{
 
	function __construct(){
		parent::__construct();		
		$this->load->model('model_kontak');
                $this->load->helper('url');

        if($this->session->userdata('role_id') != '1'){
			$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
  					Anda Belum Login!
 					 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
   					 <span aria-hidden="true">&times;</span>
  					</button>
					</div>');
			redirect('auth/login');
		}
	}
 
	function index(){
		$data['user'] = $this->model_kontak->tampil_data()->result();
		$this->load->view('template_admin/header');
		$this->load->view('template_admin/sidebar');
		$this->load->view('admin/pesan', $data);
		$this->load->view('template_admin/footer');
	}

		public function hapus($id)
	{
		$where = array('id_pesan' => $id);
		$this->model_kontak->hapus_data($where, 'tb_kontak');
		redirect('admin/inbox/index');
	}
}

?>