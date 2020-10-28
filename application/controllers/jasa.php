<?php
defined('BASEPATH') or exit('No direct script access allowed');

class jasa extends CI_Controller
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
		$this->template->load('template', 'jasa_view');
	}
	public function tampil()
	{
		echo json_encode($this->db_model->get_where("tbl_jasa", ["hapus" => 0])->result());
	}

	public function tambah()
	{
		$this->form_validation->set_rules('nama', 'Nama', 'required|trim');
		$this->form_validation->set_rules('harga', 'Harga', 'required|trim');
		if ($this->form_validation->run() == false) {
			if (form_error("nama")) {
				$error = form_error("nama");
			} else {
				$error = form_error("harga");
			}
			echo json_encode($error);
		} else {
			$data = [
				"nama_jasa" => $this->input->post("nama", TRUE),
				"harga_jasa" => $this->input->post("harga", TRUE),
				"hapus" => 0
			];
			$this->db_model->insert('tbl_jasa', $data);
			echo json_encode("");
		}
	}
	function ubah_list()
	{
		echo json_encode($this->db_model->get_where('tbl_jasa', ["id_jasa" => $this->input->post('id', TRUE)])->result());
	}

	public function ubah()
	{
		$this->form_validation->set_rules('nama', 'Nama', 'required|trim');
		$this->form_validation->set_rules('harga', 'Harga', 'required|trim');
		if ($this->form_validation->run() == false) {
			if (form_error("nama")) {
				$error = form_error("nama");
			} else {
				$error = form_error("harga");
			}
			echo json_encode($error);
		} else {
			$data = [
				"nama_jasa" => $this->input->post("nama", TRUE),
				"harga_jasa" => $this->input->post("harga", TRUE)
			];
			$this->db_model->update('tbl_jasa', $data, ["id_jasa" => $this->input->post("id", TRUE)]);
			echo json_encode("");
		}
	}

	public function hapus()
	{
		$data = [
			"hapus" => 1
		];
		echo json_encode($this->db_model->update('tbl_jasa', $data, array('id_jasa' => $this->input->post('id', TRUE))));
		// echo json_encode("hapus");
		// echo json_encode($this->db_model->delete("tbl_barang", ['id_barang' => $this->input->post('id', TRUE)]));
	}
}
