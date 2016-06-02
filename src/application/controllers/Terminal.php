<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once('base/BaseController.php');


class Terminal extends BaseController 
{
	public function index()
	{
		$this->set_view_data('title',   "PAX Global社製端末 | ". $this->config->item('site_name'));
		$this->set_view_data('nav_id',  "nav-terminal");
		$this->load_view('terminal/index');
	}

	public function s80()
	{
		$this->set_view_data('title',   "決済端末種別 - PAX-S80 | ". $this->config->item('site_name'));
		$this->set_view_data('nav_id',  "nav-terminal");
		$this->load_view('terminal/s80');
	}

	public function s90()
	{
		$this->set_view_data('title',   "決済端末種別 - PAX-S90 | ". $this->config->item('site_name'));
		$this->set_view_data('nav_id',  "nav-terminal");
		$this->load_view('terminal/s90');
	}


	public function business_center()
	{
		$this->set_view_data('title',   "決済端末 - センター事業 | ". $this->config->item('site_name'));
		$this->set_view_data('nav_id',  "nav-terminal");
		$this->load_view('terminal/business_center');
	}

}
