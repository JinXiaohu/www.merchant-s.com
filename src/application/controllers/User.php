<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once('base/BaseController.php');


class User extends BaseController 
{
	public function login()
	{
    $this->set_view_data('title',   "Login | ". $this->config->item('site_name'));
    if($this->is_post_method())
    {
      $this->login_POST();
    }
    else
    {
      $this->login_GET();
    }
	}
    
    private function login_GET()
    {
      $this->load_view('user/login');
    }
    
    private function login_POST()
    {
      $username = $this->input->post('username');
      $password = $this->input->post('password');
      if(empty($username))
      {
        $this->login_failed("username is empty!");
        return;
      }
      if(empty($password))
      {
        $this->login_failed("password is empty!");
        return;
      }
      
      require_once(APPPATH. 'config/users.php');
      if(!array_key_exists($username, $config['users']))
      {
        $this->login_failed("username doesn't exist!");
        return;
      }
      
      $md5_pwd = $config['users'][$username];
      if(md5($password) != $md5_pwd)
      {
        $this->login_failed("password error!");
        return;
      }
      
      $this->load->library("session");
      $this->session->set_userdata('username', $username);
      $this->load->helper('url');
      redirect($this->base_path);
    }
    
    
    private function login_failed($error)
    {
      $this->set_view_data('error', $error);
      $this->load_view('user/login');
    }
	
}
