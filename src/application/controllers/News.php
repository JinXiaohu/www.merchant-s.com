<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once('base/BaseController.php');


class News extends BaseController 
{
	public function __construct()
	{
		parent::__construct();

		$this->set_view_data('title',	 "News | ". $this->config->item('site_name'));
		$this->load->helper('url');
		require_once(APPPATH. "libraries/NewsManager.class.php");
	}
	
	private $error;


	//news的列表页显示
	public function index()
	{
		
		$news = new NewsManager();
		$full_list = $news->get_full_list();
		$this->set_view_data("full_news", $full_list);
		
		if($this->logined_check())
		{
			//管理员版的新闻列表页。提供了增删改查的功能
			$this->load_view('news/admin');
		}
		else
		{
			//普通游客看到的是不带增删改查功能的列表页
			$this->load_view('news/index');
		}
	}



	//打开一个news。要求url中带有一个参数id
	public function show()
	{
		$id	 = trim(urldecode($this->input->get("id")));
		$file = $this->find_news_file($id);

		if($file == "html")
		{
			$html_path = $this->get_web_path("$id.html");
			$this->set_view_data('html_path', $html_path);
			$this->load_view('news/show');
		}
		else if($file == "pdf")
		{
			redirect($this->get_web_path("$id.pdf"));
		}
		else
		{
			show_404();
		}
	}
	
	//根据新闻的id，从文件系统中查找出该新闻的文件
	private function find_news_file($id)
	{
		if(file_exists($this->get_system_path("$id.html")))
		{
			return "html";
		}
		else if(file_exists($this->get_system_path("$id.pdf")))
		{
			return "pdf";
		}
		else
		{
			return null;
		}
	}
	
	//文件在文件系统上的路径全名
	private function get_system_path($filename)
	{
		return APPPATH. "../uploads/$filename";
	}
	
	//文件在url上的路径全名
	private function get_web_path($filename)
	{
		return $this->base_path. "uploads/$filename";
	}


	////////////////////////////////////////////////////////////////////////////////////

	//管理员添加一个新闻
	public function add()
	{
		$this->logined_first();
		$this->set_view_data('title',	 "add news | ". $this->config->item('site_name'));
		if($this->is_post_method())
		{
			$this->add_POST();
		}
		else
		{
			$this->add_GET();
		}
	}
	
	//添加新闻-GET请求
	private function add_GET()
	{
		$this->load_view('news/add');
	}

	//添加新闻-POST请求
	private function add_POST()
	{
		$this->validate_input();
		
		$news =  $this->create_news();

		if($news == null)
		{
			$this->set_view_data('error', $this->error);
			$this->load_view('news/add');
		}
		else
		{
			$news_manager = new NewsManager();
			$news_manager->add_news($news);
			redirect($this->base_path. "news");
		}
	}
	
	private function validate_input()
	{
		$type  = $this->input->post("type");
		$title = $this->input->post("title");
		if(empty($title))
		{
			$this->show_add_error('title is empty!');
			exit;
		}
		if(empty($type))
		{
			$this->show_add_error('Please select a news type.');
			exit;
		}
	}

	//添加新闻出错时的处理
	private function show_add_error($error)
	{
		//如果上传文件失败：
		$this->set_view_data('error', $error);
		$this->load_view('news/add');
	}

	private function create_news()
	{
		$type = $this->input->post("type");

		if($type == "html")
		{
			return $this->create_news_by_edit();
		}
		else if($type == "upload")
		{
			return $this->create_news_by_upload();
		}
		else
		{
			return null;
		}
	}
	
	//上传pdf文件，然后创建新的news。
	//返回一个NewsInfo对象。如果创建失败，返回null
	private function create_news_by_upload()
	{
		$id = date("YmdHis");
		$config['upload_path']   = APPPATH. '/../uploads/';
		$config['allowed_types'] = '*';	
		$config['file_name']     = $id. ".pdf";
		
		$this->load->library('upload', $config);
		$this->upload->initialize($config);

		if (!$this->upload->do_upload('userfile'))
		{
			//如果上传文件失败：
			$this->error = $this->upload->display_errors();
			return null;
		}
		else
		{
			$news        = new NewsInfo();
			$news->id    = $id;
			$news->title = $this->input->post("title");
			$news->date  = date("Y-m-d");
			return $news;		 
		}
	}


	private function create_news_by_edit()
	{
		$id       = date("YmdHis");
		$fullname = $this->get_system_path("$id"). ".". $this->input->post("type");
		
		$title    = $this->input->post("title");
		$content  = $this->input->post("content");
		
		if(file_put_contents($fullname, $content) === false)
		{
			$this->error = "add news failed: can't create news file";
			return null;
		}

		$news = new NewsInfo();
		$news->id = $id;
		$news->title = $title;
		$news->date = date("Y-m-d");
		return $news;
	}



	//////////////////////////////////////////////////////////
	
	public function delete()
	{
		$this->logined_first();
		$id = trim(urldecode($this->input->post("id")));
		
		$file = $this->find_news_file($id);
		if($file == null)
		{
			show_404();
			return;
		}
		
		$news_manager = new NewsManager();
		$news_manager->delete_news($id);
		
		if(unlink($this->get_system_path($file)))
		{
			redirect($this->base_path. "news");
		}
		else
		{
			redirect($this->base_path. "news");
		}
	}
	

}
