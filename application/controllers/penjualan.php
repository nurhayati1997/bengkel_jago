<?php
defined('BASEPATH') or exit('No direct script access allowed');

class penjualan extends CI_Controller
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
		$this->template->load('template', 'penjualan_view');
	}

	public function lista()
	{
		echo json_encode($this->db_model->get_where("tbl_jasa", ["hapus" => 0])->result());
	}
	public function list_client()
	{
		echo json_encode($this->db_model->get_where("tbl_client", ["hapus" => 0])->result());
	}
	public function transaksi()
	{
		date_default_timezone_set('Asia/Jakarta');
		$tgl = date('Y-m-d H:i:s');

		$data = [
			"id_pengguna" => $this->session->userdata("id_pengguna"),
			"tgl_transaksi" => $tgl
		];
		echo json_encode($this->db_model->insert_get("tbl_transaksi", $data));
	}
	public function jual_hutang()
	{
		$data = [
			"id_transaksi" => $this->input->post("id", TRUE),
			"tgl_jatuh_tempo" => $this->input->post("tgl", TRUE),
			"id_client" => $this->input->post("client", TRUE),
			"status_piutang" => 0
		];
		echo json_encode($this->db_model->insert('tbl_piutang', $data));
	}
	public function barang_insert()
	{
		$data = [
			"id_transaksi" => $this->input->post("id_transaksi", TRUE),
			"id_barang" => $this->input->post("id_barang", TRUE),
			"jumlah_penjualan" => $this->input->post("jumlah", TRUE),
			"harga_jual" => $this->input->post("harga", TRUE),
			"harga_kulak" => $this->input->post("harga_kulak", TRUE)
		];
		$this->db_model->insert('tbl_penjualan', $data);

		$stok = $this->db_model->get_where("tbl_barang", ["id_barang" => $this->input->post("id_barang", TRUE)])->row_array()["stok_barang"];

		$stokTerkini = $stok - (int)$this->input->post("jumlah", TRUE);
		$data = [
			"stok_barang" =>  $stokTerkini
		];

		$this->db_model->update('tbl_barang', $data, array('id_barang' => $this->input->post('id_barang', TRUE)));

		echo json_encode($stok . "-" . $this->input->post("jumlah", TRUE));
	}
	public function jasa_insert()
	{
		$data = [
			"id_transaksi" => $this->input->post("id_transaksi", TRUE),
			"id_jasa" => $this->input->post("id_jasa", TRUE),
		];
		echo json_encode($this->db_model->insert('tbl_penjualan_jasa', $data));
	}

	public function getTransaksiTerakhir()
	{
		$tanggalMulai = $this->input->post('tanggalMulai') . " 00:00:00";
		$tanggalSelesai = $this->input->post('tanggalSelesai') . " 23:59:59";
		$this->db->limit(5, 0);
		$this->db->order_by("tgl_transaksi", 'DESC');
		$barang = $this->db_model->get_where("vw_penjualan", ['tgl_transaksi >=' => $tanggalMulai, 'tgl_transaksi <=' => $tanggalSelesai])->result_array();

		$this->db->limit(5, 0);
		$this->db->order_by("tgl_transaksi", 'DESC');
		$jasa = $this->db_model->get_where("vw_penjualan_jasa", ['tgl_transaksi >=' => $tanggalMulai, 'tgl_transaksi <=' => $tanggalSelesai])->result_array();
		echo json_encode([$barang, $jasa]);
	}
}
