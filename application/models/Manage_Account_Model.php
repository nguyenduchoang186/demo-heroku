<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Manage_Account_Model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}
	public function show_account()
	{
		$this->db->select('*');
		$this->db->from('role');
		$this->db->join('user', ' user.role=role.id','left');
		$query = $this->db->get()->result_array();
		return $query;
	}

	public function delete_account($delete_id)
	{
		$this->db->where('id', $delete_id);
		return $this->db->delete('user');
	}

}

/* End of file Manage_Account_Model.php */
/* Location: ./application/models/Manage_Account_Model.php */