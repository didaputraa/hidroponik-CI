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
		date_default_timezone_set('Asia/jakarta');
		echo date_default_timezone_get().'<br>';
		echo date('d-m-Y H:i:s',strtotime('now'));
		
		$id = $this->session->userdata('Admin')['log_nama'];
		//fungsi untuk menampilkan view user
		$this->db->where('nama', $id);
		$data['isi'] = $this->db->get('tb_user')->row();
		$data['isitabel'] = $this->db->get('tb_suhu')->result();
		$data['cahaya'] = $this->db->get('tb_cahaya')->num_rows();
		$data['tinggi'] = $this->db->get('tb_tinggi')->num_rows();
		//grafik
		$this->load->model('suhu/M_suhu');
		$this->load->model('cahaya/M_cahaya');
		$this->load->model('tinggi/M_tinggi');
		// $data['report'] = $this->M_suhu->report();
		// $data['report_cahaya'] = $this->M_cahaya->report();
		// $data['report_tinggi'] = $this->M_tinggi->report();
		$query = $this->db->query('SELECT tb_suhu.id, tb_suhu.suhu,tb_suhu.kelembaban,tb_cahaya.cahaya, tb_tinggi.tinggi, tb_suhu.waktu FROM tb_cahaya INNER JOIN tb_suhu ON tb_cahaya.id = tb_suhu.id INNER JOIN tb_tinggi ON tb_cahaya.id = tb_tinggi.id')->result();
		$data['report'] = $query;

		//endgrafik
		$data['suhu'] = $this->M_suhu->getdata();
		$data['cahaya'] = $this->M_cahaya->getdata();
		$data['tinggi'] = $this->M_tinggi->getdata();


		$data['home'] = 'admin/home';
		$data['judul'] = 'HIDROPONIKYUH | Dashboard';
		$data['status'] = 'Dashboard';
		$this->load->view('admin/dashboard', $data);

	}

	public function profil()
	{
		$id = $this->session->userdata('Admin')['log_nama'];
		//fungsi untuk menampilkan view user
		$this->db->where('nama', $id);
		$data['isi'] = $this->db->get('tb_user')->row();
		$data['home'] = 'admin/profil';
		$data['judul'] = 'HIDROPONIKYUH | Profile';
		$data['status'] = 'Profile User';
		$this->load->view('admin/dashboard', $data);

	}

	public function contact()
	{
		$id = $this->session->userdata('Admin')['log_nama'];
		//fungsi untuk menampilkan view user
		$this->db->where('nama', $id);
		$data['isi'] = $this->db->get('tb_user')->row();

		$data['home'] = 'admin/contact';
		$data['judul'] = 'HIDROPONIKYUH | Our Team';
		$data['status'] = 'Our Team';
		$this->load->view('admin/dashboard', $data, FALSE);
	}
	public function log_login()
	{
		$id = $this->session->userdata('Admin')['log_nama'];
		//fungsi untuk menampilkan view user
		$this->db->where('nama', $id);
		$data['isi'] = $this->db->get('tb_user')->row();

		$data['home'] = 'admin/log_login';
		$data['judul'] = 'HIDROPONIKYUH | Report';
		$data['status'] = 'Report';
		$this->load->view('admin/dashboard', $data);
	}

}

/* End of file Dashboard.php */
/* Location: ./application/controllers/Dashboard.php */
