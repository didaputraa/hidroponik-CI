<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_suhu extends CI_Model {

	public function getdata()
	{
		$this->db->order_by('id','DESC');
      $query = $this->db->get('tb_suhu', 1);
      return $query->result();
	}

	function get_chart(){
		$this->db->select("tb_suhu.suhu,count(tb_suhu.id) as 'total'");
		$this->db->group_by('tb_suhu.id');
		$this->db->order_by('tb_suhu.id', 'desc');
		$query = $this->db->get('tb_suhu');
		return $query->result_array();
	}

	public function getAlldata()
    {
      return $this->db->get('tb_suhu')->result_array();
    }

    public function getdataTabel($limit, $start, $keyword = null)
    {
      if($keyword){
        $this->db->like('suhu', $keyword);
        $this->db->or_like('kelembaban', $keyword);
        $this->db->or_like('waktu', $keyword);
      }
      return $this->db->get('tb_suhu', $limit, $start)->result_array();
    }
    public function countAlldata()
    {
      return $this->db->get('tb_suhu')->num_rows();
    }

	function report(){
        $query = $this->db->query("SELECT * from tb_suhu");
         
        if($query->num_rows() > 0){
            foreach($query->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
        }
    }

}

/* End of file M_suhu.php */
/* Location: ./application/modules/suhu/models/M_suhu.php */