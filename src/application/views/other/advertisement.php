<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="keywords" content="クレジット決済,カード決済,オンライン決済,クレジットカード加盟店,決済代行,決済,ネット決済,クレジットカード決済,インターネット決済,クレジットカード決済代行,ECサイト,Eコマース,マーチャントサポート,早期決済" />
  <meta name="description" content="クレジットカード決済は最短3日後決済、オンライン決済は最短7日後決済。VISA・Masterカードで決済できる安心と信頼のクレジットカード決済システム。" />
  <title>マーチャント・サポート</title>
  <link rel="shortcut icon" type="image/vnd.microsoft.icon" href="<?php echo $cdn_path;?>images/MSIcon.ico" />
  <link href="<?php echo $cdn_path;?>css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo $cdn_path;?>css/style.css" rel="stylesheet">
  <script src="<?php echo $cdn_path;?>js/jquery.min.js"></script>

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
    <script src="//cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="//cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>

<body>

<style type="text/css">
  body{
  	height: 100%;
  }
	#container{
		margin-left: auto;
		margin-right: auto;
		width: 780px;
	}

	#a_index{
		display: block;
		position:absolute;
		top:0;
		width:450px;
		height:150px;
	}
	#a_contact1{
		position:absolute;
		top:972px;
		width: 780px;
	  height:120px;
	}
	#a_contact2{
		position:absolute;
		top:2650px;
		width: 780px;
	  height:120px;
	}
	@media (max-width: 780px)
	{
		#container{
			margin-left: auto;
			margin-right: auto;
			width: 100%;
		}
		#img_ad{
			max-width: 100%;
		}
		#a_index{
			top: 0;
			width: 0;
			height: 0;
		}
		#a_contact1{
			top: 0;
			width: 100%;
			height: 0;
		}
		#a_contact2{
			top: 0;
			width: 100%;
			height: 0;
		}		
	}
}
</style>


<div id="container">
    <img id="img_ad" src="<?php echo $cdn_path; ?>images/advertisement/ad.png">
  	
		<a href="/" id="a_index"></a>
		<a href="contact" id="a_contact1"></a>
		<a href="contact" id="a_contact2"></a>

