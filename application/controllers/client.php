<?php
defined('BASEPATH') or exit('No direct script access allowed');

class client extends CI_Controller
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
		$this->template->load('template', 'client_view');
	}

	public function get_data()
	{
		$tabel = $this->input->post("target");
		$data = $this->db_model->get_where($tabel, ["hapus" => 0])->result_array();
		echo json_encode($data);
	}

	public function tambah_data()
	{
		$this->form_validation->set_rules('nama', 'Nama', 'required|trim');

		if ($this->form_validation->run() == false) {
			$error = form_error("nama");
			echo json_encode($error);
		} else {
			$tabel = $this->input->post("target");
			$nama = $this->input->post("nama");
			$alamat = $this->input->post("alamat");
			$no_ktp = $this->input->post("no_ktp");
			$no_hp = $this->input->post("no_hp");

			$this->db_model->insert($tabel, ["nama_client" => $nama, "alamat" => $alamat, "no_ktp" => $no_ktp, "no_telp" => $no_hp, "hapus" => 0]);
			echo json_encode("");
		}
	}

	public function get_dataByid()
	{
		$tabel = $this->input->post("target");
		$id = $this->input->post("id");
		$data = $this->db_model->get_where($tabel, ["id_client" => $id])->row_array();
		echo json_encode($data);
	}

	public function ubah_data()
	{
		$this->form_validation->set_rules('nama', 'Nama', 'required|trim');

		if ($this->form_validation->run() == false) {
			$error = form_error("nama");
			echo json_encode($error);
		} else {
			$tabel = $this->input->post("target");
			$id = $this->input->post("id");
			$nama = $this->input->post("nama");
			$alamat = $this->input->post("alamat");
			$no_hp = $this->input->post("no_hp");

			$this->db_model->update($tabel, ["nama_client" => $nama, "alamat" => $alamat, "no_telp" => $no_hp], ["id_client" => $id]);
			echo json_encode("");
		}
	}

	public function hapus_data()
	{
		$tabel = $this->input->post("target");
		$id = $this->input->post("id");
		$this->db_model->update($tabel, ["hapus" => 1], ["id_client" => $id]);
		echo json_encode("");
	}
}
