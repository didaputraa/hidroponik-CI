<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_cahaya extends CI_Model {

	public function getdata()
	{
		$this->db->order_by('id','DESC');
      $query = $this->db->get('tb_cahaya', 1);
      return $query->result();
	}

	function get_chart(){
		$this->db->select("tb_cahaya.cahaya,count(tb_cahaya.id) as 'total'");
		$this->db->group_by('tb_cahaya.id');
		$this->db->order_by('tb_cahaya.id', 'desc');
		$query = $this->db->get('tb_cahaya');
		return $query->result_array();
	}

	public function getAlldata()
    {
      return $this->db->get('tb_cahaya')->result_array();
    }

    public function getdataTabel($limit, $start, $keyword = null)
    {
      if($keyword){
        $this->db->like('cahaya', $keyword);
        $this->db->or_like('waktu', $keyword);
      }
      return $this->db->get('tb_cahaya', $limit, $start)->result_array();
    }
    public function countAlldata()
    {
      return $this->db->get('tb_cahaya')->num_rows();
    }

	function report(){
        $query = $this->db->query("SELECT * from tb_cahaya");
         
        if($query->num_rows() > 0){
            foreach($query->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
        }
    }

}

/* End of file M_cahaya.php */
/* Location: ./application/modules/cahaya/models/M_cahaya.php */