<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tinggi extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		if(empty($this->session->userdata('Admin'))){
			redirect('Login','refresh');

		}
		$this->load->model('M_tinggi');
	}

	public function index()
	{
		$id = $this->session->userdata('Admin')['log_nama'];
		//fungsi untuk menampilkan view user
		$this->db->where('nama', $id);
		$data['isi'] = $this->db->get('tb_user')->row();
		//coba
		$data['report'] = $this->M_tinggi->report();
		//end
		//Grafik User
		//End Grafik User
		$this->load->library('pagination');

        //ambil keyword
        if($this->input->post('submit')){
        	$data['keyword'] = $this->input->post('keyword');
        	$this->session->set_userdata('keyword', $data['keyword']);
        } else{
        	$data['keyword'] = $this->session->userdata('keyword');
        }

        //config
        $this->db->like('tinggi', $data['keyword']);
        $this->db->or_like('waktu', $data['keyword']);
        $this->db->from('tb_tinggi');
        $config['total_rows'] = $this->db->count_all_results();
        $data['total_rows'] = $config['total_rows'];
        $config['per_page'] = 10;
        $data['start'] = $this->uri->segment(3);
		$data['isitabel'] = $this->M_tinggi->getdataTabel($config['per_page'], $data['start'], $data['keyword']);

		//initialize
		$this->pagination->initialize($config);

		date_default_timezone_set('Asia/Jakarta');


		$data['home'] = 'tabel_tinggi';
		$data['judul'] = 'HIDROPONIKYUH | Data Ketinggian Air Bak Penampung';
		$data['status'] = 'Data Ketinggian Air Bak Penampung';
		$this->load->view('admin/dashboard', $data);
	}

	function crul(){
		$ch = curl_init();
// $url = "https://alumniphb.net/Welcome/link";
		$url = base_url('Welcome/api_tinggi');
    // set url o
		curl_setopt($ch, CURLOPT_URL, $url);
    // return the transfer as a string
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    // $output contains the output string
		$output = curl_exec($ch);
    // tutup curl
		curl_close($ch);

		$id = $this->session->userdata('Admin')['log_nama'];
		//fungsi untuk menampilkan view user
		$this->db->where('nama', $id);
		$data['isi'] = $this->db->get('tb_user')->row();


    // menampilkan hasil curl
		$data['crul'] =  json_decode($output);
		$data['home'] = 'tabel_crul';
		$data['judul'] = 'ServerPHB | Crul tinggi';
		$data['status'] = 'Crul data tinggi';
		$this->load->view('admin/dashboard', $data, FALSE);
	}

	function grafik(){
		$id = $this->session->userdata('Admin')['log_nama'];
		//fungsi untuk menampilkan view user
		$this->db->where('nama', $id);
		$data['isi'] = $this->db->get('tb_user')->row();

		//mulai code grafik
		$this->load->model('M_tinggi','tinggi');
		$array_kategori = array('Tanggal');
		$array_series = array(array('name'=>'persentase', 'data'=>array()));
		$array_datas = array();
		$data_user = $this->tinggi->get_chart();
		// lakukan perulangan untuk melihat index hasil
		for( $i= 0 ; $i < count($data_user); $i++ ){
			$array_datas[$data_user[$i]['tinggi']] = intval($data_user[$i]['total']);
		}
// set value per data grafik
		foreach($array_datas as $key=>$val){
			array_push($array_series[0]['data'], array((string)$key, $val));
		}
		$data['array_kategori'] = json_encode($array_kategori);
		$data['array_series'] = json_encode($array_series);
		$data['home'] = 'chart_tinggi';
		$data['judul'] = 'HIDROPONIKYUH | Form User';
		$data['status'] = 'tabel data User';
		$this->load->view('admin/dashboard',$data,false);
	}

}

/* End of file tinggi.php */
/* Location: ./application/modules/tinggi/controllers/tinggi.php */
