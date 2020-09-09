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

	public function get_data()
	{
		$target = $this->input->post('target');
		$tanggalMulai = $this->input->post('tanggalMulai');
		$tanggalSelesai = $this->input->post('tanggalSelesai');
		$data = $this->db_model->get_where("vw_penjualan", ['tgl_transaksi >=' => $tanggalMulai, 'tgl_transaksi <=' => $tanggalSelesai])->result_array();
		echo json_encode($data);
	}

	function eksport()
	{
		$tanggalMulai = $this->input->get('tanggalMulai');
		$tanggalSelesai = $this->input->get('tanggalSelesai');

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

		//style judul diatas
		$object->getActiveSheet()->mergeCells('A2:K2');
		$object->getActiveSheet()->setCellValueByColumnAndRow(0, 2, "LAPORAN PENJUALAN (KEUNTUNGAN) MULAI TANGGAL " . $tanggalMulai . " SAMPAI TANGGAL " . $tanggalSelesai);
		$object->getActiveSheet()->getStyle("A2:K2")->getFont()->setBold(true);
		$object->getActiveSheet()->getStyle("A2:K2")->getFont()->setSize(14);
		$object->getActiveSheet()->getStyle('A2:K2')->applyFromArray($style_mid);

		//style header diatas
		$object->getActiveSheet()->getStyle("A4:K4")->getFont()->setBold(true);
		foreach (range('A', 'K') as $columnID) {
			$object->getActiveSheet()->getColumnDimension($columnID)
				->setAutoSize(true);
			$object->getActiveSheet()->getStyle($columnID . 4)->applyFromArray($border_all);
		}
		$object->getActiveSheet()->getStyle('A4:K4')->applyFromArray($style_mid);
		$object->getActiveSheet()->getRowDimension('4')->setRowHeight(30);
		$object->getActiveSheet()->getStyle('A4:K4')->applyFromArray($color_grey);

		// isian header diatas
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

		//import tabel
		$data = $this->db_model->get_where("vw_penjualan", ['tgl_transaksi >=' => $tanggalMulai, 'tgl_transaksi <=' => $tanggalSelesai])->result_array();
		$excel_row = 5;
		for ($i = 0; $i < count($data); $i++) {
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
			foreach (range('A', 'K') as $columnID) {
				$object->getActiveSheet()->getStyle($columnID . $excel_row)->applyFromArray($border_all);
			}
			$excel_row++;
		}

		//style total dibawah
		foreach (range('A', 'K') as $columnID) {
			$object->getActiveSheet()->getStyle($columnID . $excel_row)->applyFromArray($border_all);
		}
		$object->getActiveSheet()->getStyle('A' . $excel_row . ':' . 'K' . $excel_row)->getFont()->setBold(true);
		$object->getActiveSheet()->getStyle('A' . $excel_row . ':' . 'K' . $excel_row)->applyFromArray($style_mid);
		$object->getActiveSheet()->getRowDimension($excel_row)->setRowHeight(20);
		$object->getActiveSheet()->getStyle('A' . $excel_row . ':' . 'K' . $excel_row)->applyFromArray($color_grey);
		$object->getActiveSheet()->mergeCells('A' . $excel_row . ':' . 'E' . $excel_row);

		//isian total dibawah
		$object->getActiveSheet()->setCellValueByColumnAndRow(0, $excel_row, "TOTAL");
		$object->getActiveSheet()->setCellValueByColumnAndRow(5, $excel_row, "=SUM(F5:F" . ($excel_row - 1) . ")");
		$object->getActiveSheet()->setCellValueByColumnAndRow(6, $excel_row, "=SUM(G5:G" . ($excel_row - 1) . ")");
		$object->getActiveSheet()->setCellValueByColumnAndRow(7, $excel_row, "=SUM(H5:H" . ($excel_row - 1) . ")");
		$object->getActiveSheet()->setCellValueByColumnAndRow(8, $excel_row, "=SUM(I5:I" . ($excel_row - 1) . ")");
		$object->getActiveSheet()->setCellValueByColumnAndRow(9, $excel_row, "=SUM(J5:J" . ($excel_row - 1) . ")");

		$object_writer = PHPExcel_IOFactory::createWriter($object, 'Excel5');
		header('Content-Type: application/vnd.ms-excel');
		header('Content-Disposition: attachment;filename="Laporan Keuntungan Tanggal ' . $tanggalMulai . ' Sampai Tanggal ' . $tanggalSelesai . '.xls"');

		$object_writer->save('php://output');
		$this->index();
	}

	public function keuntunganMingguan()
	{
		$hari = array('Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun');
		$hariIndo = array("Sen", "Sel", "Rab", "Kam", "Jum", "Sab", "Ming");

		$hariIni = array_search(date('D', strtotime('today')), $hari);

		$tanggalSeminggu = array(date('Y-m-d', strtotime('last monday')), date('Y-m-d', strtotime('last tuesday')), date('Y-m-d', strtotime('last wednesday')), date('Y-m-d', strtotime('last thursday')), date('Y-m-d', strtotime('last friday')), date('Y-m-d', strtotime('last saturday')), date('Y-m-d', strtotime('last sunday')));

		$hasil = array();

		for ($i = $hariIni; $i < count($hari); $i++) {
			$dataKeuntungan = $this->db_model->get_where('vw_penjualan', ['tgl_transaksi' => $tanggalSeminggu[$i]])->result_array();
			$untungPerHari = 0;
			for ($j = 0; $j < count($dataKeuntungan); $j++) {
				$untungPerHari += ($dataKeuntungan[$j]['harga_jual'] - $dataKeuntungan[$j]['harga_kulak']) * $dataKeuntungan[$j]['jumlah_penjualan'];
			}
			array_push($hasil, array($hariIndo[$i], $untungPerHari));
		}
		for ($i = 0; $i < $hariIni; $i++) {
			$dataKeuntungan = $this->db_model->get_where('vw_penjualan', ['tgl_transaksi' => $tanggalSeminggu[$i]])->result_array();
			$untungPerHari = 0;
			for ($j = 0; $j < count($dataKeuntungan); $j++) {
				$untungPerHari += ($dataKeuntungan[$j]['harga_jual'] - $dataKeuntungan[$j]['harga_kulak']) * $dataKeuntungan[$j]['jumlah_penjualan'];
			}
			array_push($hasil, array($hariIndo[$i], $untungPerHari));
		}
		echo json_encode($hasil);
	}
}
