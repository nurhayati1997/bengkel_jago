<?php
defined('BASEPATH') or exit('No direct script access allowed');

class user_control extends CI_Controller
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
		$this->template->load('template', 'user');
	}

	public function get_data()
	{
		$tabel = $this->input->post("target");
		$data = $this->db_model->get_all($tabel)->result_array();
		echo json_encode($data);
	}

	public function tambah_data()
	{
		$this->form_validation->set_rules('nama', 'Nama', 'required|trim');
		$this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[5]|matches[verifpass]');
		$this->form_validation->set_rules('verifpass', 'Verifikasi Password', 'required|trim|matches[password]');
		if ($this->form_validation->run() == false) {
			if (form_error("nama")) {
				$error = form_error("nama");
			} elseif (form_error("password")) {
				$error = form_error("password");
			} else {
				$error = form_error("verifpass");
			}
			echo json_encode($error);
		} else {
			$tabel = $this->input->post("target");
			$nama = password_hash($this->$this->input->post("password"), PASSWORD_DEFAULT);
			$password = $this->input->post("password");
			$verifpass = $this->input->post("verifpass");
			$rule = $this->input->post("rule");

			$this->db_model->insert($tabel, ["nama" => $nama, "password" => $password, "rule" => $rule]);
			echo json_encode("");
		}
	}
}
