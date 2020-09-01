<?php
defined('BASEPATH') or exit('No direct script access allowed');

class barang_control extends CI_Controller
{


	public function index()
	{
		//echo  'hello panda';
		$this->template->load('template', 'barang');
	}

	public function tambah()
	{
		echo json_encode("sukses");
	}
}
