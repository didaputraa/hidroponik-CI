<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_user extends CI_Model {

	public function tambah($isi)
	{
		return $this->db->insert('tb_user', $isi);
	}
	public function edit($isi, $id)
	{
		$this->db->where('Id_user', $id);
		return $this->db->update('tb_user', $isi);
	}

	public function getall()
	{
		return $this->db->get('tb_user')->result();

	}
	public function getsatudata($id)
	{
		$this->db->where('Id_user', $id);
		return $this->db->get('tb_user')->row();
	}
	function get_chart(){
		$this->db->select("tb_user.nama,count(tb_user.Id_user) as 'total'");
		$this->db->join('tb_wajah', 'tb_wajah.Id_user = tb_user.Id_user', 'inner');
		$this->db->group_by('tb_user.Id_user');
		$this->db->order_by('tb_user.Id_user', 'desc');
		$query = $this->db->get('tb_user');
		return $query->result_array();
	}

}

/* End of file M_user.php */
/* Location: ./application/modules/users/models/M_user.php */