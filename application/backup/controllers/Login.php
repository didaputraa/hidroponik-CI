<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		$data['judul'] = 'ServerPHB | Login';
		$this->load->view('admin/login' , $data);
	}
	public function loginproses()
	{
		$user = $this->input->post('username');
		$pass = md5($this->input->post('pw'));
		$this->load->model('M_login');
		$cek = $this->M_login->validasi($user,$pass);
		if($cek='valid'){
			redirect('Dashboard','refresh');
		} else{
			redirect('Login','refresh');
		}
	}

	public function logout(){
		$this->session->sess_destroy($this->session->userdata('Admin'));
		redirect('Login','refresh');
	}
}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */