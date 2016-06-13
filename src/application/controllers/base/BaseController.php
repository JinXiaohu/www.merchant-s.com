<?php

class BaseController extends CI_Controller 
{
	function __construct()
	{
		parent::__construct();

		$this->base_path = $this->get_base_path();
		
		$this->set_view_data('base_path', $this->base_path);
		$this->set_view_data('cdn_path',  $this->config->item('cdn_path'));
	}

	//存放信息，给提供页面参数
	protected $view_data = array();

	protected $base_path;

	private function get_base_path()
	{
		$protocol = $this->config->item('protocol');
		$host = $_SERVER["HTTP_HOST"];
		$base_dir = $this->config->item('base_dir');
		return "$protocol://$host/$base_dir";
	}


	protected function set_view_data($name, $value)
	{
		$this->view_data[$name] = $value;
	}


	protected function is_post_method()
	{
		$method = strtolower($_SERVER['REQUEST_METHOD']);
		return ($method == "post") ? true : false;
	}


	public function load_view($view_name)
	{
		if($_SERVER['HTTP_HOST'] == $this->config->item('mb_host') && !$this->config->item('enable_reponsive_design'))
		{
			$this->load_mb_template($view_name);
		}
		else
		{
			$this->load_pc_template($view_name);
		}
	}

	protected function load_pc_template($view_name)
	{
		$this->load->view('common/head',   $this->view_data);
		$this->load->view($view_name,      $this->view_data);
		$this->load->view('common/footer', $this->view_data);
	}

	protected function load_mb_template($view_name)
	{
		$this->load->view('common/head.mb',	 $this->view_data);
		$this->load->view($view_name. ".mb", $this->view_data);
		$this->load->view('common/footer',   $this->view_data);
	}


	protected function logined_check()
	{	
		if (!$this->get_session_item('username'))
		{
			return false;
		}
		else
		{
			return true;
		}
	}
	
	protected function logined_first()
	{
		if (!$this->get_session_item('username'))
		{
			$this->load->helper('url');
			redirect($this->base_path. "user/login");
		}		
	}
		
	//获取session中的一项
	protected function get_session_item($name)
	{
		$this->load->library("session");
		if(isset($this->$name))
		{
			return $this->$name;
		}
		$value = $this->session->userdata($name);
		if($value !== false)
		{
			$this->$name = $value;
			$this->set_view_data($name,	$value);
			return $this->$name;
		}
		return false;
	}

}
