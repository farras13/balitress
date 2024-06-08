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
        return $this->db->get('GaleriTourPackage')->result_array();
    }

    public function add_image($data)
    {
        return $this->db->insert('GaleriTourPackage', $data);
    }

    public function delete_image($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('GaleriTourPackage');
    }
}
?>
