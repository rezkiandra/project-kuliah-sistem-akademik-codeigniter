<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Guru extends CI_Controller
{

    var $session;
    var $m_guru;
    var $m_jabatan;
    var $input;

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('m_guru');
        $this->load->model('m_jabatan');

        if ($this->session->userdata('status') != "login") {
            redirect(base_url("login"));
        }
    }

    public function inputGuru()
    {
        $data['title'] = 'Tambah Guru';
        $data['jabatan'] = $this->m_jabatan->get_jabatan_guru();

        $this->load->view('layouts/navbar2', $data);
        $this->load->view('crud/guru/tambah_guru', $data);
        $this->load->view('layouts/footer2');
    }

    public function tambahGuru()
    {
        $nip        = $this->input->post('nip');
        $nama_guru  = $this->input->post('nama_guru');
        $alamat     = $this->input->post('alamat');
        $jenkel     = $this->input->post('jenkel');
        $id_jabatan = $this->input->post('id_jabatan');

        $data = array(
            'nip'           => $nip,
            'nama_guru'     => $nama_guru,
            'alamat'        => $alamat,
            'jenkel'        => $jenkel,
            'id_jabatan'    => $id_jabatan
        );

        $this->m_guru->insert_guru($data, 'guru');
        redirect('admin/guru');
    }

    public function editGuru($id)
    {
        $data['guru']    = $this->m_guru->get_guru_by_id($id)->row();
        $data['jabatan'] = $this->m_jabatan->get_jabatan_guru();
        $data['title']      = 'Edit Guru';

        $this->load->view('layouts/navbar2', $data);
        $this->load->view('crud/guru/edit_guru', $data);
        $this->load->view('layouts/footer2');
    }

    public function updateGuru()
    {
        $id_guru        = $this->input->post('id_guru');
        $nip            = $this->input->post('nip');
        $nama_guru      = $this->input->post('nama_guru');
        $alamat         = $this->input->post('alamat');
        $jenkel         = $this->input->post('jenkel');
        $id_jabatan     = $this->input->post('id_jabatan');

        $this->m_guru->update_guru($id_guru, $nip, $nama_guru, $alamat, $jenkel, $id_jabatan);
        redirect('admin/guru');
    }

    public function hapusGuru($id_guru)
    {
        $this->m_guru->hapus_guru($id_guru);
        redirect('admin/guru');
    }
}
