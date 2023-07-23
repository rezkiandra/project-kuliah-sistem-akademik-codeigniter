<?php

class M_guru extends CI_Model
{
    public function get_guru()
    {
        $this->db->select('*');
        $this->db->join('jabatan', 'guru.id_jabatan = jabatan.id_jabatan', 'left');

        return $this->db->get('guru')->result();
    }

    public function count_guru()
    {
        return $this->db->get('guru')->num_rows();
    }

    public function get_guru_by_id($id)
    {
        $this->db->select('*');
        $this->db->join('jabatan', 'guru.id_jabatan = jabatan.id_jabatan', 'left');
        $this->db->where('id_guru', $id);

        return $this->db->get('guru');
    }

    public function insert_guru($data, $table)
    {
        $this->db->insert($table, $data);
    }

    public function update_guru($id_guru, $nip, $nama_guru, $alamat, $jenkel, $id_jabatan)
    {
        $data = array(
            'nip'          => $nip,
            'nama_guru'    => $nama_guru,
            'alamat'       => $alamat,
            'jenkel'       => $jenkel,
            'id_jabatan'   => $id_jabatan
        );

        $this->db->where('id_guru', $id_guru);
        $this->db->update('guru', $data);
    }

    public function hapus_guru($id_guru)
    {
        $data = array(
            'id_guru' => $id_guru
        );

        $this->db->where('id_guru', $id_guru);
        $this->db->delete('guru', $data);
    }
}
