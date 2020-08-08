<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_controller extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Login_model');
	}

	public function index()
	{
		$this->load->view('login_form');
	}

	public function home()
	{
		$this->load->view('home_page');
	}

	public function login()
	{
		$sess_arr = array(
			'username' => $this->input->post('username'),
			'password' => $this->input->post('password')
		);
		$data = $this->Login_model->login($sess_arr);
		if ($data) {
			
			$this->session->set_userdata('sid', $data['0']['id']);
			$this->session->set_userdata('username', $data['0']['user_name']);
			$this->session->set_userdata('password', $data['0']['user_password']);
			$this->session->set_userdata('mail', $data['0']['mail']);
			$this->session->set_userdata('status', $data['0']['status']);
			$this->session->set_userdata('approvaldate', $data['0']['approval_date']);
			$this->session->set_userdata('companyname', $data['0']['company_name']);
			$this->session->set_userdata('numofad', $data['0']['num_of_ad']);
			$this->session->set_userdata('role', $data['0']['role']);

			redirect('home');
		}
		else {
			redirect(base_url());
		}	
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url());
	}
}

/* End of file User_controller.php */
/* Location: ./application/controllers/User_controller.php */