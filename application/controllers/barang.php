<?php
defined('BASEPATH') or exit('No direct script access allowed');

class barang extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		if (!$this->session->userdata("id_pengguna")) {
			redirect("login");
		}
		$this->load->model('db_model');
	}

	public function index()
	{
		$this->template->load('template', 'barang_view');
	}
	public function tampil()
	{
		echo json_encode($this->db_model->get_all("tbl_barang")->result());
	}

	public function tambah()
	{
		$data = [
			"kode_barang" => $this->input->post("kode", TRUE),
			"nama_barang" => $this->input->post("nama", TRUE),
			"distributor" => $this->input->post("distributor", TRUE),
			"jenis" => $this->input->post("jenis", TRUE),
			"keterangan" => $this->input->post("ket", TRUE),
			"lokasi" => $this->input->post("lokasi", TRUE),
			"merk_barang" => $this->input->post("merk", TRUE),
			"harga_kulak" => $this->input->post("satuan", TRUE),
			"harga_jual" => $this->input->post("jual", TRUE),
			"pagu" => $this->input->post("pagu", TRUE),
			"hapus" => 0
		];
		$this->db_model->insert('tbl_barang', $data);
		echo json_encode($data);
	}
	function ubah_list()
	{
		echo json_encode($this->db_model->get_where('tbl_barang', ["id_barang" => $this->input->post('id', TRUE)])->result());
	}

	public function ubah()
	{
		$data = [
			"kode_barang" => $this->input->post("kode", TRUE),
			"nama_barang" => $this->input->post("nama", TRUE),
			"distributor" => $this->input->post("distributor", TRUE),
			"jenis" => $this->input->post("jenis", TRUE),
			"keterangan" => $this->input->post("ket", TRUE),
			"lokasi" => $this->input->post("lokasi", TRUE),
			"merk_barang" => $this->input->post("merk", TRUE),
			"harga_kulak" => $this->input->post("satuan", TRUE),
			"harga_jual" => $this->input->post("jual", TRUE),
			"stok_barang" => $this->input->post("stok", TRUE),
			"pagu" => $this->input->post("pagu", TRUE)
		];
		$this->db_model->update('tbl_barang', $data, array('id_barang' => $this->input->post('id', TRUE)));
		echo json_encode($data);
	}

	public function hapus()
	{
		$data = [
			"hapus" => 1
		];
		echo json_encode($this->db_model->update('tbl_barang', $data, array('id_barang' => $this->input->post('id', TRUE))));
		// echo json_encode("hapus");
		// echo json_encode($this->db_model->delete("tbl_barang", ['id_barang' => $this->input->post('id', TRUE)]));
	}
}
