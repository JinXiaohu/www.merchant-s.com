<?php

require_once "NewsInfo.class.php";

class NewsManager
{

	private $dir;


	private $full_list_file;


	private $top_list_file;


	public function __construct()
	{
		$this->full_list_file = APPPATH. "/../uploads/full_list.json";
		$this->top_list_file = APPPATH. "/../uploads/top_list.json";
	}

	public function get_full_list()
	{
		if(file_exists($this->full_list_file))
		{
			$json = file_get_contents($this->full_list_file);
			if($json)
			{
				$newsinfos = json_decode($json);
				if($newsinfos)
				{
					return $newsinfos;
				}
			}			
		}
		//返回一个空数组，否则view层还得判断是不是null
		return array();
	}

	public function get_top_news()
	{
		if(file_exists($this->top_list_file))
		{
			$json = file_get_contents($this->top_list_file);
			if($json)
			{
				$newsinfos = json_decode($json);
				if($newsinfos)
				{
					return $newsinfos;
				}
			}			
		}
		return array();
	}


	public function add_news($news)
	{
		$full_list = $this->get_full_list();
		array_unshift($full_list, $news);

		$this->update_db($full_list);
	}
	
	public function delete_news($id)
	{
		$full_list = $this->get_full_list();
		$new_full_list = array();
		
		$count = count($full_list);
		for($i = 0 ; $i < $count; $i++)
		{
			if($full_list[$i]->id != $id)
			{
				array_push($new_full_list, $full_list[$i]);
			}
		}
		$this->update_db($new_full_list);
	}
	
	
	private function update_db($full_list)
	{
		//update full_list_file
		$json = json_encode($full_list);
		file_put_contents($this->full_list_file, $json);
		
		//update top_list_file
		$count = count($full_list);
		$count = min($count, 4);
		
		$top_news = array();
		for($i = 0 ; $i < $count; $i++)
		{
			$top_news[$i] = $full_list[$i];
		}
		$json = json_encode($top_news);
		file_put_contents($this->top_list_file, $json);
	}
}

?>