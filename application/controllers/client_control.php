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

	public function tambah_data()
	{
		$this->form_validation->set_rules('nama', 'Nama', 'required|trim');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required|trim|min_length[5]');
		$this->form_validation->set_rules('no_hp', 'No HP', 'required|trim|min_length[11]');
		$this->form_validation->set_rules('no_ktp', 'No KTP', 'required|trim|min_length[16]|is_unique[tbl_client.no_ktp]');

		if ($this->form_validation->run() == false) {
			if (form_error("nama")) {
				$error = form_error("nama");
			} elseif (form_error("alamat")) {
				$error = form_error("alamat");
			} elseif (form_error("no_hp")) {
				$error = form_error("no_hp");
			} else {
				$error = form_error("no_ktp");
			}
			echo json_encode($error);
		} else {
			$tabel = $this->input->post("target");
			$nama = $this->input->post("nama");
			$alamat = $this->input->post("alamat");
			$no_ktp = $this->input->post("no_ktp");
			$no_hp = $this->input->post("no_hp");

			$this->db_model->insert($tabel, ["nama_client" => $nama, "alamat" => $alamat, "no_ktp" => $no_ktp, "no_telp" => $no_hp]);
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
		$this->form_validation->set_rules('alamat', 'Alamat', 'required|trim|min_length[5]');
		$this->form_validation->set_rules('no_hp', 'No HP', 'required|trim|min_length[11]');

		if ($this->form_validation->run() == false) {
			if (form_error("nama")) {
				$error = form_error("nama");
			} elseif (form_error("alamat")) {
				$error = form_error("alamat");
			} elseif (form_error("no_hp")) {
				$error = form_error("no_hp");
			} else {
				$error = form_error("no_ktp");
			}
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
		$this->db_model->delete($tabel, ["id_client" => $id]);
		echo json_encode("");
	}
}
