<?php
defined('BASEPATH') or exit('No direct script access allowed');

class user extends CI_Controller
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
		$this->template->load('template', 'user_view');
	}

	public function get_data()
	{
		$tabel = $this->input->post("target");
		$data = $this->db_model->get_where($tabel, ["hapus", 0])->result_array();
		echo json_encode($data);
	}

	public function tambah_data()
	{
		$this->form_validation->set_rules('nama', 'Nama', 'required|trim|is_unique[tbl_pengguna.nama]');
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
			$nama = $this->input->post("nama");
			$password = password_hash($this->input->post("password"), PASSWORD_DEFAULT);
			$rule = $this->input->post("rule");

			$this->db_model->insert($tabel, ["nama" => $nama, "password" => $password, "rule" => $rule, "hapus" => 0]);
			echo json_encode("");
		}
	}

	public function get_dataByid()
	{
		$tabel = $this->input->post("target");
		$id = $this->input->post("id");
		$data = $this->db_model->get_where($tabel, ["id_pengguna" => $id])->row_array();
		echo json_encode($data);
	}

	public function ubah_data()
	{
		$this->form_validation->set_rules('rule', 'Rule', 'required');
		if ($this->input->post("password") != "") {
			$this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[5]|matches[verifpass]');
			$this->form_validation->set_rules('verifpass', 'Verifikasi Password', 'required|trim|matches[password]');
		}

		if ($this->form_validation->run() == false) {
			if (form_error("password")) {
				$error = form_error("password");
			} else {
				$error = form_error("verifpass");
			}
			echo json_encode($error);
		} else {
			$tabel = $this->input->post("target");
			$id = $this->input->post("id");
			$password = password_hash($this->input->post("password"), PASSWORD_DEFAULT);
			$rule = $this->input->post("rule");
			if ($this->input->post("password") != "") {
				$this->db_model->update($tabel, ["password" => $password, "rule" => $rule], ["id_pengguna" => $id]);
				echo json_encode("");
			} else {
				$this->db_model->update($tabel, ["rule" => $rule], ["id_pengguna" => $id]);
				echo json_encode("");
			}
		}
	}

	public function hapus_data()
	{
		$tabel = $this->input->post("target");
		$id = $this->input->post("id");
		$this->db_model->update($tabel, ["hapus" => 1], ["id_pengguna" => $id]);
		echo json_encode("");
	}
}
