<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class client_control extends CI_Controller {


	public function index()
	{
        //echo  'hello panda';
        $this->template->load('template','client');
	}
}