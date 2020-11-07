<?php
defined('BASEPATH') or exit('No direct script access allowed');

class keuntungan extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		if (!$this->session->userdata("id_pengguna") or $this->session->userdata("rule") != 1) {
			redirect("login");
		}
		$this->load->model('db_model');
		$this->load->library('form_validation');

		date_default_timezone_set('Asia/Jakarta');
	}

	public function index()
	{
		$this->template->load('template', 'keuntungan_view');
	}

	public function getDataBarang()
	{
		$target = $this->input->post('target');
		$tanggalMulai = $this->input->post('tanggalMulai') . " 00:00:00";
		$tanggalSelesai = $this->input->post('tanggalSelesai') . " 23:59:59";
		$this->db->order_by("tgl_transaksi");
		$data = $this->db_model->get_where("vw_penjualan", ['tgl_transaksi >=' => $tanggalMulai, 'tgl_transaksi <=' => $tanggalSelesai])->result_array();
		echo json_encode($data);
	}

	public function getDataJasa()
	{
		$tanggalMulai = $this->input->post('tanggalMulai') . " 00:00:00";
		$tanggalSelesai = $this->input->post('tanggalSelesai') . " 23:59:59";
		$jasa = $this->db_model->get_all("tbl_jasa")->result_array();
		$hasil = array();
		for ($i = 0; $i < count($jasa); $i++) {
			$jumlahJasa = $this->db_model->get_where("vw_penjualan_jasa", ['tgl_transaksi >=' => $tanggalMulai, 'tgl_transaksi <=' => $tanggalSelesai, 'id_jasa' => $jasa[$i]["id_jasa"]])->num_rows();
			array_push($hasil, [$jasa[$i]["id_jasa"], $jasa[$i]["nama_jasa"], $jasa[$i]["harga_jasa"], $jumlahJasa, $jasa[$i]["harga_jasa"] * $jumlahJasa]);
		}
		echo json_encode($hasil);
	}

	public function get_dataByid()
	{
		$tabel = $this->input->post("target");
		$id = $this->input->post("id");
		$kondisi = $this->input->post("kondisi");
		$data = $this->db_model->get_where($tabel, [$kondisi => $id])->row_array();
		echo json_encode($data);
	}

	public function get_dataByidJasa()
	{
		$tabel = $this->input->post("target");
		$id = $this->input->post("id");
		$kondisi = $this->input->post("kondisi");
		$tanggalMulai = $this->input->post('tanggalMulai') . " 00:00:00";
		$tanggalSelesai = $this->input->post('tanggalSelesai') . " 23:59:59";
		$data = $this->db_model->get_where($tabel, [$kondisi => $id, 'tgl_transaksi >=' => $tanggalMulai, 'tgl_transaksi <=' => $tanggalSelesai])->result_array();
		echo json_encode($data);
	}

	public function hapus_data()
	{
		$idPenjualan = $this->input->post("id");
		$jenis =  $this->input->post("jenis");

		if ($jenis == "barang") {
			$idTransaksi = $this->db_model->get_where("vw_penjualan", ["id_penjualan" => $idPenjualan])->row_array()["id_transaksi"];
		} else {
			$idTransaksi = $this->db_model->get_where("vw_penjualan_jasa", ["id_penjualan_jasa" => $idPenjualan])->row_array()["id_transaksi"];
		}

		$dataPenjualan = $this->db_model->get_where("vw_penjualan", ["id_transaksi" => $idTransaksi])->result_array();
		$dataPenjualanJasa = $this->db_model->get_where("vw_penjualan_jasa", ["id_transaksi" => $idTransaksi])->result_array();

		$jmlTransaksi = count($dataPenjualan) + count($dataPenjualanJasa);

		if ($this->db_model->get_where("tbl_piutang", ["id_transaksi" => $idTransaksi])->row_array()) {
			if ($jmlTransaksi == 1) {
				$this->db_model->delete("tbl_piutang", ["id_transaksi" => $idTransaksi]);
			}
		}
		if ($jenis == "barang") {
			$penjualan = $this->db_model->get_where("tbl_penjualan", ["id_penjualan" => $idPenjualan])->row_array();
			if ($penjualan) {
				$jumlahPenjualan = $penjualan["jumlah_penjualan"];
				$idBarang = $penjualan["id_barang"];
				$barang = $this->db_model->get_where("tbl_barang", ["id_barang" => $idBarang])->row_array();
				$stokTerkini = $barang["stok_barang"];

				$this->db_model->update("tbl_barang", ["stok_barang" => $stokTerkini + $jumlahPenjualan], ["id_barang" => $idBarang]);
				$this->db_model->delete("tbl_penjualan", ["id_penjualan" => $idPenjualan]);
			}
		} else {
			$penjualan = $this->db_model->get_where("tbl_penjualan_jasa", ["id_penjualan_jasa" => $idPenjualan])->row_array();
			if ($penjualan) {
				$this->db_model->delete("tbl_penjualan_jasa", ["id_penjualan_jasa" => $idPenjualan]);
			}
		}

		if (($jmlTransaksi - 1) == 0) {
			$this->db_model->delete("tbl_transaksi", ["id_transaksi" => $idTransaksi]);
		}
		echo json_encode($idPenjualan . $jenis);
	}

	function eksport()
	{
		$tanggalMulai = $this->input->get('tanggalMulai') . " 00:00:00";
		$tanggalSelesai = $this->input->get('tanggalSelesai') . " 23:59:59";
		$target = $this->input->get('target');

		$this->load->library("Excel");
		$object = new PHPExcel();
		$object->getProperties()->setCreator('Find Tech')
			->setLastModifiedBy('Aplikasi Pergudangan Kharisma Motor')
			->setTitle('Laporan Keuangan')
			->setSubject('Office 2007 XLSX data')
			->setDescription('Laporan Keuntungan yang dihasilkan otomatis oleh Aplikasi Pergudangan Bengkel KHARISMA.')
			->setKeywords('office 2007 openxml php')
			->setCategory('Laporan');
		$object->setActiveSheetIndex(0);

		$style_mid = array(
			'alignment' => array(
				'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER, // Set text jadi ditengah secara horizontal (center)
				'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER // Set text jadi di tengah secara vertical (middle)
			)
		);

		$border_all = array(
			'borders' => array(
				'top' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border top dengan garis tipis
				'right' => array('style'  => PHPExcel_Style_Border::BORDER_THIN),  // Set border right dengan garis tipis
				'bottom' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border bottom dengan garis tipis
				'left' => array('style'  => PHPExcel_Style_Border::BORDER_THIN) // Set border left dengan garis tipis
			)
		);
		$color_grey = array(
			'fill' => array(
				'type' => PHPExcel_Style_Fill::FILL_SOLID,
				'color' => array('rgb' => '808080')
			)
		);

		$teksTarget = "Barang";
		$sampaiKolom = "L";
		if ($target == "vw_penjualan_jasa") {
			$teksTarget = "Jasa";
			$sampaiKolom = "F";
		}

		//style judul diatas
		$object->getActiveSheet()->mergeCells('A2:K2');
		$object->getActiveSheet()->setCellValueByColumnAndRow(0, 2, "LAPORAN PENJUALAN (KEUNTUNGAN) " . $teksTarget . " MULAI TANGGAL " . $tanggalMulai . " SAMPAI TANGGAL " . $tanggalSelesai);
		$object->getActiveSheet()->getStyle("A2:" . $sampaiKolom . "2")->getFont()->setBold(true);
		$object->getActiveSheet()->getStyle("A2:" . $sampaiKolom . "2")->getFont()->setSize(14);
		$object->getActiveSheet()->getStyle('A2:' . $sampaiKolom . '2')->applyFromArray($style_mid);

		//style header diatas
		$object->getActiveSheet()->getStyle("A4:" . $sampaiKolom . "4")->getFont()->setBold(true);
		foreach (range('A', $sampaiKolom) as $columnID) {
			$object->getActiveSheet()->getColumnDimension($columnID)
				->setAutoSize(true);
			$object->getActiveSheet()->getStyle($columnID . 4)->applyFromArray($border_all);
		}
		$object->getActiveSheet()->getStyle('A4:' . $sampaiKolom . '4')->applyFromArray($style_mid);
		$object->getActiveSheet()->getRowDimension('4')->setRowHeight(30);
		$object->getActiveSheet()->getStyle('A4:' . $sampaiKolom . '4')->applyFromArray($color_grey);

		// isian header diatas
		if ($target == "vw_penjualan") {
			$object->getActiveSheet()->setCellValueByColumnAndRow(0, 4, "NO");
			$object->getActiveSheet()->setCellValueByColumnAndRow(1, 4, "TANGGAL");
			$object->getActiveSheet()->setCellValueByColumnAndRow(2, 4, "KODE BARANG");
			$object->getActiveSheet()->setCellValueByColumnAndRow(3, 4, "NAMA BARANG");
			$object->getActiveSheet()->setCellValueByColumnAndRow(4, 4, "MERK BARANG");
			$object->getActiveSheet()->setCellValueByColumnAndRow(5, 4, "HARGA KULAK");
			$object->getActiveSheet()->setCellValueByColumnAndRow(6, 4, "HARGA JUAL");
			$object->getActiveSheet()->setCellValueByColumnAndRow(7, 4, "QUANTITY");
			$object->getActiveSheet()->setCellValueByColumnAndRow(8, 4, "TOTAL");
			$object->getActiveSheet()->setCellValueByColumnAndRow(9, 4, "UNTUNG");
			$object->getActiveSheet()->setCellValueByColumnAndRow(10, 4, "PIUTANG");
			$object->getActiveSheet()->setCellValueByColumnAndRow(11, 4, "KASIR");
		} else {
			$object->getActiveSheet()->setCellValueByColumnAndRow(0, 4, "NO");
			$object->getActiveSheet()->setCellValueByColumnAndRow(1, 4, "TANGGAL");
			$object->getActiveSheet()->setCellValueByColumnAndRow(2, 4, "NAMA JASA");
			$object->getActiveSheet()->setCellValueByColumnAndRow(3, 4, "HARGA JASA");
			$object->getActiveSheet()->setCellValueByColumnAndRow(4, 4, "PIUTANG");
			$object->getActiveSheet()->setCellValueByColumnAndRow(5, 4, "KASIR");
		}
		//import tabel
		$this->db->order_by("tgl_transaksi");
		$data = $this->db_model->get_where($target, ['tgl_transaksi >=' => $tanggalMulai, 'tgl_transaksi <=' => $tanggalSelesai])->result_array();
		$excel_row = 5;
		for ($i = 0; $i < count($data); $i++) {
			if ($target == "vw_penjualan") {
				$object->getActiveSheet()->setCellValueByColumnAndRow(0, $excel_row, $i + 1);
				$object->getActiveSheet()->setCellValueByColumnAndRow(1, $excel_row, $data[$i]['tgl_transaksi']);
				$object->getActiveSheet()->setCellValueByColumnAndRow(2, $excel_row, $data[$i]['kode_barang']);
				$object->getActiveSheet()->setCellValueByColumnAndRow(3, $excel_row, $data[$i]['nama_barang']);
				$object->getActiveSheet()->setCellValueByColumnAndRow(4, $excel_row, $data[$i]['merk_barang']);
				$object->getActiveSheet()->setCellValueByColumnAndRow(5, $excel_row, $data[$i]['harga_kulak']);
				$object->getActiveSheet()->setCellValueByColumnAndRow(6, $excel_row, $data[$i]['harga_jual']);
				$object->getActiveSheet()->setCellValueByColumnAndRow(7, $excel_row, $data[$i]['jumlah_penjualan']);
				$object->getActiveSheet()->setCellValueByColumnAndRow(8, $excel_row, $data[$i]['harga_jual'] * $data[$i]['jumlah_penjualan']);
				$object->getActiveSheet()->setCellValueByColumnAndRow(9, $excel_row, ($data[$i]['harga_jual'] - $data[$i]['harga_kulak']) * $data[$i]['jumlah_penjualan']);
				$statusPiutang = "";
				if ($data[$i]['status_piutang'] == NULL) {
					$statusPiutang = "Cash";
				} elseif ($data[$i]['status_piutang'] == 0) {
					$statusPiutang = "Hutang";
				} else {
					$statusPiutang = "Lunas";
				}
				$object->getActiveSheet()->setCellValueByColumnAndRow(10, $excel_row, $statusPiutang);
				$object->getActiveSheet()->setCellValueByColumnAndRow(11, $excel_row, $data[$i]['nama']);
			} else {
				$object->getActiveSheet()->setCellValueByColumnAndRow(0, $excel_row, $i + 1);
				$object->getActiveSheet()->setCellValueByColumnAndRow(1, $excel_row, $data[$i]['tgl_transaksi']);
				$object->getActiveSheet()->setCellValueByColumnAndRow(2, $excel_row, $data[$i]['nama_jasa']);
				$object->getActiveSheet()->setCellValueByColumnAndRow(3, $excel_row, $data[$i]['harga_jasa']);
				$object->getActiveSheet()->setCellValueByColumnAndRow(5, $excel_row, $data[$i]['nama']);
			}
			foreach (range('A', $sampaiKolom) as $columnID) {
				$object->getActiveSheet()->getStyle($columnID . $excel_row)->applyFromArray($border_all);
			}
			$excel_row++;
		}

		//style total dibawah
		foreach (range('A', $sampaiKolom) as $columnID) {
			$object->getActiveSheet()->getStyle($columnID . $excel_row)->applyFromArray($border_all);
		}
		$object->getActiveSheet()->getStyle('A' . $excel_row . ':' . $sampaiKolom . $excel_row)->getFont()->setBold(true);
		$object->getActiveSheet()->getStyle('A' . $excel_row . ':' . $sampaiKolom . $excel_row)->applyFromArray($style_mid);
		$object->getActiveSheet()->getRowDimension($excel_row)->setRowHeight(20);
		$object->getActiveSheet()->getStyle('A' . $excel_row . ':' . $sampaiKolom . $excel_row)->applyFromArray($color_grey);
		if ($target == "vw_penjualan") {
			$object->getActiveSheet()->mergeCells('A' . $excel_row . ':' . 'E' . $excel_row);
			$object->getActiveSheet()->setCellValueByColumnAndRow(0, $excel_row, "TOTAL");
			$object->getActiveSheet()->setCellValueByColumnAndRow(5, $excel_row, "=SUM(F5:F" . ($excel_row - 1) . ")");
			$object->getActiveSheet()->setCellValueByColumnAndRow(6, $excel_row, "=SUM(G5:G" . ($excel_row - 1) . ")");
			$object->getActiveSheet()->setCellValueByColumnAndRow(7, $excel_row, "=SUM(H5:H" . ($excel_row - 1) . ")");
			$object->getActiveSheet()->setCellValueByColumnAndRow(8, $excel_row, "=SUM(I5:I" . ($excel_row - 1) . ")");
			$object->getActiveSheet()->setCellValueByColumnAndRow(9, $excel_row, "=SUM(J5:J" . ($excel_row - 1) . ")");
			$object->getActiveSheet()->setCellValueByColumnAndRow(3, $excel_row, "=SUM(D5:D" . ($excel_row - 1) . ")");
		} else {
			$object->getActiveSheet()->mergeCells('A' . $excel_row . ':' . 'C' . $excel_row);
			$object->getActiveSheet()->setCellValueByColumnAndRow(0, $excel_row, "TOTAL");
			$object->getActiveSheet()->setCellValueByColumnAndRow(3, $excel_row, "=SUM(D5:D" . ($excel_row - 1) . ")");
		}

		//isian total dibawah


		$object_writer = PHPExcel_IOFactory::createWriter($object, 'Excel5');
		header('Content-Type: application/vnd.ms-excel');
		header('Content-Disposition: attachment;filename="Laporan Keuntungan' . $teksTarget . ' Tanggal ' . $tanggalMulai . ' Sampai Tanggal ' . $tanggalSelesai . '.xls"');

		$object_writer->save('php://output');
		$this->index();
	}

	public function keuntunganMingguan()
	{
		$target = $this->input->post("target");

		$hari = array('Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun');
		$hariIndo = array("Sen", "Sel", "Rab", "Kam", "Jum", "Sab", "Ming");
		$hariIni = array_search(date('D', strtotime('today')), $hari);

		$tanggalSeminggu = array(date('Y-m-d', strtotime('last monday')), date('Y-m-d', strtotime('last tuesday')), date('Y-m-d', strtotime('last wednesday')), date('Y-m-d', strtotime('last thursday')), date('Y-m-d', strtotime('last friday')), date('Y-m-d', strtotime('last saturday')), date('Y-m-d', strtotime('last sunday')));

		$hasil = array();

		for ($i = $hariIni; $i < count($hari); $i++) {
			$dataKeuntungan = $this->db_model->get_where($target, ['tgl_transaksi >=' => $tanggalSeminggu[$i] . " 00:00:00", 'tgl_transaksi <=' => $tanggalSeminggu[$i] . " 23:59:59"])->result_array();
			$untungPerHari = 0;
			for ($j = 0; $j < count($dataKeuntungan); $j++) {
				if ($target == "vw_penjualan") {
					$untungPerHari += ($dataKeuntungan[$j]['harga_jual'] - $dataKeuntungan[$j]['harga_kulak']) * $dataKeuntungan[$j]['jumlah_penjualan'];
				} else {
					$untungPerHari += $dataKeuntungan[$j]["harga_jasa"];
				}
			}
			array_push($hasil, array($hariIndo[$i], $untungPerHari));
		}
		for ($i = 0; $i < $hariIni; $i++) {
			$dataKeuntungan = $this->db_model->get_where($target, ['tgl_transaksi >=' => $tanggalSeminggu[$i] . " 00:00:00", 'tgl_transaksi <=' => $tanggalSeminggu[$i] . " 23:59:59"])->result_array();
			$untungPerHari = 0;
			for ($j = 0; $j < count($dataKeuntungan); $j++) {
				if ($target == "vw_penjualan") {
					$untungPerHari += ($dataKeuntungan[$j]['harga_jual'] - $dataKeuntungan[$j]['harga_kulak']) * $dataKeuntungan[$j]['jumlah_penjualan'];
				} else {
					$untungPerHari += $dataKeuntungan[$j]["harga_jasa"];
				}
			}
			array_push($hasil, array($hariIndo[$i], $untungPerHari));
		}
		echo json_encode($hasil);
	}

	public function eksportDb()
	{
		$file = "backupDB(" . date("Y-m-d") . ").txt";
		$txt = "";

		$tabels = ["tbl_barang", "tbl_client", "tbl_jasa", "tbl_pembelian", "tbl_pengguna", "tbl_penjualan", "tbl_penjualan_jasa", "tbl_piutang", "tbl_transaksi"];

		foreach ($tabels as $tb) {
			$txt .= "|-" . $tb . "-|";
			$datas = $this->db_model->get_all($tb)->result_array();
			foreach ($datas as $baris) {
				foreach ($baris as $key => $data) {
					$txt .= $key . "->" . $data . "|k|";
				}
				$txt .= "-b-";
			}
			$txt .= "|-" . $tb . "-|";
		}

		header('Content-Description: File Transfer');
		header('Content-Type: application/octet-stream');
		header('Content-disposition: attachment; filename=' . $file);
		header('Content-Length: ' . strlen($txt));
		header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
		header('Expires: 0');
		header('Pragma: public');
		echo $txt;
		exit;
	}
}
