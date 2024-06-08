<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tour_package_model extends CI_Model {

    public function __construct() {
        $this->load->database();
    }

    public function get_packages($id = FALSE) {
        if ($id === FALSE) {
            $query = $this->db->get('tourpackage');
            return $query->result_array();
        }
        
        $query = $this->db->get_where('tourpackage', array('Id' => $id));
        return $query->row_array();
    }

    public function create_package($data) {
        return $this->db->insert('tourpackage', $data);
    }

    public function update_package($id, $data) {
        $this->db->where('Id', $id);
        return $this->db->update('tourpackage', $data);
    }

    public function delete_package($id) {
        $this->db->where('Id', $id);
        return $this->db->delete('tourpackage');
    }
}
