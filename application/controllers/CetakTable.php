<?php
defined('BASEPATH') or exit('No direct script access allowed');

class CetakTable extends CI_Controller
{
    var $m_kelas;
    var $m_jabatan;
    var $m_mapel;
    var $m_siswa;
    var $m_guru;
    var $m_staff;
    var $session;

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('m_kelas');
        $this->load->model('m_jabatan');
        $this->load->model('m_mapel');
        $this->load->model('m_siswa');
        $this->load->model('m_guru');
        $this->load->model('m_staff');

        if ($this->session->userdata('status') != "login") {
            redirect(base_url("login"));
        }
    }

    public function kelas()
    {
        $data['kelas']  = $this->m_kelas->get_kelas();
        $data['title']  = 'Laporan Kelas';

        $this->load->view('laporan/kelas', $data);
    }

    public function kelasBiasa()
    {
        $data['kelas']  = $this->m_kelas->get_kelas();
        $data['title']  = 'Laporan Kelas';

        $this->load->view('laporan/kelas2', $data);
    }

    public function jabatan()
    {
        $data['jabatan']  = $this->m_jabatan->get_jabatan();
        $data['title']  = 'Laporan Jabatan';

        $this->load->view('laporan/jabatan', $data);
    }

    public function jabatanBiasa()
    {
        $data['jabatan']  = $this->m_jabatan->get_jabatan();
        $data['title']  = 'Laporan Jabatan';

        $this->load->view('laporan/jabatan2', $data);
    }

    public function mapel()
    {
        $data['mapel']  = $this->m_mapel->get_mapel();
        $data['title']  = 'Laporan Mapel';

        $this->load->view('laporan/mapel', $data);
    }

    public function mapelBiasa()
    {
        $data['mapel']  = $this->m_mapel->get_mapel();
        $data['title']  = 'Laporan Mapel';

        $this->load->view('laporan/mapel2', $data);
    }

    public function siswa()
    {
        $data['siswa']  = $this->m_siswa->get_siswa();
        $data['title']  = 'Laporan Siswa';

        $this->load->view('laporan/siswa', $data);
    }

    public function siswaBiasa()
    {
        $data['siswa']  = $this->m_siswa->get_siswa();
        $data['title']  = 'Laporan Siswa';

        $this->load->view('laporan/siswa2', $data);
    }

    public function guru()
    {
        $data['guru']  = $this->m_guru->get_guru();
        $data['title']  = 'Laporan Guru';

        $this->load->view('laporan/guru', $data);
    }

    public function guruBiasa()
    {
        $data['guru']  = $this->m_guru->get_guru();
        $data['title']  = 'Laporan Guru';

        $this->load->view('laporan/guru2', $data);
    }

    public function staff()
    {
        $data['staff']  = $this->m_staff->get_staff();
        $data['title']  = 'Laporan Staff';

        $this->load->view('laporan/staff', $data);
    }

    public function staffBiasa()
    {
        $data['staff']  = $this->m_staff->get_staff();
        $data['title']  = 'Laporan Staff';

        $this->load->view('laporan/staff2', $data);
    }

    public function dashboard()
    {
        $data['kelas']      = $this->m_kelas->count_kelas();
        $data['jabatan']    = $this->m_jabatan->count_jabatan();
        $data['siswa']      = $this->m_siswa->count_siswa();
        $data['guru']       = $this->m_guru->count_guru();
        $data['staff']      = $this->m_staff->count_staff();
        $data['title']      = 'Laporan Dashboard';

        $this->load->view('laporan/dashboard', $data);
    }
}
