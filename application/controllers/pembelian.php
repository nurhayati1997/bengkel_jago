<?php
defined('BASEPATH') or exit('No direct script access allowed');

class pembelian extends CI_Controller
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
		$this->template->load('template', 'pembelian_view');
	}

	public function lista()
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
			"harga_kulak" => $this->input->post("kulak", TRUE),
			"harga_jual" => $this->input->post("jual", TRUE),
			"jumlah_pembelian" => $this->input->post("jumlah", TRUE),
			"id_pengguna" => $this->session->userdata("id_pengguna")
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
		echo json_encode($this->db_model->get_where('view_pembelian', ["id_pembelian" => $this->input->post('id', TRUE)])->row_array());
	}

	public function tampil()
	{
		$bulan = $this->input->post("bulan");
		$tahun = $this->input->post("tahun");
		// $bulan = "10";
		// $tahun = "2020";
		$mulai = strtotime($tahun . "/" . $bulan . "/" . "1 00:00:00");
		$sampai = strtotime($tahun . "/" . $bulan . "/" . "31 23:59:59");
		$this->db->order_by('tgl_pembelian DESC');
		echo json_encode($this->db_model->get_where("view_pembelian", ['tgl_pembelian >=' => date("Y/m/d  H:i:s", $mulai), 'tgl_pembelian <=' => date("Y/m/d  H:i:s", $sampai)])->result());
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
