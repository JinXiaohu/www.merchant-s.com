<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once('base/BaseController.php');


class Cases extends BaseController 
{	
	function __construct()
	{
		parent::__construct();
		$this->set_view_data('title',   "導入事例 | ". $this->config->item('site_name'));
	}
	

	//零售业
	public function retail()
	{
		$this->load_view('case/retail');
	}

	//餐饮业
	public function catering()
	{
		$this->load_view('case/catering');
	}

	//美容
	public function beauty()
	{
		$this->load_view('case/beauty');
	}

	//汽车相关
	public function automobile()
	{
		$this->load_view('case/automobile');
	}
	public function wechatpay()
	{
		$this->load_view('case/wechatpay');
	}

}
