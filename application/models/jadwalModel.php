<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class JadwalModel extends CI_Model {
    public function getJadwals()
    {
        $query = $this->db->get('jadwal');
        return $query->result();
    }
    
    public function saveJadwal($data)
	{
		return $this->db->insert('jadwal',$data);
    }

    public function getJadwal($id){
        $query = $this->db->get_where('jadwal',array('id'=>$id));
        return $query->row();
    }

    public function editJadwal($id,$data){
        $this->db->where('id',$id);
        $query = $this->db->update('jadwal',$data);
        return $query;
    }

}
