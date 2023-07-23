<?php

class M_siswa extends CI_Model
{
    public function get_siswa()
    {
        $this->db->select('*');
        $this->db->join('kelas', 'siswa.id_kelas = kelas.id_kelas', 'left');

        return $this->db->get('siswa')->result();
    }

    public function count_siswa()
    {
        return $this->db->get('siswa')->num_rows();
    }

    public function get_siswa_by_id($id)
    {
        $this->db->select('*');
        $this->db->join('kelas', 'siswa.id_kelas = kelas.id_kelas', 'left');
        $this->db->where('id_siswa', $id);

        return $this->db->get('siswa');
    }

    public function insert_siswa($data, $table)
    {
        $this->db->insert($table, $data);
    }

    public function update_siswa($id_siswa, $nisn, $nama_siswa, $alamat, $jenkel, $id_kelas)
    {
        $data = array(
            'nisn'          => $nisn,
            'nama_siswa'    => $nama_siswa,
            'alamat'        => $alamat,
            'jenkel'        => $jenkel,
            'id_kelas'      => $id_kelas
        );

        $this->db->where('id_siswa', $id_siswa);
        $this->db->update('siswa', $data);
    }

    public function hapus_siswa($id_siswa)
    {
        $data = array(
            'id_siswa' => $id_siswa
        );

        $this->db->where('id_siswa', $id_siswa);
        $this->db->delete('siswa', $data);
    }
}
