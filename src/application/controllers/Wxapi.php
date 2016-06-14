<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once('base/BaseController.php');


class Wxapi extends BaseController 
{	

	public function index()
	{
		require_once(APPPATH. "libraries/wechatCallbackapiTest.class.php");

		define("TOKEN", "mswxapi");
		$wechatObj = new wechatCallbackapiTest();
		$wechatObj->valid();
	}

}
