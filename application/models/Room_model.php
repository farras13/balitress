<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Room_model extends CI_Model {

    public function __construct() {
        $this->load->database();
    }

    // Create a new room
    public function create_room($data) {
        return $this->db->insert('rooms', $data);
    }

    // Read all rooms
    public function get_all_rooms($w = null) {
        $this->db->select('r.*, rt.type_name');
        $this->db->from('rooms r');
        $this->db->join('villa vl', 'r.villa_id = vl.id');
        $this->db->join('room_types rt', 'r.room_type = rt.id');
        if($w != null){
            $this->db->where($w);
        }
        $query = $this->db->get();
        return $query->result_array();
    }

    // Get a single room by ID
    public function get_room_by_id($id) {
        $this->db->select('rooms.*, room_types.type_name');
        $this->db->from('rooms');
        $this->db->join('room_types', 'rooms.room_type = room_types.id');
        $this->db->where('rooms.id', $id);
        $query = $this->db->get();
        $room = $query->row_array();
    
        // Get room facilities
        $this->db->select('facility_id');
        $this->db->from('room_facilities');
        $this->db->where('room_id', $id);
        $facility_query = $this->db->get();
        $room['facilities'] = $facility_query->result_array();
    
        return $room;
    }
    

    // Update a room
    public function update_room($id, $data) {
        $this->db->where('id', $id);
        return $this->db->update('rooms', $data);
    }

    // Delete a room
    public function delete_room($id) {
        $this->db->where('id', $id);
        return $this->db->delete('rooms');
    }

    // Get all room types for dropdown
    public function get_room_types() {
        $query = $this->db->get('room_types');
        return $query->result_array();
    }

    // Get all facilities
    public function get_facilities() {
        $query = $this->db->get('facilities');
        return $query->result_array();
    }

    // Insert room facilities
    public function insert_room_facilities($room_id, $facility_ids) {
        foreach ($facility_ids as $facility_id) {
            $this->db->insert('room_facilities', ['room_id' => $room_id, 'facility_id' => $facility_id]);
        }
    }

    // Delete room facilities
    public function delete_room_facilities($room_id) {
        $this->db->where('room_id', $room_id);
        return $this->db->delete('room_facilities');
    }
}
