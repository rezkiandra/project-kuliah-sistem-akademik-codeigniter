<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kelas extends CI_Controller
{

    var $session;
    var $m_kelas;
    var $input;

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('m_kelas');

        if ($this->session->userdata('status') != "login") {
            redirect(base_url("login"));
        }
    }

    public function inputKelas()
    {
        $data['title'] = 'Tambah Kelas';

        $this->load->view('layouts/navbar2');
        $this->load->view('crud/kelas/tambah_kelas', $data);
        $this->load->view('layouts/footer2');
    }

    public function tambahKelas()
    {
        $nama_kelas = $this->input->post('nama_kelas');

        $data = array(
            'nama_kelas' => $nama_kelas,
        );

        $this->m_kelas->insert_kelas($data, 'kelas');
        redirect('webadmin/kelas');
    }

    public function editKelas($id)
    {
        $data['kelas'] = $this->m_kelas->get_kelas_by_id($id)->row();
        $data['title'] = 'Edit Kelas';

        $this->load->view('layouts/navbar2', $data);
        $this->load->view('crud/kelas/edit_kelas', $data);
        $this->load->view('layouts/footer2');
    }

    public function updateKelas()
    {
        $id_kelas = $this->input->post('id_kelas');
        $nama_kelas = $this->input->post('nama_kelas');

        $this->m_kelas->update_kelas($id_kelas, $nama_kelas);
        redirect('webadmin/kelas');
    }

    public function hapusKelas($id_kelas)
    {
        $this->m_kelas->hapus_kelas($id_kelas);
        redirect('webadmin/kelas');
    }
}
