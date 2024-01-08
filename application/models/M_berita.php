<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_berita extends CI_Model
{
    public function tampil_data()
    {
        return $this->db->query('SELECT * FROM berita')->result();
    }

    public function tambah_berita($data)
    {
        return $this->db->insert('berita', $data);
    }
    public function hapus_berita($id_berita, $table)
    {
        $this->db->where('id_berita', $id_berita);
        return $this->db->delete($table);
    }
    public function get_berita_by_id($id_berita)
    {
        return $this->db->get_where('berita', array('id_berita' => $id_berita))->row();
    }
    public function ubah_berita($id_berita, $data, $table)
    {
        $this->db->where('id_berita', $id_berita);
        return $this->db->update($table, $data);
    }
    public function edit_coba_berita($id_berita, $data)
    {
        $this->db->where('id_berita', $id_berita);
        $this->db->update('berita', $data);
    }
}
