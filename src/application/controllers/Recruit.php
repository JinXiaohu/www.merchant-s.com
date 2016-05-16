<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once('base/BaseController.php');


class Recruit extends BaseController 
{
	public function index()
	{
		$this->set_view_data('title',   "採用情報 | ". $this->config->item('site_name'));
		$this->set_view_data('nav_id',  "recruit");
		$this->load_view('other/recruit');
	}
}
