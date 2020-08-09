<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Manage_account extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->model('Manage_Account_Model');
		$data = $this->Manage_Account_Model->get_role();
		$data = array('data_controller' => $data );
		
	}

}

/* End of file Manage_account.php */
/* Location: ./application/controllers/Manage_account.php */