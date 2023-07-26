<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Jabatan extends CI_Controller
{

    var $session;
    var $m_jabatan;
    var $input;

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('m_jabatan');

        if ($this->session->userdata('status') != "login") {
            redirect(base_url("login"));
        }
    }

    public function inputJabatan()
    {
        $data['title'] = 'Tambah Jabatan';

        $this->load->view('layouts/navbar2', $data);
        $this->load->view('crud/jabatan/tambah_jabatan', $data);
        $this->load->view('layouts/footer2');
    }

    public function tambahJabatan()
    {
        $nama_jabatan = $this->input->post('nama_jabatan');

        $data = array(
            'nama_jabatan' => $nama_jabatan,
        );

        $this->m_jabatan->insert_jabatan($data, 'jabatan');
        redirect('admin/jabatan');
    }

    public function editJabatan($id)
    {
        $data['jabatan'] = $this->m_jabatan->get_jabatan_by_id($id)->row();
        $data['title'] = 'Edit Jabatan';

        $this->load->view('layouts/navbar2', $data);
        $this->load->view('crud/jabatan/edit_jabatan', $data);
        $this->load->view('layouts/footer2');
    }

    public function updateJabatan()
    {
        $id_jabatan = $this->input->post('id_jabatan');
        $nama_jabatan = $this->input->post('nama_jabatan');

        $this->m_jabatan->update_jabatan($id_jabatan, $nama_jabatan);
        redirect('admin/jabatan');
    }

    public function hapusJabatan($id_jabatan)
    {
        $this->m_jabatan->hapus_jabatan($id_jabatan);
        redirect('admin/jabatan');
    }
}
