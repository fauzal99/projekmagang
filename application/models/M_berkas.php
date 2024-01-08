<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_berkas extends CI_Model
{
    public function tampil_data()
    {
        return $this->db->get('berkas')->result();
    }
    public function tambah_berkas($data, $table)
    {
        return $this->db->insert($table, $data);
    }
    public function hapus_berkas($id_berkas, $table)
    {
        $this->db->where('id', $id_berkas);
        return $this->db->delete($table);
    }
    public function ubah_berkas($id_berkas, $data, $table)
    {
        $this->db->where('id', $id_berkas);
        return $this->db->update($table, $data);
    }
}
