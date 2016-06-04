<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once('base/BaseController.php');


class Contact extends BaseController 
{
	function __construct()
	{
		parent::__construct();
		$this->set_view_data('nav_id',  "nav-contact");
		$this->set_view_data('title',   "お問い合わせ | ". $this->config->item('site_name'));
	}
	

	public function index()
	{
		$this->load_view('contact/index');
	}


	public function order_thanks()
	{
		$this->load_view('contact/order_thanks');
	}

	public function join_thanks()
	{
		$this->load_view('contact/join_thanks');
	}

	public function query_thanks()
	{
		$this->load_view('contact/query_thanks');
	}

	public function info_changing_thanks()
	{
		$this->load_view('contact/info_changing_thanks');
	}


	//申请加盟
	public function join()
	{
		$this->set_view_data("h1", "新規加盟をご検討のお客様");
		$this->set_view_data("active", "join");
		if($this->is_post_method())
		{
			$this->POST("JoinHandler", "contact/thanks", "contact/join");
		}
		else
		{
		  $this->load_view('contact/join');
		}
	}


  //申请变更信息
  public function info_changing()
  {
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
		$this->set_view_data("h1", "ロール紙発注フォーム");
		$this->set_view_data("active", "order");
		if($this->is_post_method())
		{
			$this->POST("OrderHandler", "contact/thanks", "contact/order");
		}
		else
		{
		  $this->load_view('contact/order');
		}
	}

  //其他查询
	public function query()
	{
		$this->set_view_data("h1", "お問い合わせフォーム");
		$this->set_view_data("active", "query");
		if($this->is_post_method())
		{
			$this->POST("QueryHandler", "contact/thanks", "contact/query");
		}
		else
		{
		  $this->load_view('contact/query');
		}
	}


	private function POST($class_handler, $thanks_page, $fail_page)
	{
    $handler = $this->create_mail_sender($class_handler);

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


	private function create_mail_sender($class_handler)
	{
		require_once("Contact/$class_handler.php");
		$handler = new $class_handler();
		$handler->input = $this->input;
		return $handler;
	}


}

?>