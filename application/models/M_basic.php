<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_basic extends CI_Model {

	public function getData($t, $w = null, $join = null, $like = null )
	{
		if ($w != null) {
			$this->db->where($w);
		}
		if ($like != null) {
			foreach ($like as $column => $keyword) {
				$this->db->like($column, $keyword);
			}
		}
		
		return $this->db->get($t);
	}

	public function getDataWherein($t, $w = null, $orderBy = null )
	{
		if ($w != null) {
			foreach ($w as $column => $values) {
				$this->db->where_in($column, $values);
			}
		}

		if ($orderBy != null) {
			foreach ($orderBy as $column => $order) {
				$this->db->order_by($column, $order);
			}
		}
		
		return $this->db->get($t);
	}

	public function getDataLimit($t, $w = null, $limit, $start)
	{
		$this->db->limit($limit, $start);
		if ($w != null) {
			$this->db->where($w);
		}
		
		return $this->db->get($t);
	}

	public function lastId($t, $w = null)
	{
		if ($w != null) {
			$this->db->where($w);	
		}
		
		if ($t == "claim") {
			$this->db->order_by('id_claim', 'desc');	
		} else {
			$this->db->order_by('id', 'desc');
		}
			
		return $this->db->get($t, 1);		
	}

	public function tabklaim($t, $g)
	{
		$this->db->group_by($g);
		return $this->db->get($t)->result();		
	}

	public function ins($t, $data)
	{
		$a = $this->db->insert($t, $data);
		return $a;
	}

	public function upd($t, $data, $w)
	{
		$this->db->update($t, $data, $w);
	}

	public function del($t, $w)
	{
		$this->db->where($w);
		$this->db->delete($t);
	}

	public function hitungK()
	{
		$this->db->group_by('claim');		
	}

	public function get_villa_fasilitas($id) {
        $this->db->select('villa.*');
        $this->db->from('villa');
        $this->db->where('villa.id', $id);
        $query = $this->db->get();
        $room = $query->row_array();
    
        // Get room facilities
        $this->db->select('facility_id');
        $this->db->from('villa_fasilitas');
        $this->db->where('villa_id', $id);
        $facility_query = $this->db->get();
        $room['facilities'] = $facility_query->result_array();
    
        return $room;
    }

	public function get_villa_fasilitass($id) {
        
        // Get room facilities
        $this->db->select('facility_name');
        $this->db->from('villa_fasilitas');
        $this->db->join("facilities", "villa_fasilitas.facility_id = facilities.id");
		$this->db->where('villa_id', $id);
        $facility_query = $this->db->get();
        return $facility_query->result();    
    }
	public function insert_villa_facilities($room_id, $facility_ids) {
        foreach ($facility_ids as $facility_id) {
            $this->db->insert('villa_fasilitas', ['villa_id' => $room_id, 'facility_id' => $facility_id]);
        }
    }

}

/* End of file M_basic.php */
