<?php


require_once('ContactHandler.php');

class InfoChangingHandler extends ContactHandler 
{
  protected function get_subject()
  {
  	return "加盟店（各種変更申請）";
  }

	protected function get_from_name()
	{
		$shop_name = $this->get_field("shop_name");
		return $shop_name. "様";
	}

	protected function get_mail_body()
	{
		$result = $this->get_table1_body();

		if($this->input->post('service_type') != "type_termination_request")
		{
			$result .= $this->get_table2_body();
		}

		if($this->input->post('service_type') == "type_termination_request")
		{
			$result .= $this->get_table3_body();
		}

		return $result;
	}


	private function get_table1_body()
	{
		$service_type            = $this->get_service_type();
		$detail                  = $this->get_field("detail");
		$branch_number           = $this->get_field("branch_number");
		$company_name            = $this->get_field("company_name");
		$shop_name               = $this->get_field("shop_name");
		$represent_name          = $this->get_field("represent_name");
		$represent_name_furigana = $this->get_field("represent_name_furigana");
		$contact_name            = $this->get_field("contact_name");
		$tel                     = $this->get_field("tel");
		$email                   = $this->get_field("email");
		$send_addr               = $this->get_send_addr();
		$send_addr_text          = $this->get_field("send_addr_text");
		$textarea                = $this->get_field("textarea");		

		return 
			"【手続き内容】	$service_type\r\n".
			"【手続き内容詳細】	$detail\r\n".
			"【加盟店番号】	$branch_number\r\n".
			"【法人名】	$company_name\r\n".
			"【店舗名】	$shop_name\r\n".
			"【代表者名】	$represent_name\r\n".
			"【代表者フリガナ】	$represent_name_furigana\r\n".
			"【ご担当者名】	$contact_name\r\n".
			"【連絡先電話番号】	$tel\r\n".
			"【メールアドレス】	$email\r\n".
			"【送付先住所】	$send_addr\r\n".
			"【その他住所】	$send_addr_text\r\n".
			"【その他追加情報】	$textarea\r\n".
			"\r\n\r\n\r\n";
	}



	private function get_table2_body()
	{
		$legal_info = 
			$this->get_checkbox_str("legal_info1", "社名").
			$this->get_checkbox_str("legal_info2", "所在地").
			$this->get_checkbox_str("legal_info3", "連絡先");

		$represent_info = 
			$this->get_checkbox_str("represent_info1", "代表者名").
			$this->get_checkbox_str("represent_info2", "所在地").
			$this->get_checkbox_str("represent_info3", "連絡先");

		$shop_info = 
			$this->get_checkbox_str("shop_info1", "店舗名").
			$this->get_checkbox_str("shop_info2", "所在地").
			$this->get_checkbox_str("shop_info3", "連絡先");

		$bank_name = $this->get_field("bank_name");

		$change_deliver_info = 
			$this->get_checkbox_str("change_deliver_info1", "用度品送付先の変更").
			$this->get_checkbox_str("change_deliver_info2", "計算書送付先の変更");

		$deliver_info = 
			$this->get_checkbox_str("deliver_info1", "送付先").
			$this->get_checkbox_str("receive_way1", "受信方法").
			$this->get_checkbox_str("email1", "E-Mailアドレス（E-Mail受信の場合）").
			$this->get_checkbox_str("password1", "パスワード（FAX受信の場合）");

		return 
			"【法人情報】	$legal_info\r\n".
			"【代表者情報】	$represent_info\r\n".
			"【店舗情報】	$shop_info\r\n".
			"【お振込金融機関情報】	$bank_name\r\n".
			"【書類送付情報】	$change_deliver_info\r\n".
			"【日次明細の変更】	$deliver_info\r\n".
			"\r\n\r\n\r\n";
	}


	private function get_table3_body()
	{
		$reason = 
			$this->get_checkbox_str("close_shop", "閉店").
			$this->get_checkbox_str("use_little", "利用が少ない").
			$this->get_checkbox_str("assignment", "営業権譲渡").
			$this->get_checkbox_str("not_merit", "早期決済にメリットがない").
			$this->get_checkbox_str("change_other_co", "他社に切替え").
			$this->get_checkbox_str("other", "その他");

		$year  = $this->get_field('year');
		$month = $this->get_field('month');
		$day   = $this->get_field('day');
		$date  = $year. "年". $month. "月". $day. "日";

		return 
			"【解約理由】	$reason\r\n".
			"【解約希望日（閉店予定日）】	$date\r\n".
			"\r\n\r\n\r\n";
	}



	//[1]手続き内容を選択してください
	private function get_service_type()
	{
		switch($this->input->post('service_type')){
			case "type_change_store":
				return "店舗情報変更";
			case "type_termination_request":
				return "解約希望";
			case "type_change_contractore":
				return "店舗契約者変更";
			default:
				return "?";
		}
	}

	private function get_send_addr()
	{
		switch($this->input->post('send_addr')){
			case "addr_legal":
				return "法人";
			case "addr_shop":
				return "店舗";
			case "addr_represent":
				return "代表者住所";
			case "addr_other":
				return "その他住所";
			default:
				return "?";
		}
	}




}

?>