<style type="text/css">
#content{
  margin-top: 10px;
}
.sidebar ul{
  list-style: none;
  padding-left: 0;
}
.sidebar{
  border-right: solid 1px #e5e5e5;
}
.sidebar .level1{
  padding: 7px 10px;
  font-weight: bold;
}

.sidebar .level2{
  padding: 7px 20px;
}
.sidebar .li_sep{
  height: 15px;
}

.sidebar li:hover{
  background-color: #f8f8f8;
}

.sidebar li.active a{
  color: white;
}
.sidebar li.active{
  background-color: #339933;
}
.sidebar .active:hover{
  background-color: #339933;
}

.sidebar li.web.active{
  background-color: #3FA3D1;
}
.sidebar li.web.active:hover{
  background-color: #3FA3D1;
}
@media (min-width: 767px){
h1{
  margin-top: 5px;
}
</style>

<div class="row" id="content">
  <div class="col-sm-4 sidebar">
    <ul>
      <li id="store" class="level1"><a href="<?php echo $base_path;?>service/store">クレジットカード決済（早期）＜店舗＞</a></li>
      <li id="store_merit" class="level2"><a href="<?php echo $base_path;?>service/store_merit">特徴・メリット</a></li>
      <li id="store_service" class="level2"><a href="<?php echo $base_path;?>service/store_service">サービスの仕組み</a></li>
      <li id="store_flow" class="level2"><a href="<?php echo $base_path;?>service/store_flow">導入までの流れ</a></li>
      <li id="store_faq" class="level2"><a href="<?php echo $base_path;?>service/store_faq">FAQ</a></li>          
      
      <div class="li_sep"></div>

      <li id="web" class="web level1"><a href="<?php echo $base_path;?>service/web">クレジットカード決済（早期）＜WEB＞</a></li>
      <li id="web_merit" class="web level2"><a href="<?php echo $base_path;?>service/web_merit">特徴・メリット</a></li>
      <li id="web_service" class="web level2"><a href="<?php echo $base_path;?>service/web_service">サービスの仕組み</a></li>
      <li id="web_flow" class="web level2"><a href="<?php echo $base_path;?>service/web_flow">導入までの流れ</a></li>
      <li id="web_price" class="web level2"><a href="<?php echo $base_path;?>service/web_price">料金表</a></li>
      <li id="web_faq" class="web level2"><a href="<?php echo $base_path;?>service/web_faq">FAQ</a></li>    

      <div class="li_sep"></div> 

      <li id="wechat" class="level1"><a href="<?php echo $base_path;?>service/wechat">WeChat決済</a></li>
      <li id="wechat_merit" class="level2"><a href="<?php echo $base_path;?>service/wechat_merit">特徴・メリット</a></li> 

      <div class="li_sep"></div>

      <li id="wechatad" class="level1"><a href="<?php echo $base_path;?>service/wechatad">WeChat広告<br/>プロモーション (公式アカウント作成)</a></li>
      <li id="wechatad_merit" class="level2"><a href="<?php echo $base_path;?>service/wechatad_merit">特徴・メリット</a></li>
    </ul>
  </div>

  <div class="col-sm-8">
    <div class="mb_separator div_hidden"></div>
