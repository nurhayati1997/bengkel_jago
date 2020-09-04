<?php
defined('BASEPATH') or exit('No direct script access allowed');

class dashboard_control extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('db_model');
		$this->load->library('form_validation');
	}

	public function index()
	{
		//jumlah jenis barang terjual ini
		$data['jumlahBarangTerjual'] = $this->db_model->getJumlahTerjual()->row_array()['SUM(jumlah_penjualan)'];
		//hutang orang
		$hutang = $this->db_model->get_where('tbl_penjualan', ['tgl_penjualan' => date("Y/m/d")])->result_array();
		$data['hutang'] = 0;
		for ($i = 0; $i < count($hutang); $i++) {
			//$data['keuntungan'] += ($keuntungan['jual'] - $keuntungan['kulak']) * $keuntungan['jumlah_penjualan'];
		}
		//keuntungan hari ini
		$keuntungan = $this->db_model->get_where('tbl_penjualan', ['tgl_penjualan' => date("Y/m/d")])->result_array();
		$data['keuntungan'] = 0;
		for ($i = 0; $i < count($keuntungan); $i++) {
			//$data['keuntungan'] += ($keuntungan['jual'] - $keuntungan['kulak']) * $keuntungan['jumlah_penjualan'];
		}
		//barang terbeli
		$data['jumlahJenisBarangTerbeli'] = $this->db_model->get_where('tbl_pembelian', ['tgl_pembelian' => date("Y/m/d")])->num_rows();

		//barang terlaris
		$data['terlaris'] = $this->db_model->getTerlaris()->result_array();
		//stok barang
		$data['stok'] = $this->db_model->getWarningStock('tbl_barang')->result_array();

		$this->template->load('template', 'dashboard', $data);
	}
}
