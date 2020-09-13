<?php
<<<<<<< HEAD
<<<<<<< HEAD:application/controllers/piutang.php
defined('BASEPATH') OR exit('No direct script access allowed');

class piutang extends CI_Controller {
=======
defined('BASEPATH') or exit('No direct script access allowed');
>>>>>>> origin/inas:application/controllers/barang_control.php

class barang_control extends CI_Controller
=======
defined('BASEPATH') or exit('No direct script access allowed');

class piutang extends CI_Controller
>>>>>>> fee71f209c3d554cb75a33c9e8d967b0fa0437ef
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('db_model');
	}

	public function index()
	{
<<<<<<< HEAD
<<<<<<< HEAD:application/controllers/piutang.php
        //echo  'hello panda';
        $this->template->load('template','piutang_view');
=======
		//echo  'hello panda';
		$this->template->load('template', 'barang');
=======
		if (!$this->session->userdata("id_pengguna")) {
			redirect("login");
		}
		$this->template->load('template', 'piutang_view');
>>>>>>> fee71f209c3d554cb75a33c9e8d967b0fa0437ef
	}
	public function tampil()
	{
		$query = "select * FROM view_penjualan INNER JOIN view_piutang on view_piutang.id_transaksi = view_penjualan.id_transaksi GROUP BY view_penjualan.id_transaksi";
		// echo json_encode($this->db_model->get_all('v_piutang')->result());
		echo json_encode($this->db_model->get_query($query)->result());
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
<<<<<<< HEAD

	public function hapus()
	{
		// echo json_encode("hapus");
		echo json_encode($this->db_model->delete("tbl_barang", ['id_barang' => $this->input->post('id', TRUE)]));
>>>>>>> origin/inas:application/controllers/barang_control.php
	}
=======
>>>>>>> fee71f209c3d554cb75a33c9e8d967b0fa0437ef
}
