<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once('base/BaseController.php');


class Ad extends BaseController 
{
	public function index()
	{		
		$this->load->view('other/advertisement',   $this->view_data);
		$this->load->view('common/footer', $this->view_data);
	}
	
}
