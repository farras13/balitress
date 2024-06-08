<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class IncludeExclude_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function get_all_includes($w = "")
    {
        $this->db->select('ie.*, tp.Name as tour_name');
        $this->db->from('ieTourPackage as ie');
        $this->db->join('TourPackage as tp', 'ie.tour_id = tp.id');
        if($w != ""){
            $this->db->where($w);
        }
        return $this->db->get()->result_array();
    }

    public function get_all_excludes()
    {
        $this->db->select('ie.*, tp.Name as tour_name');
        $this->db->from('ieTourPackage as ie');
        $this->db->join('TourPackage as tp', 'ie.tour_id = tp.id');
        $this->db->where('ie.Tipe', 'exclude');
        return $this->db->get()->result_array();
    }

    public function add_include($data)
    {
        $data['Tipe'] = 'include';
        return $this->db->insert('ieTourPackage', $data);
    }

    public function add_exclude($data)
    {
        $data['Tipe'] = 'exclude';
        return $this->db->insert('ieTourPackage', $data);
    }

    public function delete_include($id)
    {
        $this->db->where('id', $id);
        $this->db->where('Tipe', 'include');
        $this->db->delete('ieTourPackage');
    }

    public function delete_exclude($id)
    {
        $this->db->where('id', $id);
        $this->db->where('Tipe', 'exclude');
        $this->db->delete('ieTourPackage');
    }
}
?>
