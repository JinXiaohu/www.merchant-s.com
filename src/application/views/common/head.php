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
  <script src="<?php echo $cdn_path;?>js/jquery.min.js"></script>
  <script src="<?php echo $cdn_path;?>js/bootstrap.min.js"></script>

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
    <script src="//cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="//cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<style type="text/css">
.container{
  max-width: 865px;
}
a{
  color: #555;
}
a:hover, a:focus {
  color: #339933;
}
h1{
  font-size: 1.3em;
  font-weight: bold;
  margin-top: 15px;
}
h2{
  padding: 5px 0 5px 10px;
  margin-top: 40px;
  border-radius: 2px 0 0 2px;    
  font-size: 1.1em;
  font-weight: bold;
  border-style: none none none solid;
  border-color: #339933;
  border-left-width: 10px;
  /*box-shadow: rgb(200, 200, 200) 1px 1px 3px;*/
  color: rgb(120, 120, 120);
  background-color: #fefefe;
  line-height: 1.4;
  
  background: linear-gradient(to left, #fefefe 0%,#f4f4f4 100%);
  background: -moz-linear-gradient(right, #fefefe 0%, #f4f4f4 100%);
  background: -webkit-linear-gradient(right, #fefefe 0%,#f4f4f4 100%);
  background: -o-linear-gradient(right, #fefefe 0%,#f4f4f4 100%);
  background: -ms-linear-gradient(right, #fefefe 0%,#f4f4f4 100%);
}
.first-h2{
  margin-top: 15px;
}
.smallText{
   font-size: 0.9em;
}
._table{
  display: table;
  width: 100%;
}
._tbody{
  display: table-row-group;
}
._tr{
  display: table-row;
}
._td{
  display: table-cell;
}

#header{
  background-color: #fafafa;
}

#table_brand{
  width: 100%;
  margin-top: 10px;
}
#td_logo{
  min-width: 280px;
}
#td_visa{
  width: 65px;
}
#td_mastercard{
  width: 50px;
}
#td_unionpay{
  width: 45px;
}
#td_txt{
  width: 200px;
  text-align: right;
}
#brand_tel{
  font-size: 23px;
  margin-bottom: 3px;
}
#brand_time{
  font-size: 0.9em;
}





#div_nav{
  margin-top: 5px;
  margin-bottom: 18px;
}

#id_navbar{
  float: none;
}
#id_navbar li{
  padding: 10px 20px;
}

#id_navbar a{
  color: rgb(100,100,100);
  font-size: 1.1em;
  font-weight: bold;
  padding: 4px 0;
}
#id_navbar li:hover, #id_navbar li a:hover{
  background-color: #f8f8f8;
}
#id_navbar li:hover{
  border-radius: 5px;
}

#id_navbar .active a{
  color: #339933;
  border-bottom: solid 2px #339933;
}
#id_navbar .active a:focus, #id_navbar .active a:hover{
  color: #339933;
}
@media (max-width: 767px){
  #table_brand{
    margin-top: 15px;
    margin-bottom: 15px;
  }
  #div_nav{
    margin-top: 5px;
    margin-bottom: 5px;
    padding-left: 0;
  }
  #id_navbar li{
    float: left;
    width: 33.33333333%;
    padding: 0px 2px 0px 8px;
  }
  #id_navbar a {
    padding: 8px 0;
  }
  #id_navbar .active a{
    border: none;
  }
  #id_navbar .active a:focus, #id_navbar .active a:hover{
    color: #339933;
  }
}


hr{
  border-top: 1px solid #e5e5e5;  
  margin-top: 0;
  margin-bottom: 0;
}
.div_hidden{
  height: 0;
  border:none;
  margin-top: 0;
  margin-bottom: 0;
}
.div_separator{
  height: 1px;
  margin-top: 15px;
  margin-bottom: 15px;
}
@media (max-width: 767px){
  /*用于在手机上分割block*/
  .mb_separator{
    border:none;
    background-color: #f5f5f5;
    height: 15px;
    margin: 10px -8px;
    padding: 0;
  }
}
</style>

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
        <p id="brand_time">営業時間　平日9:00～17:00<br>土・日・祝日　休み</p>     
      </td>
    </tr>
  </table>

  <div class="mb_separator div_hidden"></div>

  <div id="div_nav">
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

      <li<?php if(isset($nav_id) && $nav_id=="nav-pos"):?> class="active"<?php endif;?>>
        <a href="<?php echo $base_path;?>pos" onclick="_hmt.push(['_trackEvent', 'docv3-navbar', 'click', ''])">決済端末</a>
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

