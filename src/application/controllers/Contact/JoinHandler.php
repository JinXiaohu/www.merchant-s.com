<?php


require_once('ContactHandler.php');

class JoinHandler extends ContactHandler 
{

	public function validate()
	{
		$name_mei  = $this->get_field("name_mei");
		$shop_name = $this->get_field("shop_name");
		$tel       = $this->get_field("tel");
		if(!$name_mei)
		{
			return "氏名を入力してください。";
		}
		if(!$shop_name)
		{
			return "会社名を入力してください。";
		}
		if(!$tel)
		{
			return "電話番号を入力してください。";
		}
		return true;
	}
	

  protected function get_subject()
  {
  	return "新規加盟（インバウンド）";
  }

	protected function get_from_name()
	{
		$name_mei = $this->get_field('name_mei');
		$shop_name = $this->get_field('shop_name');
		if(!$shop_name)
		{
		  return $name_mei. "様";
		}
		else
		{
		  return $name_mei. "様@". $shop_name;
		}
	}

	protected function get_mail_body()
	{
		$name_mei    = $this->get_field('name_mei');
		$shop_name   = $this->get_field('shop_name');
		$tel         = $this->get_field('tel');
		$reply_email = $this->get_field('reply_email');
		$request     = $this->get_request();

		$communication = 
			$this->get_checkbox_str("con_by_tel", "電話連絡希望").
			$this->get_checkbox_str("con_by_email", "Eメール連絡希望").
			$this->get_checkbox_str("no_con", "連絡不要");

		$send = 
			$this->get_checkbox_str("send_by_mail", "資料送付希望（ご郵送）").
			$this->get_checkbox_str("send_by_email", "資料送付希望（Eメール）");

		$content     = $this->get_field('content');

		return 
			"【氏名】\t$name_mei\r\n".
			"【会社名または店舗名】\t$shop_name\r\n".
			"【電話番号】\t$tel\r\n".
			"【メールアドレス】\t$reply_email\r\n".
			"【資料請求】\t$request\r\n".
			"【ご希望の連絡方法】\t$communication\r\n".
			"【資料請求】\t$send\r\n".
			"【お問い合わせ内容】\t$content \r\n";
	}

	private function get_request()
	{
		switch($this->input->post('request')){
			case "request_yes":
				return "必要";
			case "request_no":
				return "不要";
			default:
				return "?";
		}
	}
}

?>