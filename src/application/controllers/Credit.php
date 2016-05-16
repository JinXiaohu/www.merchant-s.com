<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once('base/BaseController.php');


class Credit extends BaseController 
{
	public function index()
	{
		$this->set_view_data('title',   "集客につながるクレジット | ". $this->config->item('site_name'));
		$this->load_view('other/credit');
	}
	
}
