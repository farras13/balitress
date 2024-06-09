<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class GalleryTourPackage_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function get_all_images()
    {
        return $this->db->get('galeritourpackage')->result_array();
    }

    public function add_image($data)
    {
        return $this->db->insert('galeritourpackage', $data);
    }

    public function delete_image($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('galeritourpackage');
    }
}
?>
