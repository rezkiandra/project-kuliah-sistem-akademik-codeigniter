<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Siswa extends CI_Controller
{

    var $session;
    var $m_siswa;
    var $m_kelas;
    var $input;

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('m_siswa');
        $this->load->model('m_kelas');

        if ($this->session->userdata('status') != "login") {
            redirect(base_url("login"));
        }
    }

    public function inputSiswa()
    {
        $data['title'] = 'Siswa';
        $data['kelas'] = $this->m_kelas->get_kelas();

        $this->load->view('layouts/navbar2');
        $this->load->view('crud/siswa/tambah_siswa', $data);
        $this->load->view('layouts/footer2');
    }

    public function tambahSiswa()
    {
        $nisn       = $this->input->post('nisn');
        $nama_siswa = $this->input->post('nama_siswa');
        $alamat     = $this->input->post('alamat');
        $jenkel     = $this->input->post('jenkel');
        $id_kelas   = $this->input->post('id_kelas');

        $data = array(
            'nisn'      => $nisn,
            'nama_siswa' => $nama_siswa,
            'alamat'    => $alamat,
            'jenkel'    => $jenkel,
            'id_kelas'  => $id_kelas
        );

        $this->m_siswa->insert_siswa($data, 'siswa');
        redirect('webadmin/siswa');
    }

    public function editSiswa($id)
    {
        $data['siswa'] = $this->m_siswa->get_siswa_by_id($id)->row();
        $data['kelas'] = $this->m_kelas->get_kelas();
        $data['title'] = 'Edit Siswa';

        $this->load->view('layouts/navbar2', $data);
        $this->load->view('crud/siswa/edit_siswa', $data);
        $this->load->view('layouts/footer2');
    }

    public function updateSiswa()
    {
        $id_siswa   = $this->input->post('id_siswa');
        $nisn       = $this->input->post('nisn');
        $nama_siswa = $this->input->post('nama_siswa');
        $alamat     = $this->input->post('alamat');
        $jenkel     = $this->input->post('jenkel');
        $id_kelas   = $this->input->post('id_kelas');

        $this->m_siswa->update_siswa($id_siswa, $nisn, $nama_siswa, $alamat, $jenkel, $id_kelas);
        redirect('webadmin/siswa');
    }

    public function hapusSiswa($id_siswa)
    {
        $this->m_siswa->hapus_siswa($id_siswa);
        redirect('webadmin/siswa');
    }
}
