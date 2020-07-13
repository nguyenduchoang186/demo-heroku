<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class View extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		
		$this->load->model('Nhansu_model');
		$dulieu = $this->nhansu_model->nhansu_show_model();
		$dulieu = array('dulieucontroller'=>$dulieu);
		$this->load->view('view',$dulieu);
	}

}

/* End of file View.php */
/* Location: ./application/controllers/View.php */