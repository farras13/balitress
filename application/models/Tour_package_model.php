<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tour_package_model extends CI_Model {

    public function __construct() {
        $this->load->database();
    }

    public function get_packages($id = FALSE) {
        if ($id === FALSE) {
            $query = $this->db->get('tour_packages');
            return $query->result_array();
        }
        
        $query = $this->db->get_where('tour_packages', array('id' => $id));
        return $query->row_array();
    }

    public function create_package($data) {
        return $this->db->insert('tour_packages', $data);
    }

    public function update_package($id, $data) {
        $this->db->where('id', $id);
        return $this->db->update('tour_packages', $data);
    }

    public function delete_package($id) {
        $this->db->where('id', $id);
        return $this->db->delete('tour_packages');
    }
}
