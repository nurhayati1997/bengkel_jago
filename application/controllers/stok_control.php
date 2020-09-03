<?php
defined('BASEPATH') or exit('No direct script access allowed');

class stok_control extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('db_model');
		$this->load->library('form_validation');
	}

	public function index()
	{
		//echo  'hello panda';
		$this->template->load('template', 'stok');
	}

	public function get_data()
	{
		$data = $this->db_model->get_all("tbl_barang")->result_array();
		echo json_encode($data);
	}
}
