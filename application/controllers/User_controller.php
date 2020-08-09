<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_controller extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Login_database');
		$this->load->model('Manage_Account_Model');
	}

	public function index()
	{
		$this->load->view('login_form');
	}
	public function register_form()
	{
		$this->load->view('register_form');
	}

	public function new_register()
	{
		$this->form_validation->set_rules('companyname', 'Company Name', 'trim|required');
		$this->form_validation->set_rules('username', 'User name', 'trim|required');
		$this->form_validation->set_rules('email', 'Email', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_rules('confirmpassword', 'Confirm Password', 'required|matches[password]');

		if ($this->form_validation->run() == false) {
			$this->load->view('register_form');
		} else {
			$data = array(
				'user_name' => $this->input->post('username'),
				'mail' => $this->input->post('email'),
				'company_name' => $this->input->post('companyname'),
				'user_password' => $this->input->post('password'),
				'status' => '2',
				'role' => '3'
			);
			$result = $this->Login_database->registration_insert($data) ;
			if ($result == TRUE) {
				$data['message_display'] = 'Registration Successfully !';
				redirect(base_url());
			} else {
				$data['message_display'] = 'Username already exist!';
				$this->load->view('register_form', $data);
			}
		}
	}

	public function login()
	{
		$sess_arr = array(
			'username' => $this->input->post('username'),
			'password' => $this->input->post('password')
		);
		$data = $this->Login_database->login($sess_arr);
		if ($data) {
			if ($data['0']['status'] == '2') {
				redirect(base_url());
				// alert("Tai khoan chua duoc kich hoat");
			}
			$this->session->set_userdata('sid', $data['0']['id']);
			$this->session->set_userdata('username', $data['0']['user_name']);
			$this->session->set_userdata('password', $data['0']['user_password']);
			$this->session->set_userdata('mail', $data['0']['mail']);
			$this->session->set_userdata('status', $data['0']['status']);
			$this->session->set_userdata('approvaldate', $data['0']['approval_date']);
			$this->session->set_userdata('companyname', $data['0']['company_name']);
			$this->session->set_userdata('numofad', $data['0']['num_of_ad']);
			$this->session->set_userdata('role', $data['0']['role']);

			if($data['0']['role']== 1){
				redirect('admin/account');
			}else if($data['0']['role']== 2){
				redirect('dac');
			}else if($data['0']['role']== 3){
				redirect('advertiser');
			}			
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