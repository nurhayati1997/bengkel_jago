<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login_control extends CI_Controller {


	public function index()
	{
        //echo  'hello panda';
        $this->load->view('login');
	}
}