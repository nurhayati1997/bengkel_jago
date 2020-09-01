<?php
defined('BASEPATH') or exit('No direct script access allowed');

class client_control extends CI_Controller
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
		$this->template->load('template', 'client');
	}

	public function get_data()
	{
		$tabel = $this->input->post("target");
		$data = $this->db_model->get_all($tabel)->result_array();
		echo json_encode($data);
	}
}
