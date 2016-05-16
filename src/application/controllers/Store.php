<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once('base/BaseController.php');


class Store extends BaseController 
{
	public function index()
	{
		$this->set_view_data('title',   "店舗向け早期決済サービス | ". $this->config->item('site_name'));
		$this->load_view('store/index');
	}

	public function merit()
	{
		$this->set_view_data('title',   "特徴・メリット | ". $this->config->item('site_name'));
		$this->load_view('store/merit');
	}

	public function service()
	{
		$this->set_view_data('title',   "サービスの仕組み | ". $this->config->item('site_name'));
		$this->load_view('store/service');
	}

	public function flow()
	{
		$this->set_view_data('title',   "導入までの流れ | ". $this->config->item('site_name'));
		$this->load_view('store/flow');
	}

	public function guidance()
	{
		$this->set_view_data('title',   "取扱端末のご紹介 | ". $this->config->item('site_name'));
		$this->load_view('store/guidance');
	}

	public function voice()
	{
		$this->set_view_data('title',   "お客様の声（導入事例） | ". $this->config->item('site_name'));
		$this->load_view('store/voice');
	}

	public function faq()
	{
		$this->set_view_data('title',   "FAQ | ". $this->config->item('site_name'));
		$this->load_view('store/faq');
	}
	
}
