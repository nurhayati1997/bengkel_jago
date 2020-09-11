<?php
defined('BASEPATH') or exit('No direct script access allowed');

<<<<<<< HEAD:application/controllers/penjualan.php
class penjualan extends CI_Controller {
=======
class piutang_control extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('db_model');
	}
>>>>>>> inas:application/controllers/piutang_control.php


	public function index()
	{
<<<<<<< HEAD:application/controllers/penjualan.php
        //echo  'hello panda';
        $this->template->load('template','penjualan_view');
=======
		//echo  'hello panda';
		$this->template->load('template', 'piutang');
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
>>>>>>> inas:application/controllers/piutang_control.php
	}
}
