<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_album extends CI_Model
{
    public function tampil_data()
    {
        return $this->db->query('SELECT * FROM album')->result();
    }

    public function tambah_album($data)
    {
        return $this->db->insert('album', $data);
    }
    public function hapus_album($id_album, $table)
    {
        $this->db->where('id_album', $id_album);
        return $this->db->delete($table);
    }
    public function ubah_album($id_album, $data)
    {
        // Pastikan $id_album adalah integer untuk mencegah SQL Injection


        // Validasi data sebelum diupdate
        if (!is_array($data) || empty($data)) {
            return false;
        }

        // Pastikan hanya kolom yang diperbolehkan yang diupdate
        $allowed_columns = ['gambar_album', 'keterangan'];
        foreach ($data as $column => $value) {
            if (!in_array($column, $allowed_columns)) {
                unset($data[$column]);
            }
        }

        // Ubah data berdasarkan id_album
        $this->db->where('id_album', $id_album);
        return $this->db->update('album', $data);
    }
    public function get_album_by_id($id_album)
    {
        // Query untuk mengambil data album berdasarkan ID
        $query = $this->db->get_where('album', array('id_album' => $id_album));
        return $query->row();
    }
}
