<?php


require_once('ContactHandler.php');

class OrderHandler extends ContactHandler 
{

  protected function get_subject()
  {
  	return "ロール紙発注";
  }

	protected function get_from_name()
	{
		$shop_name = $this->get_field('shop_name');
		return $shop_name. "様";
	}

	protected function get_mail_body()
	{
		$merc_id   = $this->get_field('merc_id');
		$term_id   = $this->get_field('term_id');
		$shop_name = $this->get_field('shop_name');
		$email     = $this->get_field('email');
		$addr      = $this->get_addr();
		$addr_txt  = $this->get_field('addr_txt');
		$s80       = $this->get_num('s80');
		$s90       = $this->get_num('s90');
		$remark    = $this->get_field('remark');

		return 
			"【加盟店番号】\t$merc_id\r\n".
			"【端末識別番号】\t$term_id\r\n".
			"【店舗名】\t$shop_name\r\n".
			"【メールアドレス】\t$email\r\n".
			"【送付先住所】\t$addr\r\n".
			"【その他住所】\t$addr_txt\r\n".
			"【S80（58mmx48Φ）】\t$s80\r\n".
			"【S90（58mmx30Φ）】\t$s90\r\n".
			"【備考】\t$remark\r\n";
	}


	private function get_addr()
	{
		switch($this->input->post('addr')){
			case "addr_legal":
				return "法人";
			case "addr_store":
				return "店舗";
			case "addr_other":
				return "その他住所";
			default:
				return "?";
		}
	}

	private function get_num($name)
	{
		if($this->input->post($name))
		{
			return $this->input->post($name). "個";
		}
		return "0";
	}

}

?>