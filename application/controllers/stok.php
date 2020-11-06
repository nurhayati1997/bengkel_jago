<?php
defined('BASEPATH') or exit('No direct script access allowed');

class stok extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		if (!$this->session->userdata("id_pengguna")) {
			redirect("login");
		}
		$this->load->model('db_model');
		$this->load->library('form_validation');
	}

	public function index()
	{
		$this->template->load('template', 'stok_view');
	}

	public function get_data()
	{
		$data = $this->db_model->get_where("tbl_barang", ["hapus" => 0])->result_array();
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
			$jenis = $this->input->post("jenis");

			if ($jenis == "pagu") {
				$data = ["pagu" => $pagu];
			} else {
				$data = ["stok_barang" => $pagu];
			}

			$this->db_model->update($tabel, $data, ["id_barang" => $id]);
			echo json_encode("");
		}
	}
}
