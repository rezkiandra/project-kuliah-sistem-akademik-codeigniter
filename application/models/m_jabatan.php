<?php

class M_jabatan extends CI_Model
{
    public function get_jabatan()
    {
        return $this->db->get('jabatan')->result();
    }

    public function count_jabatan()
    {
        return $this->db->get('jabatan')->num_rows();
    }

    public function get_jabatan_guru()
    {
        $this->db->select('*');
        $this->db->like('nama_jabatan', 'Guru');
        return $this->db->get('jabatan')->result();
    }

    public function get_jabatan_staff()
    {
        $this->db->select('*');
        $this->db->like('nama_jabatan', 'Staff');
        return $this->db->get('jabatan')->result();
    }

    public function get_jabatan_by_id($id)
    {
        $this->db->where('id_jabatan', $id);
        return $this->db->get('jabatan');
    }

    public function insert_jabatan($data, $table)
    {
        $this->db->insert($table, $data);
    }


    public function update_jabatan($id_jabatan, $nama_jabatan)
    {
        $data = array(
            'nama_jabatan' => $nama_jabatan,
        );

        $this->db->where('id_jabatan', $id_jabatan);
        $this->db->update('jabatan', $data);
    }

    public function hapus_jabatan($id_jabatan)
    {
        $data = array(
            'id_jabatan' => $id_jabatan
        );

        $this->db->where('id_jabatan', $id_jabatan);
        $this->db->delete('jabatan', $data);
    }
}
