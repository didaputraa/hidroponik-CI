<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		if(empty($this->session->userdata('Admin'))){
			redirect('Login','refresh');

		}
		$this->load->model('M_user');
	}
	
	public function index()
	{
		$data['isi'] = $this->db->get('tb_user')->result(); //mengambil data dari tabel dalam database

		$data['home'] = 'admin/tabel_user';
		$data['judul'] = 'HIDROPONIKYUH | Tabel User';
		$data['status'] = 'Tabel User';
		$this->load->view('admin/dashboard', $data);
	}

	public function input_user()
	{
		$id = $this->session->userdata('Admin')['log_nama'];
		//fungsi untuk menampilkan view user
		$this->db->where('nama', $id);
		$data['isi'] = $this->db->get('tb_user')->row();

		//fungsi untuk menampilkan view input data user
		$data['home'] = 'admin/form_user';
		$data['judul'] = 'HIDROPONIKYUH | Form User';
		$data['status'] = 'Form Input User';
		$this->load->view('admin/dashboard', $data, FALSE);
	}

	public function tabel_user()
	{
		$id = $this->session->userdata('Admin')['log_nama'];
		//fungsi untuk menampilkan view user
		$this->db->where('nama', $id);
		$data['isi'] = $this->db->get('tb_user')->row();
		//fungsi untuk melihat view tabel user

		$data['untuktabel'] = $this->db->get('tb_user')->result(); //mengambil data dari tabel dalam database

		$data['home'] = 'admin/tabel_user';
		$data['judul'] = 'HIDROPONIKYUH | Tabel User';
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
		//Code untuk upload file
		$config['upload_path']          = './uploads/';
		$config['allowed_types']        = 'gif|jpg|png|jpeg|JPG';
		$config['max_size']             = 3024;
		$config['encrypt_name'] = TRUE;
                // code untuk max size khusus gambar
                // $config['max_width']            = 1024;
                // $config['max_height']           = 768;

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload('foto'))
		{

			echo $this->upload->display_errors();
		}
		else
		{
			$upload_data = $this->upload->data();

			$data = array_merge($data, array("foto_user"=>$upload_data['file_name']));

		}
		//code akhir upload file
		$insert = $this->M_user->tambah($data);

		echo ($insert) ? 
		
		$this->session->set_flashdata('message', '<div class="alert alert-success">sukses add</div>')
		:
		 $this->session->set_flashdata('message', '<div class="alert alert-danger">gagal add</div>')
		 ;

	

		
	//setelah selesai sukses langsung kembali ke view input data user
	redirect('users/input_user','refresh');
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
		$this->load->model('M_user');
		$fotolama = $this->M_user->getsatudata($id)->foto_user;
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
		//Code untuk upload file
		$config['upload_path']          = './uploads/';
		$config['allowed_types']        = 'gif|jpg|png|jpeg|JPG';
		$config['max_size']             = 3024;
		$config['encrypt_name'] = TRUE;
                // code untuk max size khusus gambar
                // $config['max_width']            = 1024;
                // $config['max_height']           = 768;

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload('foto'))
		{

			echo $this->upload->display_errors();
		}
		else
		{
			$upload_data = $this->upload->data();

			$data = array_merge($data, array("foto_user"=>$upload_data['file_name']));

		}
		//code akhir upload file

		$update = $this->M_user->edit($data, $id);
		$this->load->helper("file");
		$path_to_file = 'uploads/'.$fotolama;
		$update = unlink($path_to_file);

		redirect(base_url('users/tabel_user'),'refresh');

		// echo ($update) ? 'sukses' : 'gagal' ;
		// $this->db->where('Id_user', $id);
		// $update =	$this->db->update('tb_user', $data);
		// echo ($update) ? 'Sukses Edit' : 'Gagal Edit' ;

		//setelah selesai sukses langsung kembali ke view tabel user
		// redirect('users/tabel_user','refresh');
	}

	public function delete($id)
	{
		//fungsi untuk menghapus data di dalam tabel user
		$this->db->where('Id_user', $id);
		$delete =	$this->db->delete('tb_user');
		echo ($delete) ? 
		$this->session->set_flashdata('message', '<div class="alert alert-success">Data Berhasil Dihapus</div>')
		:
		 $this->session->set_flashdata('message', '<div class="alert alert-danger">Data Gagal Dihapus</div>')
		 ;

		//setelah selesai sukses langsung kembali ke view tabel user
		redirect('users/tabel_user','refresh');
	}
	public function detail()
	{
		
		$id = $this->session->userdata('Admin')['log_nama'];
		//fungsi untuk menampilkan view user
		$this->db->where('nama', $id);
		$data['isi'] = $this->db->get('tb_user')->row();
		
		$data['status'] = '';
		$data['judul'] = 'Detail User';
		$data['home'] = 'admin/user_detail';
		$this->load->view('admin/dashboard', $data);
	}

	function crul(){
		$ch = curl_init(); 
// $url = "https://alumniphb.net/Welcome/link";
		$url = base_url('Welcome/api');
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
		$data['home'] = 'admin/v_table_crul';
		$data['judul'] = 'ServerPHB | Form User';
		$data['status'] = 'Crul data User';
		$this->load->view('admin/dashboard', $data, FALSE);
	}

	function grafik(){
		$id = $this->session->userdata('Admin')['log_nama'];
		//fungsi untuk menampilkan view user
		$this->db->where('nama', $id);
		$data['isi'] = $this->db->get('tb_user')->row();
		
		$this->load->model('M_user','user');
		$array_kategori = array('Lokasi User');
		$array_series = array(array('name'=>'persentase', 'data'=>array()));
		$array_datas = array();
		$data_user = $this->user->get_chart();
		// lakukan perulangan untuk melihat index hasil
		for( $i= 0 ; $i < count($data_user); $i++ ){
			$array_datas[$data_user[$i]['nama']] = intval($data_user[$i]['total']);
		}
// set value per data grafik
		foreach($array_datas as $key=>$val){
			array_push($array_series[0]['data'], array((string)$key, $val));
		}
		$data['array_kategori'] = json_encode($array_kategori);
		$data['array_series'] = json_encode($array_series);
		$data['home'] = 'admin/chart';
		$data['judul'] = 'ServerPHB | Form User';
		$data['status'] = 'tabel data User';
		$this->load->view('admin/dashboard',$data,false);
	}


}

/* End of file user.php */
/* Location: ./application/modules/users/controllers/user.php */