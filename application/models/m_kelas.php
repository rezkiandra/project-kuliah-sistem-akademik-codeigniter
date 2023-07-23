<?php

class M_kelas extends CI_Model
{
    public function get_kelas()
    {
        return $this->db->get('kelas')->result();
    }

    public function count_kelas()
    {
        return $this->db->get('kelas')->num_rows();
    }

    public function get_kelas_by_id($id)
    {
        $this->db->where('id_kelas', $id);
        return $this->db->get('kelas');
    }

    public function insert_kelas($data, $table)
    {
        $this->db->insert($table, $data);
    }


    public function update_kelas($id_kelas, $nama_kelas)
    {
        $data = array(
            'nama_kelas' => $nama_kelas,
        );

        $this->db->where('id_kelas', $id_kelas);
        $this->db->update('kelas', $data);
    }

    public function hapus_kelas($id_kelas)
    {
        $data = array(
            'id_kelas' => $id_kelas
        );

        $this->db->where('id_kelas', $id_kelas);
        $this->db->delete('kelas', $data);
    }
}
