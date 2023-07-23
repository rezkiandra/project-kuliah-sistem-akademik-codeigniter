<?php

class M_staff extends CI_Model
{
    public function get_staff()
    {
        $this->db->select('*');
        $this->db->join('jabatan', 'staff.id_jabatan = jabatan.id_jabatan', 'left');

        return $this->db->get('staff')->result();
    }

    public function count_staff()
    {
        return $this->db->get('staff')->num_rows();
    }

    public function get_staff_by_id($id)
    {
        $this->db->select('*');
        $this->db->join('jabatan', 'staff.id_jabatan = jabatan.id_jabatan', 'left');
        $this->db->where('id_staff', $id);

        return $this->db->get('staff');
    }

    public function insert_staff($data, $table)
    {
        $this->db->insert($table, $data);
    }

    public function update_staff($id_staff, $nip, $nama_staff, $alamat, $jenkel, $id_jabatan)
    {
        $data = array(
            'nip'          => $nip,
            'nama_staff'   => $nama_staff,
            'alamat'       => $alamat,
            'jenkel'       => $jenkel,
            'id_jabatan'   => $id_jabatan
        );

        $this->db->where('id_staff', $id_staff);
        $this->db->update('staff', $data);
    }

    public function hapus_staff($id_staff)
    {
        $data = array(
            'id_staff' => $id_staff
        );

        $this->db->where('id_staff', $id_staff);
        $this->db->delete('staff', $data);
    }
}
