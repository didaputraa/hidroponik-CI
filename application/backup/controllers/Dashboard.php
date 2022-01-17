<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		if(empty($this->session->userdata('Admin'))){
			redirect('Login','refresh');
		}
	}

	public function index()
	{
		$data['home'] = 'admin/home';
		$data['judul'] = 'ServerPHB | Dashboard';
		$data['status'] = 'Dashboard';
		$this->load->view('admin/dashboard', $data);
		
	}

	public function welcome(){
		$this->load->view('welcome_message');
	}

	public function input_user()
	{
		//fungsi untuk menampilkan view input data user
		$data['home'] = 'admin/form_user';
		$data['judul'] = 'ServerPHB | Form User';
		$data['status'] = 'Form Input User';
		$this->load->view('admin/dashboard', $data, FALSE);
	}

	public function tabel_user()
	{
		//fungsi untuk melihat view tabel user

		$data['isi'] = $this->db->get('tb_user')->result(); //mengambil data dari tabel dalam database

		$data['home'] = 'admin/tabel_user';
		$data['judul'] = 'ServerPHB | Tabel User';
		$data['status'] = 'Tabel User';
		$this->load->view('admin/dashboard', $data);
	}

	public function adduserpost()
	{
		//fungsi untuk mengepost hasil input data
		$u = $this->input->post('username');
		$p = md5($this->input->post('pw'));
		$n = $this->input->post('nama');
		$hp = $this->input->post('no_hp');
		$a = $this->input->post('alamat');
		$data = array('username' => $u ,
					  'password' => $p,
					  'nama' => $n,
					  'no_hp' => $hp,
				      'alamat' => $a);
	$insert = $this->db->insert('tb_user', $data);
	echo ($insert) ? 'sukses' : 'gagal' ;

	//setelah selesai sukses langsung kembali ke view input data user
	redirect('Dashboard/input_user','refresh');
	}

	public function edit_user($id)
	{
		//fungsi untuk edit data
		$this->db->where('Id_user', $id);
		$data['isi'] = $this->db->get('tb_user')->row();
		$data['home'] = 'admin/edit_user';
		$data['judul'] = 'ServerPHB | Tabel User';
		$data['status'] = 'Tabel User';
		$this->load->view('admin/dashboard', $data, FALSE);
	}

	public function edituserpost($id)
	{
		//fungsi untuk mengepost hasil edit data
		$u = $this->input->post('username');
		$p = md5($this->input->post('pw'));
		$n = $this->input->post('nama');
		$hp = $this->input->post('no_hp'); 
		$a = $this->input->post('alamat');
		$data = array('username' => $u ,
					  'password' => $p,
					  'nama' => $n,
					  'no_hp' => $hp,
				      'alamat' => $a);
		$this->db->where('Id_user', $id);
		$update =	$this->db->update('tb_user', $data);
		echo ($update) ? 'Sukses Edit' : 'Gagal Edit' ;

		//setelah selesai sukses langsung kembali ke view tabel user
		redirect('Dashboard/tabel_user','refresh');
	}

	public function delete($id)
	{
		//fungsi untuk menghapus data di dalam tabel user
		$this->db->where('Id_user', $id);
		$delete =	$this->db->delete('tb_user');
		echo ($delete) ? 'sukses' : 'gagal' ;

		//setelah selesai sukses langsung kembali ke view tabel user
		redirect('Dashboard/tabel_user','refresh');
	}

	public function profil()
	{
		//fungsi untuk menampilkan view user
		$this->db->where('Id_user', 2);
		$data['isi'] = $this->db->get('tb_user')->row();
		$data['home'] = 'admin/profil';
		$data['judul'] = 'ServerPHB | Profile';
		$data['status'] = 'Profile User';
		$this->load->view('admin/dashboard', $data);
		
	}

	public function form_input_wajah()
	{
		//fungsi untuk melihat view form input data wajah
		$data['home'] = 'admin/form_wajah';
		$data['judul'] = 'ServerPHB | Form Input data Wajah';
		$data['status'] = 'Form Input Data Wajah';
		$this->load->view('admin/dashboard', $data, FALSE);
	}

	public function addfacepost()
	{
		//fungsi untuk mengepost hasil input data wajah
		$n = $this->input->post('namauser');
		$u = $this->input->post('unit');
		$t = $this->input->post('tanggal');
		$x = $this->input->post('nilaix');
		$y = $this->input->post('nilaiy');
		$z = $this->input->post('nilaiz');
		$data = array('nama' => $n ,
					  'unit' => $u,
					  'tanggal' => $t,
				      'x' => $x,
				      'y' => $y,
				      'z' => $z);
	$insert = $this->db->insert('tb_wajah', $data);
	echo ($insert) ? 'sukses input data wajah' : 'gagal' ;

	//setelah selesai sukses langsung kembali ke view input data user
	redirect('Dashboard/form_input_wajah','refresh');
	}

	public function edit_wajah($id)
	{
		//fungsi untuk edit data
		$this->db->where('Id', $id);
		$data['isi'] = $this->db->get('tb_wajah')->row();
		$data['home'] = 'admin/edit_wajah';
		$data['judul'] = 'ServerPHB | Tabel Data Wajah';
		$data['status'] = 'Tabel Data Wajah';
		$this->load->view('admin/dashboard', $data, FALSE);
	}

	public function editfacepost($id)
	{
		//fungsi untuk mengepost hasil edit data
		$n = $this->input->post('namauser');
		$u = $this->input->post('unit');
		$t = $this->input->post('tanggal');
		$x = $this->input->post('nilaix');
		$y = $this->input->post('nilaiy');
		$z = $this->input->post('nilaiz');
		$data = array('nama' => $n ,
					  'unit' => $u,
					  'tanggal' => $t,
				      'x' => $x,
				      'y' => $y,
				      'z' => $z);
		$this->db->where('Id', $id);
		$update =	$this->db->update('tb_wajah', $data);
		echo ($update) ? 'Sukses Edit' : 'Gagal Edit' ;

		//setelah selesai sukses langsung kembali ke view tabel user
		redirect('Dashboard/tabel_wajah','refresh');
	}

	public function delete_wajah($id)
	{
		//fungsi untuk menghapus data di dalam tabel user
		$this->db->where('Id', $id);
		$delete =	$this->db->delete('tb_wajah');
		echo ($delete) ? 'sukses' : 'gagal' ;

		//setelah selesai sukses langsung kembali ke view tabel user
		redirect('Dashboard/tabel_data_wajah','refresh');
	}




	public function tabel_wajah()
	{
		$data['isi'] = $this->db->get('tb_wajah')->result(); 


		//fungsi untuk melihat view tabel wajah
		$data['home'] = 'admin/tabel_data_wajah';
		$data['judul'] = 'ServerPHB | Tabel Data Wajah';
		$data['status'] = 'Tabel Data Wajah';
		$this->load->view('admin/dashboard', $data);
	}

	public function contact()
	{
		$data['home'] = 'admin/contact';
		$data['judul'] = 'ServerPHB | Contact';
		$data['status'] = 'Contact';
		$this->load->view('admin/dashboard', $data, FALSE);
	}

}

/* End of file Dashboard.php */
/* Location: ./application/controllers/Dashboard.php */