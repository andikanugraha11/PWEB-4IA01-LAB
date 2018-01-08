<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model(array(
			'jadwalModel' => 'jadwal'
		));
	}

	public function index()
	{
		$data['jadwals'] = $this->jadwal->getJadwals();
		$this->load->view('include/header');
		$this->load->view('pages/jadwal',$data);
		$this->load->view('include/footer');
	}

	public function addJadwal()
	{
		$this->load->view('include/header');
		$this->load->view('pages/formAdd');
		$this->load->view('include/footer');
	}

	public function editJadwal($id)
	{
		$data['jadwal'] = $this->jadwal->getJadwal($id);
		$this->load->view('include/header');
		$this->load->view('pages/formEdit',$data);
		$this->load->view('include/footer');
	}

	public function save($id = null)
	{
		$data = array(
			'hari'			=> $this->input->post('hari'),
			'mata_kuliah'	=> $this->input->post('matkul'),
			'w_masuk'		=> $this->input->post('masuk'),
			'w_keluar'		=> $this->input->post('keluar'),
			'ruang'			=> $this->input->post('ruang'),
			'dosen'			=> $this->input->post('dosen')
		);

		if($id == null){
			$query = $this->jadwal->saveJadwal($data);
		}else{
			$query = $this->jadwal->editJadwal($id,$data);
		}
		if($query)
		{
			redirect('home');
		}else{
			print_r('Something Wrong');
		}
	}
}
