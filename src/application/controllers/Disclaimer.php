<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once('base/BaseController.php');


class Disclaimer extends BaseController 
{
	public function index()
	{
		$this->set_view_data('title',   "免責事項 | ". $this->config->item('site_name'));
		$this->load_view('other/disclaimer');
	}
	
}
