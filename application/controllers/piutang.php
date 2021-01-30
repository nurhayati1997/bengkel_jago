<?php
defined('BASEPATH') or exit('No direct script access allowed');

class piutang extends CI_Controller
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
		$this->template->load('template', 'piutang_view');
	}
	public function tampil()
	{
		$bulan = $this->input->post("bulan");
		$tahun = $this->input->post("tahun");
		$status = $this->input->post("status");

		// $bulan = "10";
		// $tahun = "2020";
		$mulai = strtotime($tahun . "/" . $bulan . "/" . "1 00:00:00");
		$sampai = strtotime($tahun . "/" . $bulan . "/" . "31 23:59:59");

		$kondisi = ['tgl_transaksi >=' => date("Y/m/d  H:i:s", $mulai), 'tgl_transaksi <=' => date("Y/m/d  H:i:s", $sampai)];
		if ($status != 2) {
			$kondisi["status_piutang"] = $status;
		}

		$this->db->order_by('tgl_transaksi DESC');
		echo json_encode($this->db_model->get_where("view_piutang", $kondisi)->result());

		// $query = "select * FROM view_penjualan INNER JOIN view_piutang on view_piutang.id_transaksi = view_penjualan.id_transaksi GROUP BY view_penjualan.id_transaksi";
		// $query = "select * FROM view_piutang";
		// // echo json_encode($this->db_model->get_all('v_piutang')->result());
		// echo json_encode($this->db_model->get_query($query)->result());
	}
	function ubah_list()
	{
		// echo json_encode('');
		echo json_encode($this->db_model->get_where('view_penjualan', ["id_transaksi" => $this->input->post('id', TRUE)])->result());
	}
	function ubah_list_jasa()
	{
		// echo json_encode('');
		echo json_encode($this->db_model->get_where('view_penjualan_jasa', ["id_transaksi" => $this->input->post('id', TRUE)])->result());
	}
	public function ubah()
	{
		$data = [
			"status_piutang" => $this->input->post("status", TRUE)
		];
		$this->db_model->update('tbl_piutang', $data, array('id_transaksi' => $this->input->post('id', TRUE)));
		echo json_encode($data);
	}

	public function hapus()
	{
		// echo json_encode("hapus");
		echo json_encode($this->db_model->delete("tbl_barang", ['id_barang' => $this->input->post('id', TRUE)]));
	}
}
