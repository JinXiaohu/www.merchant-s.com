<?php

//为了兼容老版网站的url，使旧的url仍然能够打开，在.htaccess中通过地址重写,
//将以html为结尾的url跳转到本页中来，然后找到对应的新的url地址，再次重定向。
$schema = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on') ? "https" : "http";
$redirect_url  = $schema. "://". $_SERVER['HTTP_HOST']. get_redirect_url(); 
header('HTTP/1.1 301 Moved Permanently');
header("location: $redirect_url");

function get_redirect_url()
{
	$old_url =  $_SERVER['REQUEST_URI'];
	
	//老站上的站点地图中获取的老站所有url
	$url_mappings = array(
		"/index.html"                      => "/",
		"/store/index.html"                => "/service/store",
		"/store/merit/index.html"          => "/service/store_merit",
		"/store/service/index.html"        => "/service/store_service",
		"/store/flow/index.html"           => "/service/store_flow",
		"/store/guidance/index.html"       => "/terminal",
		"/store/voice/index.html"          => "/cases/retail",
		"/store/faq/index.html"            => "/service/store_faq",
		"/ecommerce/index.html"            => "/service/web",
		"/ecommerce/merit/index.html"      => "/service/web_merit",
		"/ecommerce/service/index.html"    => "/service/web_service",
		"/ecommerce/flow/index.html"       => "/service/web_flow",
		"/ecommerce/price/index.html"      => "/service/web_price",
		"/ecommerce/faq/index.html"        => "/service/web_faq",
		"/credit/index.html"               => "/credit",
		"/company/index.html"              => "/aboutus",
		"/company/about_hisun.html"        => "/aboutus/hisun",
		"/recruit/index.html"              => "/aboutus/recruit",
		"/contact/index.php"               => "/contact",
		"/contact_participating/index.php" => "/contact/info_changing",
		"/policy/index.html"               => "/policy",
		"/disclaimer/index.html"           => "/disclaimer",
		"/link/index.html"                 => "/link",
		"/sitemap/index.html"              => "/sitemap"
	);
	
	if(array_key_exists($old_url, $url_mappings))
	{
		return $url_mappings[$old_url];
	}
	else
	{
		return "/";
	}
}


?>