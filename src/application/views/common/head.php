<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="keywords" content="クレジット決済,カード決済,オンライン決済,クレジットカード加盟店,決済代行,決済,ネット決済,クレジットカード決済,インターネット決済,クレジットカード決済代行,ECサイト,Eコマース,マーチャントサポート,早期決済" />
  <meta name="description" content="クレジットカード決済は最短3日後決済、オンライン決済は最短7日後決済。VISA・Masterカードで決済できる安心と信頼のクレジットカード決済システム。" />
  <title><?php echo $title; ?></title>
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
<div class="container">
  <table id="table_brand">
    <tr>
      <td id="td_logo">
        <img src="<?php echo $cdn_path;?>images/logo.gif" alt="Merchant Support">
      </td>

      <td id="td_visa" class="hidden-xs">
        <a href="http://www.visa-asia.com/ap/jp/" target="_blank">
          <img src="<?php echo $cdn_path;?>images/logo_visa.gif" alt="VISA">
        </a>
      </td>

      <td id="td_mastercard" class="hidden-xs">
        <a href="http://www.mastercard.com/jp/" target="_blank">
          <img src="<?php echo $cdn_path;?>images/logo_mastercard.gif" alt="MasterCard">
        </a>
      </td>

      <td id="td_unionpay" class="hidden-xs">
        <a href="http://jp.unionpay.com/" target="_blank">
          <img src="<?php echo $cdn_path;?>images/logo_unionpay.jpg" alt="銀聯">
        </a>
      </td>

      <td id="td_txt" class="hidden-xs">
        <p id="brand_tel">TEL:03-6279-0521</p>
        <p id="brand_time">営業時間　平日9:00～17:00<br />土・日・祝日　休み</p>     
      </td>
    </tr>
  </table>

  <div class="mb_separator div_hidden"></div>

  <div id="div_nav" class="SansSerif">
    <ul class="nav navbar-nav" id="id_navbar">
      <li id="nav-home1" >
        <a href="<?php echo $base_path;?>" onclick="_hmt.push(['_trackEvent', 'docv3-navbar', 'click', ''])">HOME</a>
      </li>
      
      <li<?php if(isset($nav_id) && $nav_id=="nav-news"):?> class="active"<?php endif;?>>
        <a href="<?php echo $base_path;?>news" onclick="_hmt.push(['_trackEvent', 'docv3-navbar', 'click', ''])">NEWS</a>
      </li>

      <li<?php if(isset($nav_id) && $nav_id=="nav-service"):?> class="active"<?php endif;?>>
        <a href="<?php echo $base_path;?>service" onclick="_hmt.push(['_trackEvent', 'docv3-navbar', 'click', ''])">サービス</a>
      </li>

      <li<?php if(isset($nav_id) && $nav_id=="nav-terminal"):?> class="active"<?php endif;?>>
        <a href="<?php echo $base_path;?>terminal" onclick="_hmt.push(['_trackEvent', 'docv3-navbar', 'click', ''])">決済端末</a>
      </li>

      <li<?php if(isset($nav_id) && $nav_id=="nav-aboutus"):?> class="active"<?php endif;?>>
        <a href="<?php echo $base_path;?>aboutus" onclick="_hmt.push(['_trackEvent', 'docv3-navbar', 'click', ''])">会社概要</a>
      </li>

      <li<?php if(isset($nav_id) && $nav_id=="nav-contact"):?> class="active"<?php endif;?>>
        <a href="<?php echo $base_path;?>contact" onclick="_hmt.push(['_trackEvent', 'docv3-navbar', 'click', ''])">お問い合わせ</a>
      </li>
    </ul>
  </div>

  <div class="mb_separator div_hidden"></div>
