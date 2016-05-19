<style type="text/css">
body{
  margin-top: 10px;
  margin-bottom: 0;
}
.container{
  max-width: 890px;
}
a{
  color: #206020;
}
a:hover, a:focus {
  color: #194D19;
}
h1{
  font-size: 1.3em;
  font-weight: bold;
  margin-top: 15px;
}
h2{
  padding: 5px 10px;
  margin-top: 40px;
  border-radius: 2px;    
  font-size: 1.1em;
  font-weight: bold;
  border-style: none none none solid;
  border-color: #339933;
  border-left-width: 10px;
  box-shadow: rgb(200, 200, 200) 1px 1px 3px;
  color: rgb(120, 120, 120);
  background-color: rgb(250, 250, 250);
  line-height: 25px;
  
  background: linear-gradient(to right, #fafafa 0%,#f0f0f0 100%);
  background: -moz-linear-gradient(left, #fafafa 0%, #f0f0f0 100%);
  background: -webkit-linear-gradient(left, #fafafa 0%,#f0f0f0 100%);
  background: -o-linear-gradient(left, #fafafa 0%,#f0f0f0 100%);
  background: -ms-linear-gradient(left, #fafafa 0%,#f0f0f0 100%);
}
.first-h2{
  margin-top: 15px;
}
.smallText{
   font-size: 0.9em;
}
#table_brand{
  width: 100%;
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
  border-radius: 4px;
  margin-top: 5px;
  margin-bottom: 5px;
}
@media (max-width: 767px){
  #div_nav{
    margin-top: 15px;
    padding-left: 1px;
    padding-right: 8px;
  }
  .nav > li{
    float: left;
    width: 33.33333333%;
    padding: 0px 2px 0px 8px;
  }
  .navbar-nav > li > a {
    padding: 8px 0;
  }
}
#id_navbar{
  float: none;
}
#id_navbar .menu{
  padding-top: 10px;
  padding-bottom: 10px;
  text-align: center;
}
#id_navbar a{
  color: rgb(128,128,128);
  font-size: 1.1em;
}
#id_navbar a:focus, #id_navbar a:hover{
  color: white;
  background-color: #339933;
  border-radius: 2px;
}
#id_navbar .active a{
  color: #339933;
  font-weight: bold;
}
#id_navbar .active a:focus, #id_navbar .active a:hover{
  color: white;
  font-weight: bold;
}
hr{
  border-top: 2px solid #339933;  margin-top: 0;
  margin-bottom: 0;
}
@media (max-width: 767px){
  hr{
    border-top:none;
    background-color: #f5f5f5;
    height: 15px;
    margin-left: -8px;
    margin-right: -8px;
    margin-top: 10px;
    margin-bottom: 10px;
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

  <div id="div_nav">
    <ul class="nav navbar-nav" id="id_navbar">
      <li id="nav-home">
        <a href="<?php echo $base_path;?>" onclick="_hmt.push(['_trackEvent', 'docv3-navbar', 'click', ''])">HOME</a>
      </li>
      
      <li id="nav-news">
        <a href="<?php echo $base_path;?>news" onclick="_hmt.push(['_trackEvent', 'docv3-navbar', 'click', ''])">NEWS</a>
      </li>

      <li id="nav-service">
        <a href="<?php echo $base_path;?>service" onclick="_hmt.push(['_trackEvent', 'docv3-navbar', 'click', ''])">サービス</a>
      </li>

      <li id="nav-pos">
        <a href="<?php echo $base_path;?>pos" onclick="_hmt.push(['_trackEvent', 'docv3-navbar', 'click', ''])">決済端末</a>
      </li>

      <li id="nav-aboutus">
        <a href="<?php echo $base_path;?>aboutus" onclick="_hmt.push(['_trackEvent', 'docv3-navbar', 'click', ''])">会社概要</a>
      </li>

      <li id="nav-contact">
        <a href="<?php echo $base_path;?>contact" onclick="_hmt.push(['_trackEvent', 'docv3-navbar', 'click', ''])">お問い合わせ</a>
      </li>
    </ul>
  </div>
