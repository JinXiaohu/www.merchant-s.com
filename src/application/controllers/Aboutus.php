<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once('base/BaseController.php');


class Aboutus extends BaseController 
{	
	function __construct()
	{
		parent::__construct();
		$this->set_view_data('nav_id',  "nav-aboutus");
	}

	public function index()
	{
		$this->set_view_data('title',   "会社概要 | ". $this->config->item('site_name'));
		$this->load_view('aboutus/index');
	}

	public function introduction()
	{
		$this->set_view_data('title',   "会社概要 | ". $this->config->item('site_name'));
		$this->load_view('aboutus/introduction');

	}

	public function history()
	{
		$this->set_view_data('title',   "沿革 | ". $this->config->item('site_name'));
		$this->load_view('aboutus/history');
	}

	public function hisun()
	{
		$this->set_view_data('title',   "会社概要 | ". $this->config->item('site_name'));
		$this->load_view('aboutus/hisun');
	}

	public function recruit()
	{
		$this->set_view_data('title',   "採用情報 | ". $this->config->item('site_name'));
		$this->load_view('aboutus/recruit');
	}

}
