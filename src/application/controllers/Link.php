<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once('base/BaseController.php');


class Link extends BaseController 
{
	public function index()
	{
		$this->set_view_data('title',   "当サイトへのリンク | ". $this->config->item('site_name'));
		$this->load_view('other/link');
	}
}
