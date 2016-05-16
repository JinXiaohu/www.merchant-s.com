<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once('base/BaseController.php');


class Service extends BaseController 
{

	protected function load_pc_template($view_name)
	{
		$this->load->view('common/head',   $this->view_data);
		$this->load->view('common/nav',    $this->view_data);
		$this->load->view('common/sidebar_start',    $this->view_data);
		$this->load->view($view_name,      $this->view_data);
		$this->load->view('common/sidebar_end',    $this->view_data);
		$this->load->view('common/footer', $this->view_data);
	}

	protected function load_mb_template($view_name)
	{
		$this->load->view('common/head.mb',	 $this->view_data);
		$this->load->view('common/nav.mb',    $this->view_data);
		$this->load->view('common/sidebar.mb', $this->view_data);
		$this->load->view($view_name. ".mb", $this->view_data);
		$this->load->view('common/sidebar_end.mb',    $this->view_data);
		$this->load->view('common/footer',   $this->view_data);
	}

	public function index()
	{
		$this->store();
	}

	public function store()
	{
		$this->set_view_data('title',   "クレジットカード決済（早期）＜店舗＞ | ". $this->config->item('site_name'));
		$this->load_view('service/store/index');
	}


	public function store_merit()
	{
		$this->set_view_data('title',   "特徴・メリット | ". $this->config->item('site_name'));
		$this->load_view('service/store/merit');
	}

	public function store_service()
	{
		$this->set_view_data('title',   "サービスの仕組み | ". $this->config->item('site_name'));
		$this->load_view('service/store/service');
	}

	public function store_flow()
	{
		$this->set_view_data('title',   "導入までの流れ | ". $this->config->item('site_name'));
		$this->load_view('service/store/flow');
	}

	public function store_faq()
	{
		$this->set_view_data('title',   "FAQ | ". $this->config->item('site_name'));
		$this->load_view('service/store/faq');
	}
	
	//////////////////////////////////////////////////////////////////////////

	public function web()
	{
		$this->set_view_data('title',   "Eコマース向け早期決済サービス | ". $this->config->item('site_name'));
		$this->load_view('service/web/index');
	}
	
	public function web_merit()
	{
		$this->set_view_data('title',   "特徴・メリット | ". $this->config->item('site_name'));
		$this->load_view('service/web/merit');
	}
	
	public function web_service()
	{
		$this->set_view_data('title',   "サービスの仕組み | ". $this->config->item('site_name'));
		$this->load_view('service/web/service');
	}
	
	public function web_flow()
	{
		$this->set_view_data('title',   "導入までの流れ | ". $this->config->item('site_name'));
		$this->load_view('service/web/flow');
	}
	
	public function web_price()
	{
		$this->set_view_data('title',   "料金表 | ". $this->config->item('site_name'));
		$this->load_view('service/web/price');
	}
	
	public function web_faq()
	{
		$this->set_view_data('title',   "FAQ | ". $this->config->item('site_name'));
		$this->load_view('service/web/faq');
	}

	//////////////////////////////////////////////////////////////////////////

	public function wechat()
	{
		$this->set_view_data('title',   "WeChat決済サービス | ". $this->config->item('site_name'));
		$this->load_view('service/wechat/index');
	}
	
	public function wechatad()
	{
		$this->set_view_data('title',   "WeChat決済サービス | ". $this->config->item('site_name'));
		$this->load_view('service/wechatad/index');
	}
	
	
}
