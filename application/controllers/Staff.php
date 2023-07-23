<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Staff extends CI_Controller
{

    var $session;
    var $m_staff;
    var $m_jabatan;
    var $input;

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('m_staff');
        $this->load->model('m_jabatan');

        if ($this->session->userdata('status') != "login") {
            redirect(base_url("login"));
        }
    }

    public function inputStaff()
    {
        $data['title'] = 'Tambah Staff';
        $data['jabatan'] = $this->m_jabatan->get_jabatan_staff();

        $this->load->view('layouts/navbar2');
        $this->load->view('crud/staff/tambah_staff', $data);
        $this->load->view('layouts/footer2');
    }

    public function tambahStaff()
    {
        $nip        = $this->input->post('nip');
        $nama_staff = $this->input->post('nama_staff');
        $alamat     = $this->input->post('alamat');
        $jenkel     = $this->input->post('jenkel');
        $id_jabatan = $this->input->post('id_jabatan');

        $data = array(
            'nip'           => $nip,
            'nama_staff'    => $nama_staff,
            'alamat'        => $alamat,
            'jenkel'        => $jenkel,
            'id_jabatan'    => $id_jabatan
        );

        $this->m_staff->insert_staff($data, 'staff');
        redirect('webadmin/staff');
    }

    public function editStaff($id)
    {
        $data['staff']    = $this->m_staff->get_staff_by_id($id)->row();
        $data['jabatan'] = $this->m_jabatan->get_jabatan_staff();
        $data['title']      = 'Edit Staff';

        $this->load->view('layouts/navbar2', $data);
        $this->load->view('crud/staff/edit_staff', $data);
        $this->load->view('layouts/footer2');
    }

    public function updateStaff()
    {
        $id_staff       = $this->input->post('id_staff');
        $nip            = $this->input->post('nip');
        $nama_staff     = $this->input->post('nama_staff');
        $alamat         = $this->input->post('alamat');
        $jenkel         = $this->input->post('jenkel');
        $id_jabatan     = $this->input->post('id_jabatan');

        $this->m_staff->update_staff($id_staff, $nip, $nama_staff, $alamat, $jenkel, $id_jabatan);
        redirect('webadmin/staff');
    }

    public function hapusStaff($id_staff)
    {
        $this->m_staff->hapus_staff($id_staff);
        redirect('webadmin/staff');
    }
}
