<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$cfg_mail["smtp_host"] = "218.42.147.91";

//if "SMTPAuth" is false, "smtp_user" and ""smtp_pass" can be ignored
$cfg_mail["SMTPAuth"] = false;
$cfg_mail["smtp_user"] = "dummy@dummy";
$cfg_mail["smtp_pass"] = "dummy";
$cfg_mail["smtp_port"] = 25;


if(ENVIRONMENT == 'development')
{
	$cfg_mail['contact_emal']  = 'XiaoHu.Jin@merchant-s.com';
}
else
{
	$cfg_mail['contact_emal']  = 'info@merchant-s.com';
}

$cfg_mail['data_team_email'] = 'MS-DataEntryTeam@merchant-s.com';
$cfg_mail['sales_email']     = 'MS-Sales@merchant-s.com';
$cfg_mail['op_email']        = 'MS-Operations@merchant-s.com';