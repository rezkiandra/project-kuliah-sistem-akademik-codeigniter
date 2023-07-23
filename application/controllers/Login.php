<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

	var $input;
	var $m_login;
	var $session;

	function __construct()
	{
		parent::__construct();
		$this->load->model('m_login');
	}

	public function index()
	{
		$data['judul'] = "Halaman Depan";
		$this->load->view('template/v_header2', $data);
		$this->load->view('template/v_login', $data);
		$this->load->view('template/v_footer2', $data);
	}

	public function aksi_login()
	{
		//menerima data inputan username dan password
		$user = $this->input->post('username');
		$pass = $this->input->post('password');
		$where = array(
			'username' => $user,
			'password' => md5($pass)
		);

		$cek = $this->m_login->cek_login("login", $where)->num_rows();
		echo $cek;

		if ($cek > 0) {

			$data_session = array(
				'nama' => $user,
				'status' => "login"
			);

			$this->session->set_userdata($data_session);
			redirect(base_url("WebAdmin"));
		} else {
			echo "Username dan password salah !";
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url('web/login'));
	}
}
