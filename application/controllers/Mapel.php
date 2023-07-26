<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mapel extends CI_Controller
{

    var $session;
    var $m_kelas;
    var $m_guru;
    var $m_mapel;
    var $input;

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('m_kelas');
        $this->load->model('m_guru');
        $this->load->model('m_mapel');

        if ($this->session->userdata('status') != "login") {
            redirect(base_url("login"));
        }
    }

    public function inputMapel()
    {
        $data['title'] = 'Tambah Mapel';
        $data['kelas'] = $this->m_kelas->get_kelas();
        $data['guru']  = $this->m_guru->get_guru();

        $this->load->view('layouts/navbar2', $data);
        $this->load->view('crud/mapel/tambah_mapel', $data);
        $this->load->view('layouts/footer2');
    }

    public function tambahMapel()
    {
        $kd_mapel   = $this->input->post('kd_mapel');
        $nama_mapel = $this->input->post('nama_mapel');
        $id_kelas   = $this->input->post('id_kelas');
        $id_guru    = $this->input->post('id_guru');

        $data = array(
            'kd_mapel'      => $kd_mapel,
            'nama_mapel'    => $nama_mapel,
            'id_kelas'      => $id_kelas,
            'id_guru'       => $id_guru,
        );

        $this->m_mapel->insert_mapel($data, 'mapel');
        redirect('admin/mapel');
    }

    public function editMapel($id)
    {
        $data['mapel'] = $this->m_mapel->get_mapel_by_id($id)->row();
        $data['kelas'] = $this->m_kelas->get_kelas();
        $data['guru'] = $this->m_guru->get_guru();

        $data['title'] = 'Edit Mapel';

        $this->load->view('layouts/navbar2', $data);
        $this->load->view('crud/mapel/edit_mapel', $data);
        $this->load->view('layouts/footer2');
    }

    public function updateMapel()
    {
        $id_mapel   = $this->input->post('id_mapel');
        $kd_mapel   = $this->input->post('kd_mapel');
        $nama_mapel = $this->input->post('nama_mapel');
        $id_kelas   = $this->input->post('id_kelas');
        $id_guru    = $this->input->post('id_guru');

        $this->m_mapel->update_mapel($id_mapel, $kd_mapel, $nama_mapel, $id_kelas, $id_guru);
        redirect('admin/mapel');
    }

    public function hapusMapel($id_mapel)
    {
        $this->m_mapel->hapus_mapel($id_mapel);
        redirect('admin/mapel');
    }
}
