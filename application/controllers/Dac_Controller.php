<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dac_Controller extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Manage_Account_Model');
	}

	public function index()
	{
		
	}

	public function account()
	{
		$data_result = $this->Manage_Account_Model->show_account();
		$data_result = array('data_controller' => $data_result );
		$this->load->view('Header');
		$this->load->view('admin/account',$data_result);
		$this->load->view('Footer');

	}

}

/* End of file Dac_Controller.php */
/* Location: ./application/controllers/Dac_Controller.php */