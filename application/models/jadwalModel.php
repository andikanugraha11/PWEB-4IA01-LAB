<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class JadwalModel extends CI_Model {
    public function getJadwal()
    {
        $query = $this->db->get('jadwal');
        return $query->result();
    }
    public function saveJadwal($data)
	{
		return $this->db->insert('jadwal',$data);
	}
}
