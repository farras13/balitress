<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Retreats_model extends CI_Model {

    public function get_all() {
        return $this->db->get('retreats')->result();
    }

    public function get_by_id($id) {
        return $this->db->get_where('retreats', array('retreat_id' => $id))->row();
    }

    public function insert($data) {
        $this->db->insert('retreats', $data);
    }

    public function update($id, $data) {
        $this->db->where('retreat_id', $id);
        $this->db->update('retreats', $data);
    }

    public function delete($id) {
        $this->db->where('retreat_id', $id);
        $this->db->delete('retreats');
    }
}
