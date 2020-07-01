<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->helper(array('form', 'url'));
		$this->load->model('model_user');
        $this->load->library('upload');

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

	public function index()
	{
		$data['users'] = $this->model_user->tampil_data()->result();
		$this->load->view('template_admin/header');
		$this->load->view('template_admin/sidebar');
		$this->load->view('admin/setting_user', $data);
		$this->load->view('template_admin/footer');
	}

	public function tambah_user()
	{
		$this->form_validation->set_rules('nama','Nama','required', array(
				'required'		=> '%s harus diisi.'
		));

		$this->form_validation->set_rules(
        'username', 'Username',
        'required|min_length[5]|max_length[12]|is_unique[tb_user.username]',
        array(
                'required'      => '%s harus diisi.',
                'is_unique'     => '%s sudah terdaftar.',
                'min_length'	=> '{field} tidak boleh kurang dari {param} karakter'
        ));
		
 		$this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[tb_user.email]', array(
                'required'      => '%s harus diisi.',
                'is_unique'     => '%s sudah terdaftar.'
        ));

		$this->form_validation->set_rules('password_1','Password','trim|required|min_length[6]|max_length[12]|matches[password_2]',  array(
				'required'		=> '%s harus diisi.',
				'matches'		=> '%s harus sama',
				'min_length'	=> '{field} tidak boleh kurang dari {param} karakter'
		));
		$this->form_validation->set_rules('password_2','Password','required|matches[password_1]');

		if($this->form_validation->run() == FALSE) {
		$this->load->view('registrasi');
	}else {
		$data = array(
			'id_user'		=> '',
			'nama'		=> $this->input->post('nama'),
			'username'	=> $this->input->post('username'),
			'email'		=> $this->input->post('email'),
			'password'	=> $this->input->post('password_1'),
			'role_id'	=> 1,
		);

		$this->db->insert('tb_user',$data);
		$this->session->set_flashdata('pesan','<div class="alert alert-secondary alert-dismissible fade show" role="alert">
		  <strong>Selamat akun anda berhasil dibuat!</strong><br> Silahkan Login !
		  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
		    <span aria-hidden="true">&times;</span>
		  </button>
		</div>');
		redirect('admin/user');
	}
	}

	public function hapus($id)
	{
		$where = array('id_user' => $id);
		$this->model_user->hapus_data($where, 'tb_user');
		redirect('admin/user/index');
	}
}

?>