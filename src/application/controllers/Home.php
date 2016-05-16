<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once('base/BaseController.php');


class Home extends BaseController 
{
	public function index()
	{
		$this->set_view_data('title', $this->config->item('site_name'));

		require_once(APPPATH. "libraries/NewsManager.class.php");
		$news = new NewsManager();
		$top_news = $news->get_top_news();
		$this->set_view_data('news_data',  $top_news);
		$this->load_view('index');
	}
}
