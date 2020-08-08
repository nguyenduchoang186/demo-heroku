<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login_database extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}

	//read data login
	public function login($data)
	{
		$condition = "user_name =" . "'" . $data['username'] . "' AND " . "user_password =" . "'" . $data['password'] . "'";
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where($condition);
		$this->db->limit(1);

		$query = $this->db->get();
		
		$query = $query->result_array();

		return $query;
		
	}

	public function read_user_infomation($data)
	{
		$condition = "user_name =" . "'" . $data['username'] . "'";
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where($condition);
		$this->db->limit(1);

		$query = $this->db->get();
		$query = $query->result_array();
		return $query;

		// if($query->num_rows() == 1){
		// 	return $query->result();
		// } else {
		// 	return false;
		// }
	}

	public function registration_insert($data) {

		// Query to check whether username already exist or not
		$condition = "user_name =" . "'" . $data['user_name'] . "'";
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where($condition);
		$this->db->limit(1);
		$query = $this->db->get();
		if ($query->num_rows() == 0) {

		// Query to insert data in database
			$this->db->insert('user', $data);
			if ($this->db->affected_rows() > 0) {
				return true;
			}
		} else {
			return false;
		}
	}

}

/* End of file Login_database.php */
/* Location: ./application/models/Login_database.php */