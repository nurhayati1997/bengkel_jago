<?php
defined('BASEPATH') or exit('No direct script access allowed');

class keuntungan_control extends CI_Controller
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
		$this->template->load('template', 'keuntungan');
	}

	public function get_data()
	{
		$target = $this->input->post('target');
		$tanggalMulai = $this->input->post('tanggalMulai');
		$tanggalSelesai = $this->input->post('tanggalSelesai');
		$data = $this->db_model->get_where("tbl_penjualan", ['tgl_penjualan >=' => $tanggalMulai, 'tgl_penjualan <=' => $tanggalSelesai])->result_array();
		echo json_encode($data);
	}
}
