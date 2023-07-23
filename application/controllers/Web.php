<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Web extends CI_Controller
{
	var $m_kelas;
	var $m_siswa;
	var $m_guru;
	var $m_staff;

	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('m_kelas');
		$this->load->model('m_siswa');
		$this->load->model('m_guru');
		$this->load->model('m_staff');
	}


	public function index()
	{
		$data['title'] = "Beranda";

		$this->load->view('layouts/navbar', $data);
		$this->load->view('pages/index', $data);
		$this->load->view('layouts/footer');
	}

	public function masalah()
	{
		$data['title'] = "Latar Belakang";

		$this->load->view('layouts/navbar', $data);
		$this->load->view('pages/masalah', $data);
		$this->load->view('layouts/footer');
	}

	public function tujuan()
	{
		$data['title'] = "Tujuan";

		$this->load->view('layouts/navbar', $data);
		$this->load->view('pages/tujuan', $data);
		$this->load->view('layouts/footer');
	}

	public function profil()
	{
		$data['kelas']		= $this->m_kelas->count_kelas();
		$data['siswa']		= $this->m_siswa->count_siswa();
		$data['guru']		= $this->m_guru->count_guru();
		$data['staff']		= $this->m_staff->count_staff();
		$data['title'] 		= "Profil";

		$this->load->view('layouts/navbar', $data);
		$this->load->view('pages/profil', $data);
		$this->load->view('layouts/footer');
	}

	public function login()
	{
		$data['title'] = "Login";

		$this->load->view('layouts/navbar', $data);
		$this->load->view('pages/login', $data);
		$this->load->view('layouts/footer');
	}
}
