<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_Controller extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Manage_Campaign_Model');
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

	public function campaign()
	{
		$data_result = $this->Manage_Campaign_Model->show_campaign();
		$data_result = array('data_controller' => $data_result );	
			
		$this->load->view('Header');
		$this->load->view('admin/Campaign',$data_result);
		$this->load->view('Footer');
	}

	public function delete($delete_id)
	{
		if($this->Manage_Account_Model->delete_account($delete_id))
		{
			redirect('admin/account');
		}
		else
		{
			alert("Loi");
		}
	}
}

/* End of file Admin_Controller.php */
/* Location: ./application/controllers/Admin_Controller.php */