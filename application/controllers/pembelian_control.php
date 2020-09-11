<?php
defined('BASEPATH') or exit('No direct script access allowed');

class pembelian_control extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('db_model');
	}


	public function index()
	{
		//echo  'hello panda';
		$this->template->load('template', 'pembelian');
	}

	public function list()
	{
		echo json_encode($this->db_model->get_where('tbl_barang', ["hapus" => 0])->result());
	}
	public function tambah()
	{
		date_default_timezone_set('Asia/Jakarta');
		$tgl = date('Y-m-d H:i:s');

		$data = [
			"id_barang" => $this->input->post("id", TRUE),
			"tgl_pembelian" => $tgl,
			"harga_kulak" => $this->input->post("harga", TRUE),
			"jumlah_pembelian" => $this->input->post("jumlah", TRUE),
			"id_pengguna" => 1
		];
		$this->db_model->insert('tbl_pembelian', $data);

		$lama = (int) $this->input->post("stok", TRUE) + (int)$this->input->post("jumlah", TRUE);
		$data = [
			"stok_barang" =>  $lama
		];

		$this->db_model->update('tbl_barang', $data, array('id_barang' => $this->input->post('id', TRUE)));

		echo json_encode('');
	}

	public function ubah()
	{
		$stok_update = ((int) $this->input->post("stok", TRUE) - (int) $this->input->post("stok_ubah", TRUE)) + $this->input->post("jumlah", TRUE);
		$data = [
			"stok_barang" => $stok_update
		];

		$this->db_model->update('tbl_barang', $data, array('id_barang' => $this->input->post('id_barang', TRUE)));

		$data = [
			"jumlah_pembelian" => (int) $this->input->post("jumlah", TRUE)
		];

		$this->db_model->update('tbl_pembelian', $data, array('id_pembelian' => $this->input->post('id_pembelian', TRUE)));

		echo json_encode("");
	}

	function ubah_list()
	{
		echo json_encode($this->db_model->get_where('view_pembelian', ["id_pembelian" => $this->input->post('id', TRUE)])->result());
	}

	public function tampil()
	{
		echo json_encode($this->db_model->get_all("view_pembelian")->result());
	}

	public function hapus()
	{
		$view = $this->db_model->get_where('view_pembelian', ['id_pembelian' => $this->input->post('id', TRUE)])->row();
		$stok = (int) $view->stok_barang - (int) $view->jumlah_pembelian;

		$data = [
			"stok_barang" => $stok
		];

		$this->db_model->update('tbl_barang', $data, array('id_barang' => $view->id_barang));

		echo json_encode($this->db_model->delete("tbl_pembelian", ['id_pembelian' => $view->id_pembelian]));
	}
}
