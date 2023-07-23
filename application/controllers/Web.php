<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Web extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
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
		$data['title'] = "Profil";

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

	// public function tabel()
	// {
	// 	$data['nama'] = "RIO";
	// 	$this->load->view('layouts/v_header', $data);
	// 	$this->load->view('layouts/v_tabel');
	// 	$this->load->view('layouts/v_footer', $data);
	// }
}
