<?php
defined('BASEPATH') or exit('No direct script access allowed');

class dashboard extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		if (!$this->session->userdata("id_pengguna")) {
			redirect("login");
		}
		$this->load->model('db_model');
		$this->load->library('form_validation');

		date_default_timezone_set('Asia/Jakarta');
	}

	public function index()
	{
		//jumlah jenis barang terjual ini
		$data['jumlahBarangTerjual'] = $this->db_model->getJumlahTerjual()->row_array();
		if (!$data['jumlahBarangTerjual']) {
			$data['jumlahBarangTerjual'] = 0;
		} else {
			$data['jumlahBarangTerjual'] = $data['jumlahBarangTerjual']['SUM(jumlah_penjualan)'];
		}
		//hutang orang
		$hutang = $this->db_model->get_where('vw_piutang', ['status_piutang' => 0])->result_array();
		$hutangJasa = $this->db_model->get_where('vw_piutang_jasa', ['status_piutang' => 0])->result_array();
		$data['hutang'] = 0;
		for ($i = 0; $i < count($hutang); $i++) {
			$data['hutang'] += $hutang[$i]['harga_jual'] * $hutang[$i]['jumlah_penjualan'];
		}
		for ($i = 0; $i < count($hutangJasa); $i++) {
			$data['hutang'] += $hutangJasa[$i]['harga_jasa'];
		}
		$data['hutang'] = number_format($data["hutang"], 0, '', '.');
		//keuntungan hari ini
		$keuntungan = $this->db_model->get_where('vw_penjualan', ['tgl_transaksi >=' => date("Y/m/d") . " 00:00:00", 'tgl_transaksi <=' => date("Y/m/d") . " 23:59:59"])->result_array();
		$keuntunganJasa = $this->db_model->get_where('vw_penjualan_jasa', ['tgl_transaksi >=' => date("Y/m/d") . " 00:00:00", 'tgl_transaksi <=' => date("Y/m/d") . " 23:59:59"])->result_array();

		$data['keuntungan'] = 0;
		for ($i = 0; $i < count($keuntungan); $i++) {
			$data['keuntungan'] += ($keuntungan[$i]['harga_jual'] - $keuntungan[$i]['harga_kulak']) * $keuntungan[$i]['jumlah_penjualan'];
		}
		for ($i = 0; $i < count($keuntunganJasa); $i++) {
			$data['keuntungan'] += $keuntunganJasa[$i]['harga_jasa'];
		}
		$data['keuntungan'] = number_format($data["keuntungan"], 0, '', '.');
		//barang terbeli
		$data['jumlahJenisBarangTerbeli'] = $this->db_model->getJumlahTerbeli()->row_array();
		if (!$data['jumlahJenisBarangTerbeli']) {
			$data['jumlahJenisBarangTerbeli'] = 0;
		} else {
			$data['jumlahJenisBarangTerbeli'] = $data['jumlahJenisBarangTerbeli']['SUM(jumlah_pembelian)'];
		}

		//barang terlaris
		$data['terlaris'] = $this->db_model->getTerlaris()->result_array();
		//stok barang
		$data['stok'] = $this->db_model->getWarningStock('tbl_barang')->result_array();

		$this->template->load('template', 'dashboard_view', $data);
	}

	public function keuntunganMingguan()
	{
		$hari = array('Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun');
		$hariIndo = array("Senin", "Selasa", "Rabu", "Kamis", "Juma'at", "Sabtu", "Minggu");

		$hariIni = array_search(date('D', strtotime('today')), $hari);

		$tanggalSeminggu = array(date('Y-m-d', strtotime('last monday')), date('Y-m-d', strtotime('last tuesday')), date('Y-m-d', strtotime('last wednesday')), date('Y-m-d', strtotime('last thursday')), date('Y-m-d', strtotime('last friday')), date('Y-m-d', strtotime('last saturday')), date('Y-m-d', strtotime('last sunday')));

		$hasil = array();

		for ($i = $hariIni; $i < count($hari); $i++) {
			$dataKeuntungan = $this->db_model->get_where('vw_penjualan', ['tgl_transaksi >=' => $tanggalSeminggu[$i] . " 00:00:00", 'tgl_transaksi <=' => $tanggalSeminggu[$i] . " 23:59:59"])->result_array();
			$untungPerHari = 0;
			for ($j = 0; $j < count($dataKeuntungan); $j++) {
				$untungPerHari += ($dataKeuntungan[$j]['harga_jual'] - $dataKeuntungan[$j]['harga_kulak']) * $dataKeuntungan[$j]['jumlah_penjualan'];
			}
			array_push($hasil, array($hariIndo[$i], $untungPerHari));
		}
		for ($i = 0; $i < $hariIni; $i++) {
			$dataKeuntungan = $this->db_model->get_where('vw_penjualan', ['tgl_transaksi >=' => $tanggalSeminggu[$i] . " 00:00:00", 'tgl_transaksi <=' => $tanggalSeminggu[$i] . " 23:59:59"])->result_array();
			$untungPerHari = 0;
			for ($j = 0; $j < count($dataKeuntungan); $j++) {
				$untungPerHari += ($dataKeuntungan[$j]['harga_jual'] - $dataKeuntungan[$j]['harga_kulak']) * $dataKeuntungan[$j]['jumlah_penjualan'];
			}
			array_push($hasil, array($hariIndo[$i], $untungPerHari));
		}
		echo json_encode($hasil);
	}
}
