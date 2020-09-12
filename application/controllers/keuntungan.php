<?php
defined('BASEPATH') or exit('No direct script access allowed');

class keuntungan extends CI_Controller
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
		$this->template->load('template', 'keuntungan_view');
	}

	public function getDataBarang()
	{
		$target = $this->input->post('target');
		$tanggalMulai = $this->input->post('tanggalMulai');
		$tanggalSelesai = $this->input->post('tanggalSelesai');
		$this->db->order_by("tgl_transaksi");
		$data = $this->db_model->get_where("vw_penjualan", ['tgl_transaksi >=' => $tanggalMulai, 'tgl_transaksi <=' => $tanggalSelesai])->result_array();
		echo json_encode($data);
	}

	public function getDataJasa()
	{
		$target = $this->input->post('target');
		$tanggalMulai = $this->input->post('tanggalMulai');
		$tanggalSelesai = $this->input->post('tanggalSelesai');
		$data = $this->db_model->get_where("vw_penjualan_jasa", ['tgl_transaksi >=' => $tanggalMulai, 'tgl_transaksi <=' => $tanggalSelesai])->result_array();
		echo json_encode($data);
	}

	function eksport()
	{
		$tanggalMulai = $this->input->get('tanggalMulai');
		$tanggalSelesai = $this->input->get('tanggalSelesai');
		$target = $this->input->get('target');

		$this->load->library("excel");
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
		$sampaiKolom = "K";
		if ($target == "vw_penjualan_jasa") {
			$teksTarget = "Jasa";
			$sampaiKolom = "E";
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
			$object->getActiveSheet()->setCellValueByColumnAndRow(10, 4, "KASIR");
		} else {
			$object->getActiveSheet()->setCellValueByColumnAndRow(0, 4, "NO");
			$object->getActiveSheet()->setCellValueByColumnAndRow(1, 4, "TANGGAL");
			$object->getActiveSheet()->setCellValueByColumnAndRow(2, 4, "NAMA JASA");
			$object->getActiveSheet()->setCellValueByColumnAndRow(3, 4, "HARGA JASA");
			$object->getActiveSheet()->setCellValueByColumnAndRow(4, 4, "KASIR");
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
				$object->getActiveSheet()->setCellValueByColumnAndRow(10, $excel_row, $data[$i]['nama']);
			} else {
				$object->getActiveSheet()->setCellValueByColumnAndRow(0, $excel_row, $i + 1);
				$object->getActiveSheet()->setCellValueByColumnAndRow(1, $excel_row, $data[$i]['tgl_transaksi']);
				$object->getActiveSheet()->setCellValueByColumnAndRow(2, $excel_row, $data[$i]['nama_jasa']);
				$object->getActiveSheet()->setCellValueByColumnAndRow(3, $excel_row, $data[$i]['harga_jasa']);
				$object->getActiveSheet()->setCellValueByColumnAndRow(4, $excel_row, $data[$i]['nama']);
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
			$dataKeuntungan = $this->db_model->get_where($target, ['tgl_transaksi' => $tanggalSeminggu[$i]])->result_array();
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
			$dataKeuntungan = $this->db_model->get_where($target, ['tgl_transaksi' => $tanggalSeminggu[$i]])->result_array();
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

	// public function getDataJasa()
	// {
	// 	$hasil = array();
	// 	//hasil[[tanggal,[[a,b,..],[a,b,..],...]],...]
	// 	$tanggalMulai = $this->input->post('tanggalMulai');
	// 	$tanggalSelesai = $this->input->post('tanggalSelesai');
	// 	$this->db->group_by("tgl_transaksi");
	// 	$tanggal = $this->db_model->get_where("vw_penjualan_jasa", ['tgl_transaksi >=' => $tanggalMulai, 'tgl_transaksi <=' => $tanggalSelesai])->result_array();
	// 	for ($i = 0; $i < count($tanggal); $i++) {
	// 		$tgl = $tanggal[$i]["tgl_transaksi"];
	// 		$jasa = $this->db_model->get_where("vw_penjualan_jasa", ['tgl_transaksi' => $tgl])->result_array();
	// 		array_push($hasil, array($tgl, $jasa));
	// 	}
	// 	echo json_encode($this->hitungJasa($hasil));
	// }

	// public function hitungJasa($data)
	// {
	// 	$penghitung = array();
	// 	$hasil = array();
	// 	//penghitung[[tanggal, [[nama jasa, jumlah],...]],....]
	// 	for ($i = 0; $i < count($data); $i++) {
	// 		array_push($penghitung, array($data[$i][0], array()));
	// 		for ($j = 0; $j < count($data[$i][1]); $j++) {
	// 			if (array_key_exists($data[$i][1][$j]["id_jasa"], $penghitung[$i][1])) {
	// 				$penghitung[$i][1][$data[$i][1][$j]["id_jasa"]][1] += 1;
	// 			} else {
	// 				$penghitung[$i][1][$data[$i][1][$j]["id_jasa"]] = array($data[$i][1][$j]["nama_jasa"], 1);
	// 			}
	// 		}
	// 	}

	// 	// //hasil[[tanggal,[[namajasa, jumlah], [namajasa, jumlah],....]], ....]
	// 	for ($i = 0; $i < count($penghitung); $i++) {
	// 		array_push($hasil, array($penghitung[$i][0], array()));
	// 		foreach ($penghitung[$i][1] as $data) {
	// 			array_push($hasil[$i][1], array($data[0], $data[1]));
	// 		}
	// 	}
	// 	return $hasil;
	// }
}
