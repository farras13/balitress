<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_login extends CI_Model {

	public function getData($t, $w = null)
	{
		if ($w != null) {
			$this->db->where($w);
		}
		
		return $this->db->get($t);
	}

	
}

/* End of file M_login.php */
