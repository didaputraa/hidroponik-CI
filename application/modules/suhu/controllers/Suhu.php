<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Suhu extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		if(empty($this->session->userdata('Admin'))){
			redirect('Login','refresh');

		}
		$this->load->model('M_suhu');
	}

	public function index()
	{
		$id = $this->session->userdata('Admin')['log_nama'];
		//fungsi untuk menampilkan view user
		$this->db->where('nama', $id);
		$data['isi'] = $this->db->get('tb_user')->row();
		//coba
		$data['report'] = $this->M_suhu->report();
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
        $this->db->like('suhu', $data['keyword']);
        $this->db->or_like('kelembaban', $data['keyword']);
        $this->db->or_like('waktu', $data['keyword']);
        $this->db->from('tb_suhu');
        $config['total_rows'] = $this->db->count_all_results();
        $data['total_rows'] = $config['total_rows'];
        $config['per_page'] = 10;
        $data['start'] = $this->uri->segment(3);
		$data['isitabel'] = $this->M_suhu->getdataTabel($config['per_page'], $data['start'], $data['keyword']);

		//initialize
		$this->pagination->initialize($config);

		date_default_timezone_set("Asia/Jakarta");
		
		$data['home'] = 'tabel_suhu';
		$data['judul'] = 'HIDROPONIKYUH | Data Suhu dan Kelembaban';
		$data['status'] = 'Data Suhu dan Kelembaban Greenhouse';
		$this->load->view('admin/dashboard', $data);
	}

	function crul(){
		$ch = curl_init(); 
// $url = "https://alumniphb.net/Welcome/link";
		$url = base_url('Welcome/api_suhu');
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
		$data['judul'] = 'ServerPHB | Crul Suhu';
		$data['status'] = 'Crul data Suhu';
		$this->load->view('admin/dashboard', $data, FALSE);
	}

	function grafik(){
		$id = $this->session->userdata('Admin')['log_nama'];
		//fungsi untuk menampilkan view user
		$this->db->where('nama', $id);
		$data['isi'] = $this->db->get('tb_user')->row();

		//mulai code grafik
		$this->load->model('M_suhu','suhu');
		$array_kategori = array('Tanggal');
		$array_series = array(array('name'=>'persentase', 'data'=>array()));
		$array_datas = array();
		$data_user = $this->suhu->get_chart();
		// lakukan perulangan untuk melihat index hasil
		for( $i= 0 ; $i < count($data_user); $i++ ){
			$array_datas[$data_user[$i]['suhu']] = intval($data_user[$i]['total']);
		}
// set value per data grafik
		foreach($array_datas as $key=>$val){
			array_push($array_series[0]['data'], array((string)$key, $val));
		}
		$data['array_kategori'] = json_encode($array_kategori);
		$data['array_series'] = json_encode($array_series);
		$data['home'] = 'chart_suhu';
		$data['judul'] = 'HIDROPONIKYUH | Form User';
		$data['status'] = 'tabel data User';
		$this->load->view('admin/dashboard',$data,false);
	}

}

/* End of file Suhu.php */
/* Location: ./application/modules/suhu/controllers/Suhu.php */