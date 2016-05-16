<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once('base/BaseController.php');


class Policy extends BaseController 
{
	public function index()
	{
		$this->set_view_data('title',   "個人情報保護方針 | ". $this->config->item('site_name'));
		$this->load_view('other/policy');
	}
}
