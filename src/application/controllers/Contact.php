<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once('base/BaseController.php');


class Contact extends BaseController 
{
	public function thanks()
	{
		$this->set_view_data('title',   "お問い合わせ | ". $this->config->item('site_name'));
		$this->load_view("other/contact_thanks");
	}


	public function index()
	{
		$this->set_view_data('title',   "お問い合わせ | ". $this->config->item('site_name'));
		if($this->is_post_method())
		{
			$this->index_POST();
		}
		else
		{
			$this->index_GET();
		}
	}

	private function index_GET()
	{
		//$this->set_view_data('nav_id',  "contact");
		$this->load_view('other/contact');
	}


	private function index_POST()
	{
		$this->validate();
    $this->send_mail();
	}

	private function validate()
	{
		$name_mei  = trim(htmlspecialchars($this->input->post('name_mei'), ENT_QUOTES));
		$shop_name = trim(htmlspecialchars($this->input->post('shop_name'), ENT_QUOTES));
		$tel       = trim(htmlspecialchars($this->input->post('tel'), ENT_QUOTES));

		if(!$name_mei)
		{
			$this->set_view_data("error", "Please write your name.");
			$this->load_view('other/contact');
			exit;
		}
		if(!$shop_name)
		{
			$this->set_view_data("error", "Please write your shop's name.");
			$this->load_view('other/contact');
			exit;
		}
		if(!$tel)
		{
			$this->set_view_data("error", "Please write your telephone.");
			$this->load_view('other/contact');
			exit;
		}
	}


	private function send_mail()
	{
		if($this->send_using_jphpmailer())
		{
			$this->load->helper('url');
			redirect($this->config->item('base_path'). "contact/thanks");
		}
		else
		{
			$this->set_view_data("error", "oops, send mail failed.");
			$this->load_view('other/contact');
		}
	}


	private function send_using_jphpmailer()
	{
		require_once(APPPATH. "libraries/jphpmailer.php");
		require_once(APPPATH. "config/mail.php");
		$jmailer = new JPHPMailer();
		$jmailer->in_enc = 'utf-8';
		
		$jmailer->IsSMTP();
		$jmailer->Host     = $cfg_mail['smtp_host'];
		$jmailer->Port     = $cfg_mail['smtp_port'];
		$jmailer->SMTPAuth = $cfg_mail['SMTPAuth'];
		if($jmailer->SMTPAuth)
		{
			$jmailer->Username = $cfg_mail['smtp_user'];
			$jmailer->Password = $cfg_mail['smtp_pass'];
		}

		$mailto = $cfg_mail['contact_emal'];

		$jmailer->addTo($mailto);
		$jmailer->_setFrom($mailto, $this->get_from_name());
		$jmailer->setSubject("お問い合わせ");
		$jmailer->setBody($this->get_mail_body());
 		
		return $jmailer->send();
	}


/*
	private function send_using_phpmailer()
	{
		require_once(APPPATH. "libraries/class.phpmailer.php");
		$mailer = new PHPMailer();

		require_once(APPPATH. "config/mail.php");
  	$mailer->CharSet = 'utf-8';
		$mailer->IsSMTP();
		$mailer->Host = $cfg_mail['smtp_host'];
		$mailer->Port = $cfg_mail['smtp_port'];
		$mailer->SMTPAuth = $cfg_mail['SMTPAuth'];
		if($mailer->SMTPAuth)
		{
			$mailer->Username = $cfg_mail['smtp_user'];
			$mailer->Password = $cfg_mail['smtp_pass'];
		}

	  $mailto = $cfg_mail['contact_emal'];

		$mailer->AddAddress($mailto);
		$mailer->SetFrom($mailto, $this->get_from_name());
		$mailer->Subject = "お問い合わせ";
		$mailer->Body = $this->get_mail_body();
 		
		return $mailer->send();
	}
*/

	private function get_from_name()
	{
		$name_mei = htmlspecialchars($this->input->post('name_mei'), ENT_QUOTES);
		return $name_mei. "様";
	}

	private function get_mail_body()
	{
		$name_mei    = $this->get_field('name_mei');
		$shop_name   = $this->get_field('shop_name');
		$tel         = $this->get_field('tel');
		$reply_email = $this->get_field('reply_email');
		$content     = $this->get_field('content');

		return 
			"氏名:\t$name_mei\r\n".
			"会社名:\t$shop_name\r\n".
			"TEL:\t$tel\r\n".
			"メールアドレス:\t$reply_email\r\n".
			"お問い合わせ内容:\t$content \r\n";
	}

	private function get_field($field_name)
	{
		return htmlspecialchars($this->input->post($field_name), ENT_QUOTES);
	}
	
}

?>