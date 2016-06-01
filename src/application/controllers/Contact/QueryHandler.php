<?php


require_once('ContactHandler.php');

class QueryHandler extends ContactHandler 
{

	public function validate()
	{
		$name_mei     = $this->get_field("name_mei");
		$company_name = $this->get_field("company_name");
		$tel          = $this->get_field("tel");

		if(!$name_mei)
		{
			return "氏名を入力してください。";
		}
		if(!$company_name)
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
  	return "加盟店（問い合わせ）";
  }

	protected function get_from_name()
	{
		$name_mei     = $this->get_field('name_mei');
		$company_name = $this->get_field('company_name');
		return $name_mei. "様@". $company_name;
	}

	protected function get_mail_body()
	{
		$name_mei     = $this->get_field('name_mei');
		$company_name = $this->get_field('company_name');
		$tel          = $this->get_field('tel');
		$merc_id          = $this->get_field('merc_id');
		$shop_name    = $this->get_field('shop_name');
		$email        = $this->get_field('email');
		$content      = $this->get_field('content');

		return 
			"【氏名】\t$name_mei\r\n".
			"【会社名】\t$company_name\r\n".
			"【電話番号】\t$tel\r\n".
			"【加盟店番号】\t$merc_id\r\n".
			"【店舗名】\t$shop_name\r\n".
			"【メールアドレス】\t$email\r\n".
			"【お問い合わせ内容】\t$content \r\n";
	}

}

?>