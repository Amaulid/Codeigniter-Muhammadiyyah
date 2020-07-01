<?php

class Contact extends CI_Controller{
 
	function __construct(){
		parent::__construct();		
		$this->load->model('model_kontak');
		$this->load->helper('url');
 
	}
 
	function index(){
		$data['kontak'] = $this->model_kontak->tampil_data()->result();
		$this->load->view('template_user/header');
		$this->load->view('kontak',$data);
		$this->load->view('template_user/footer');
	}
 
	function tambah_aksi(){
		$this->form_validation->set_rules('nama','Nama','required', array(
				'required'		=> '%s harus diisi.'
		)
	);
		 		$this->form_validation->set_rules('email', 'Email', 'required|valid_email', array(
                'required'      => '%s harus diisi.'
        )
	);
				$this->form_validation->set_rules('no_hp','No_hp','required', array(
				'required'		=> '%s harus diisi.'
		)
	);
		 		$this->form_validation->set_rules('pesan','Pesan','required', array(
				'required'		=> '%s harus diisi.'
		)
	);
		if($this->form_validation->run() == FALSE) {
		$this->load->view('template_user/header');
		$this->load->view('kontak');
		$this->load->view('template_user/footer');
	}else {
		$data = array(
				'id_pesan'		=> '',
				'nama'			=> $this->input->post('nama'),
				'email'			=> $this->input->post('email'),
				'no_hp'			=> $this->input->post('no_hp'),
				'pesan'			=> $this->input->post('pesan'),
			);
		$this->model_kontak->input_data($data,'tb_kontak');
		redirect('contact/index');

		
	}
}

}
?>




