<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Manage_Campaign_Model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}

	public function show_campaign()
	{
		$this->db->select('*');
		$this->db->from('campaign');
		return $this->db->get()->result_array();
	}

}

/* End of file Manage_Campaign_Model.php */
/* Location: ./application/models/Manage_Campaign_Model.php */