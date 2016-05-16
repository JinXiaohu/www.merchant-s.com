<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once('base/BaseController.php');


class Aboutus extends BaseController 
{
	public function index()
	{
		$this->set_view_data('title',   "会社概要 | ". $this->config->item('site_name'));
		$this->set_view_data('nav_id',  "aboutus");
		$this->load_view('other/aboutus');
	}
}
