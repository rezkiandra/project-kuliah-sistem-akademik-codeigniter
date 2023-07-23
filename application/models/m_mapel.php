<?php

class M_mapel extends CI_Model
{
    public function get_mapel()
    {
        $this->db->select('*');
        $this->db->join('kelas', 'mapel.id_kelas = kelas.id_kelas', 'left');
        $this->db->join('guru', 'mapel.id_guru = guru.id_guru', 'left');

        return $this->db->get('mapel')->result();
    }

    public function count_mapel()
    {
        return $this->db->get('mapel')->num_rows();
    }

    public function get_mapel_by_id($id)
    {
        $this->db->where('id_mapel', $id);
        return $this->db->get('mapel');
    }

    public function insert_mapel($data, $table)
    {
        $this->db->insert($table, $data);
    }


    public function update_mapel($id_mapel, $kd_mapel, $nama_mapel, $id_kelas, $id_guru)
    {
        $data = array(
            'kd_mapel'      => $kd_mapel,
            'nama_mapel'    => $nama_mapel,
            'id_kelas'      => $id_kelas,
            'id_guru'       => $id_guru,
        );

        $this->db->where('id_mapel', $id_mapel);
        $this->db->update('mapel', $data);
    }

    public function hapus_mapel($id_mapel)
    {
        $data = array(
            'id_mapel' => $id_mapel
        );

        $this->db->where('id_mapel', $id_mapel);
        $this->db->delete('mapel', $data);
    }
}
