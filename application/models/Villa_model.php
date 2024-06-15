<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Villa_model extends CI_Model {

	public function getDataWithJoin($w = null)
	{
		if ($w != null) {
			$this->db->where($w);
		}
        $this->db->join("villa_rooms", "villa.id = villa_rooms.villa_id");
        $this->db->select("villa.*, villa_rooms.room_id");
		return $this->db->get("villa");
	}

	
}

/* End of file M_basic.php */
