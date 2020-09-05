<?php
defined('BASEPATH') or exit('No direct script access allowed');

class penjualan_control extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('db_model');
	}

	public function index()
	{
		//echo  'hello panda';
		$this->template->load('template', 'penjualan');
	}

	public function list()
	{
		echo json_encode($this->db_model->get_all("tbl_jasa")->result());
	}
	public function list_client()
	{
		echo json_encode($this->db_model->get_all("tbl_client")->result());
	}
}
