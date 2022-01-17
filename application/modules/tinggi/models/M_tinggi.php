<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_tinggi extends CI_Model {

	public function getdata()
	{
		$this->db->order_by('id','DESC');
      $query = $this->db->get('tb_tinggi', 1);
      return $query->result();
	}

	function get_chart(){
		$this->db->select("tb_tinggi.tinggi,count(tb_tinggi.id) as 'total'");
		$this->db->group_by('tb_tinggi.id');
		$this->db->order_by('tb_tinggi.id', 'desc');
		$query = $this->db->get('tb_tinggi');
		return $query->result_array();
	}

	public function getAlldata()
    {
      return $this->db->get('tb_tinggi')->result_array();
    }

    public function getdataTabel($limit, $start, $keyword = null)
    {
      if($keyword){
        $this->db->like('tinggi', $keyword);
        $this->db->or_like('waktu', $keyword);
      }
      return $this->db->get('tb_tinggi', $limit, $start)->result_array();
    }
    public function countAlldata()
    {
      return $this->db->get('tb_tinggi')->num_rows();
    }

	function report(){
        $query = $this->db->query("SELECT * from tb_tinggi");
         
        if($query->num_rows() > 0){
            foreach($query->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
        }
    }

}

/* End of file M_tinggi.php */
/* Location: ./application/modules/tinggi/models/M_tinggi.php */