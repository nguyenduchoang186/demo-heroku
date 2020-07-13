<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Nhansu_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
    }
    
    public function nhansu_show_model()
	{
		$this->db->select('*');
		
		$ketqua = $this->db->get('nhan_vien');

		//dua ket qua vao mang
		$ketqua = $ketqua->result_array();
		return $ketqua;

	}

}

/* End of file Nhansu_model.php */
/* Location: ./application/models/Nhansu_model.php */