<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once('base/BaseController.php');


class Contact extends BaseController 
{
	function __construct()
	{
		parent::__construct();		
		$this->set_view_data('nav_id',  "nav-contact");
	}
	
	public function index()
	{
		$this->set_view_data('title',   "お問い合わせ | ". $this->config->item('site_name'));
		$this->load_view('contact/index');
	}


	//申请加盟
	public function join()
	{
		$this->set_view_data('title',   "新規加盟をご検討のお客様 | ". $this->config->item('site_name'));
		if($this->is_post_method())
		{
			$this->POST("JoinHandler", "contact/join_thanks", "contact/join");
		}
		else
		{
		  $this->load_view('contact/join');
		}
	}


  //申请变更信息
  public function info_changing()
  {
		$this->set_view_data('title',   "各種変更・解約手続き依頼フォーム | ". $this->config->item('site_name'));
		if($this->is_post_method())
		{
			$this->POST("InfoChangingHandler", "contact/info_changing_thanks", "contact/info_changing");
		}
		else
		{
		  $this->load_view('contact/info_changing');
		}
  }

  //卷纸订单
	public function order()
	{
		$this->set_view_data('title',   "ロール紙発注フォーム | ". $this->config->item('site_name'));
		if($this->is_post_method())
		{
			$this->POST("OrderHandler", "contact/order_thanks", "contact/order");
		}
		else
		{
		  $this->load_view('contact/order');
		}
	}

  //其他查询
	public function query()
	{
		$this->set_view_data('title',   "お問い合わせフォーム | ". $this->config->item('site_name'));
		if($this->is_post_method())
		{
			$this->POST("QueryHandler", "contact/query_thanks", "contact/query");
		}
		else
		{
		  $this->load_view('contact/query');
		}
	}


	private function POST($class_handler, $thanks_page, $fail_page)
	{
    $handler = $this->create_handler($class_handler);

    //如果验证输入不合格
    $msg = $handler->validate();
    if($msg != true)
    {
			$this->set_view_data("error", $msg);
			$this->load_view($fail_page);
			exit;
    }

    //发信成功，显示thanks页面
   	if($handler->send_using_jphpmailer())
		{
		  $this->load_view($thanks_page);
		}
		//发信失败，显示原来的表单页面
		else
		{
			$this->set_view_data("error", "oops, send mail failed.");
			$this->load_view($fail_page);
		}
	}


	private function create_handler($class_handler)
	{
		require_once("Contact/$class_handler.php");
		$handler = new $class_handler();
		$handler->input = $this->input;
		return $handler;
	}


}

?>