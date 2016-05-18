<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once('base/BaseController.php');


class Contact_participating extends BaseController 
{
	
	function __construct()
	{
		parent::__construct();
		$this->set_view_data('nav_id',  "nav-contact");
	}

	public function thanks()
	{
		$this->set_view_data('title',   "店舗情報変更に関するお手続き | ". $this->config->item('site_name'));
		$this->load_view("contact/contact_thanks");
	}
    
	public function index()
	{
		$this->set_view_data('title',   "店舗情報変更に関するお手続き | ". $this->config->item('site_name'));
		if($this->is_post_method())
		{
			$this->index_POST();
		}
		else
		{
			$this->index_GET();
		}
	}

	public function index_GET()
	{
		$this->load_view('contact/contact_participating');
	}


	public function index_POST()
	{
		if($this->send_using_jphpmailer())
		{
			$this->load->helper('url');
			redirect($this->base_path. "contact_participating/thanks");
		}
		else
		{
			$this->set_view_data("error", "oops, send mail failed.");
			$this->load_view('contact/contact_participating');
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
		$jmailer->_setFrom($mailto, "お問合せ");
		$jmailer->setSubject("【既存加盟店】	情報変更お問い合せ");
		$jmailer->setBody($this->get_mail_body());
 		
		return $jmailer->send();
	}


	private function get_mail_body()
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
		$contract_type           = $this->get_participating_contract_type();
		$branch_number           = $this->get_field("branch_number");
		$company_name            = $this->get_field("company_name");
		$shop_name               = $this->get_field("shop_name");
		$represent_name          = $this->get_field("represent_name");
		$represent_name_furigana = $this->get_field("represent_name_furigana");
		$contact_name            = $this->get_field("contact_name");
		$tel                     = $this->get_field("tel");
		$textarea                = $this->get_field("textarea");		

		return 
			"【手続き内容】	$service_type\r\n".
			"【契約形態】	$contract_type\r\n".
			"【加盟店番号】	$branch_number\r\n".
			"【法人名】	$company_name\r\n".
			"【店舗名】	$shop_name\r\n".
			"【代表者名】	$represent_name\r\n".
			"【代表者フリガナ】	$represent_name_furigana\r\n".
			"【ご担当者名】	$contact_name\r\n".
			"【連絡先電話番号】	$tel\r\n".
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
			$this->get_checkbox_str("close_shop", "利用が少ない").
			$this->get_checkbox_str("use_little", "営業権譲渡").
			$this->get_checkbox_str("assignment", "早期決済にメリットがない").
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

	//[2]契約形態
	private function get_participating_contract_type()
	{
		switch($this->input->post('contract_type')){
			case "contract_personal":
				return "個人";
			case "contract_legal":
				return "法人";
			default:
				return "?";
		}
	}


	private function get_checkbox_str($name, $title)
	{
		if(isset($_POST[$name]))
		{
			return $title. "    ";
		}
		return "";
	}


	private function get_field($field_name)
	{
		return trim(htmlspecialchars($this->input->post($field_name), ENT_QUOTES));
	}
	
}

