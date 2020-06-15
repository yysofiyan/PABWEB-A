<?php
class Mahasiswa_model extends CI_Model
{
    public function lihat_Data()
    {
    $query = $this->db->get('mahasiswa');
    return $query->result();
    }

    public function metode_Result()
    {
        $query = $this->db->get('mahasiswa');
        return $query->result();
    }

    public function metode_Row()
    {
        $query = $this->db->where('id_mahasiswa', 1);
        $query = $this->db->get('mahasiswa');
        return $query->row();
    }

    public function metode_Result_Array()
    {
        $query = $this->db->get('mahasiswa');
        return $query->result_array();
    }

    public function metode_Row_Array()
    {
        $query = $this->db->where('id_mahasiswa', 1);
        $query = $this->db->get('mahasiswa');
        return $query->row_Array();
    }
   
}