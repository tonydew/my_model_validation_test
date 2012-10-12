<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Standard_m extends CI_Model {

	public function insert($data)
	{
		$this->db->insert('validation', $data);
	}
}

/* End of file standard_m.php */
/* Location: ./application/models/standard_m.php */