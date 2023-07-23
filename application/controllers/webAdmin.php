<?php
defined('BASEPATH') or exit('No direct script access allowed');

class WebAdmin extends CI_Controller
{
	var $session;
	var $m_kelas;
	var $m_jabatan;
	var $m_mapel;
	var $m_siswa;
	var $m_guru;
	var $m_staff;
	var $data_session;

	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('m_kelas');
		$this->load->model('m_jabatan');
		$this->load->model('m_mapel');
		$this->load->model('m_siswa');
		$this->load->model('m_guru');
		$this->load->model('m_staff');

		if ($this->session->userdata('status') != "login") {
			redirect(base_url("web/login"));
		}
	}

	public function index()
	{
		$data['kelas']		= $this->m_kelas->count_kelas();
		$data['jabatan']	= $this->m_jabatan->count_jabatan();
		$data['mapel']		= $this->m_mapel->count_mapel();
		$data['siswa']		= $this->m_siswa->count_siswa();
		$data['guru']		= $this->m_guru->count_guru();
		$data['staff']		= $this->m_staff->count_staff();
		$data['title'] 		= 'Dashboard';

		$this->load->view('layouts/navbar2', $data);
		$this->load->view('admin/index', $data);
		$this->load->view('layouts/footer2');
	}

	public function kelas()
	{
		$data['kelas'] = $this->m_kelas->get_kelas();
		$data['title'] = 'Table Kelas';

		$this->load->view('layouts/navbar2', $data);
		$this->load->view('admin/kelas', $data);
		$this->load->view('layouts/footer2');
	}

	public function mapel()
	{
		$data['mapel'] 	= $this->m_mapel->get_mapel();
		$data['title'] 	= 'Table Mapel';

		$this->load->view('layouts/navbar2', $data);
		$this->load->view('admin/mapel', $data);
		$this->load->view('layouts/footer2');
	}

	public function siswa()
	{
		$data['siswa'] = $this->m_siswa->get_siswa();
		$data['title'] = 'Table Siswa';

		$this->load->view('layouts/navbar2', $data);
		$this->load->view('admin/siswa', $data);
		$this->load->view('layouts/footer2');
	}

	public function jabatan()
	{
		$data['jabatan'] 	= $this->m_jabatan->get_jabatan();
		$data['title'] 		= 'Table Jabatan';

		$this->load->view('layouts/navbar2', $data);
		$this->load->view('admin/jabatan', $data);
		$this->load->view('layouts/footer2');
	}

	public function guru()
	{
		$data['guru'] 	= $this->m_guru->get_guru();
		$data['title'] 	= 'Table guru';

		$this->load->view('layouts/navbar2', $data);
		$this->load->view('admin/guru', $data);
		$this->load->view('layouts/footer2');
	}

	public function staff()
	{
		$data['staff'] 	= $this->m_staff->get_staff();
		$data['title'] 	= 'Table Staff';

		$this->load->view('layouts/navbar2', $data);
		$this->load->view('admin/staff', $data);
		$this->load->view('layouts/footer2');
	}
}
