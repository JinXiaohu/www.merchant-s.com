<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once('base/BaseController.php');


class News extends BaseController 
{
	public function __construct()
	{
		parent::__construct();

		$this->set_view_data('title',	 "News | ". $this->config->item('site_name'));
		$this->set_view_data('nav_id',  "nav-news");
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
		$file_type = $this->find_news_file_type($id);

		if($file_type == "html")
		{
			$html_path = $this->get_system_path("$id.html");
			$file_content = file_get_contents($html_path);
			$this->set_view_data('file_content', $file_content);
			$this->load_view('news/show');
		}
		else if($file_type == "pdf")
		{
			redirect($this->get_web_path("$id.pdf"));
		}
		else
		{
			show_404();
		}
	}
	

	//根据新闻的id，从文件系统中查找出该新闻的文件类型
	private function find_news_file_type($id)
	{
		//一定要优先找html文件
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

	private function create_news($id = null)
	{
		if(!$id)
		{
			$id = date("YmdHis");
		}
		$this->delete_files($id);

		$type = $this->input->post("type");

		if($type == "edit_html")
		{
			return $this->create_news_by_edit($id);
		}
		else if($type == "upload_pdf")
		{
			return $this->create_news_by_upload($id, "pdf");
		} 
		else if($type == "upload_html")
		{
			return $this->create_news_by_upload($id, "html");
		}
		else
		{
			return null;
		}
	}

	private function delete_files($id)
	{
		$file_name = $this->get_system_path($id. ".html");
		if(file_exists($file_name))
		{
		  unlink($file_name);
		}

		$file_name = $this->get_system_path($id. ".pdf");
		if(file_exists($file_name))
		{
		  unlink($file_name);
		}
	}

	
	//上传pdf文件，然后创建新的news。
	//返回一个NewsInfo对象。如果创建失败，返回null
	private function create_news_by_upload($id, $file_ext)
	{
		$config['upload_path']   = APPPATH. '/../uploads/';
		$config['allowed_types'] = '*';	
		$config['file_name']     = "$id.$file_ext";
		
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
			return $this->create_newsInfo($id);	 
		}
	}


	//将管理员提交的文本内容作为html代码，写入到一个html文件中，作为一条新闻。
	//返回一个NewsInfo对象。如果创建失败，返回null
	private function create_news_by_edit($id)
	{
		$fullname = $this->get_system_path("$id"). ".html";
		$content  = $this->input->post("content");

		if(file_put_contents($fullname, $content) === false)
		{
			$this->error = "add news failed: can't create news file";
			return null;
		}
		return $this->create_newsInfo($id);
	}


	private function create_newsInfo($id)
	{
		$news        = new NewsInfo();
		$news->id    = $id;
		$news->title = $this->input->post("title");

		if($this->input->post("date"))
		{
			$news->date  = $this->input->post("date");
		}
		else
		{
			$news->date  = date("Y-m-d");
		}
		
		return $news;		 		
	}


	//////////////////////////////////////////////////////////
	
	public function delete()
	{
		$this->logined_first();
		$id = trim(urldecode($this->input->post("id")));
		
		$file_type = $this->find_news_file_type($id);
		if($file_type == null)
		{
			show_404();
			return;
		}

		$news_manager = new NewsManager();
		$news_manager->delete_news($id);

		$this->delete_files($id);			
		redirect($this->base_path. "news");
	}


	public function edit()
	{
		$this->logined_first();
		if($this->is_post_method())
		{
			$this->edit_POST();
		}
		else
		{
			$this->edit_GET();
		}		
	}

	private function edit_POST()
	{		
		$this->validate_input();

		$news =  $this->create_news($this->input->post('id'));

		if($news == null)
		{
			$this->set_view_data('error', $this->error);
			$this->load_view('news/edit');
		}
		else
		{
			$news_manager = new NewsManager();
			$news_manager->set_news($news);
			redirect($this->base_path. "news");
		}

	}

	private function edit_GET()
	{
	  $news = new NewsManager();
		$full_list = $news->get_full_list();
		$id = $this->input->get("id");
		if(!$id)
		{
			redirect($this->base_path. "news");
		}

		foreach ($full_list as $item)
		{
			if($item->id == $id)
			{
				$file_type = $this->find_news_file_type($id);

				if($file_type == "html")
				{
					$html_path = $this->get_system_path("$id.html");
					$file_content = file_get_contents($html_path);
					$this->set_view_data('file_content', $file_content);
				}
				$this->set_view_data("news", $item);
				$this->load_view("news/edit");
				return;
			}
		}
		redirect($this->base_path. "news");
	}

}
