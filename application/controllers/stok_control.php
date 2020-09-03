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


	public function get_dataByid()
	{
		$tabel = $this->input->post("target");
		$id = $this->input->post("id");
		$data = $this->db_model->get_where($tabel, ["id_barang" => $id])->row_array();
		echo json_encode($data);
	}

	public function ubah_data()
	{
		$this->form_validation->set_rules('pagu', 'Pagu', 'required|trim');

		if ($this->form_validation->run() == false) {
			if (form_error("pagu")) {
				$error = form_error("pagu");
			}
			echo json_encode($error);
		} else {
			$tabel = $this->input->post("target");
			$id = $this->input->post("id");
			$pagu = $this->input->post("pagu");

			$this->db_model->update($tabel, ["pagu" => $pagu], ["id_barang" => $id]);
			echo json_encode("");
		}
	}
}
