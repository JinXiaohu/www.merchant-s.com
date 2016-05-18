<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once('base/BaseController.php');


class Sitemap extends BaseController 
{	

	public function index()
	{
		$this->set_view_data('title',   "サイトマップ | ". $this->config->item('site_name'));
		$this->load_view('other/sitemap');
	}
}
