<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}

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
	}
}

/* End of file Login_model.php */
/* Location: ./application/models/Login_model.php */