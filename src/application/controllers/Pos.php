<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once('base/BaseController.php');


class Pos extends BaseController 
{
	public function index()
	{
		$this->set_view_data('title',   "決済端末 | ". $this->config->item('site_name'));
		$this->load_view('pos/index');
	}
}
