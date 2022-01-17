<?php


class M_data extends CI_Model
{
    function savedht($dht)
    {
        $this->db->insert('tb_suhu', $dht);
        return TRUE;
    }
    
    function saveldr($dht)
    {
        $this->db->insert('tb_cahaya', $dht);
        return TRUE;
    }
    
    function saveultrasonik($dht)
    {
        $this->db->insert('tb_tinggi', $dht);
        return TRUE;
    }
}
?>