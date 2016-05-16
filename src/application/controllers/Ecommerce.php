<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once('base/BaseController.php');


class Ecommerce extends BaseController 
{
	public function index()
	{
		$this->set_view_data('title',   "Eコマース向け早期決済サービス | ". $this->config->item('site_name'));
		$this->load_view('ecommerce/index');
	}
	
	public function merit()
	{
		$this->set_view_data('title',   "特徴・メリット | ". $this->config->item('site_name'));
		$this->load_view('ecommerce/merit');
	}
	
	public function service()
	{
		$this->set_view_data('title',   "サービスの仕組み | ". $this->config->item('site_name'));
		$this->load_view('ecommerce/service');
	}
	
	public function flow()
	{
		$this->set_view_data('title',   "導入までの流れ | ". $this->config->item('site_name'));
		$this->load_view('ecommerce/flow');
	}
	
	public function price()
	{
		$this->set_view_data('title',   "料金表 | ". $this->config->item('site_name'));
		$this->load_view('ecommerce/price');
	}
	
	public function faq()
	{
		$this->set_view_data('title',   "FAQ | ". $this->config->item('site_name'));
		$this->load_view('ecommerce/faq');
	}
	
	
}
