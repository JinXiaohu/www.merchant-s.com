<?php
defined('BASEPATH') OR exit('No direct script access allowed');



class ContactHandler
{

  public $input;

  protected $default_mailto;
	
	public function validate()
	{
		return true;
	}


	public function send_using_jphpmailer()
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

		$this->default_mailto = $cfg_mail['contact_emal'];

		$mailto = $this->get_mailto();
		$jmailer->addTo($mailto);
		$jmailer->_setFrom($mailto, $this->get_from_name());
		$jmailer->setSubject($this->get_subject());
		$jmailer->setBody($this->get_mail_body());
 	
		return $jmailer->send();
	}



	protected function get_mailto()
	{
		return $this->default_mailto;
	}


  protected function get_subject()
  {
  	return "";
  }

	protected function get_from_name()
	{
		return "";
	}

	protected function get_mail_body()
	{
		return "";
	}

	protected function get_field($field_name)
	{
		return htmlspecialchars($this->input->post($field_name), ENT_QUOTES);
	}
	
	protected function get_checkbox_str($name, $title)
	{
		if(isset($_POST[$name]))
		{
			return $title. "    ";
		}
		return "";
	}

}

?>