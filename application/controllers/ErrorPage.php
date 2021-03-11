<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ErrorPage extends CI_Controller {

	public function index()
	{
		//$this->load->view('dashboard/v_header');
		$this->load->view('v_notfound');
	}
}
