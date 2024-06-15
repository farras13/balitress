<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SpesialOfferModel extends CI_Model {

    public function getAll() {
        // Mengambil semua data dari tabel spesialoffer
        return $this->db->get('spesialoffer')->result();
    }

    public function getById($w) {
        // Mengambil semua data dari tabel spesialoffer
        $this->db->where($w);
        return $this->db->get('spesialoffer')->row();
    }

    public function insert($data) {
        // Menyimpan data ke dalam tabel spesialoffer
        $this->db->insert('spesialoffer', $data);
    }

    public function update($id, $data) {
        // Memperbarui data di dalam tabel spesialoffer berdasarkan id
        $this->db->where('id', $id);
        $this->db->update('spesialoffer', $data);
    }

    public function delete($id) {
        // Menghapus data dari tabel spesialoffer berdasarkan id
        $this->db->where('id', $id);
        $this->db->delete('spesialoffer');
    }
}