<style type="text/css">
.hidden_hr{
  height: 0;
  border:none;
  margin-top: 0;
  margin-bottom: 0;
}
@media (max-width: 767px){
  .hidden_hr{
    background-color: #f5f5f5;
    height: 15px;
    margin-left: -8px;
    margin-right: -8px;
    margin-top: 10px;
    margin-bottom: 10px;
  }
}

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
.sidebar a{
  color: rgb(80, 80, 80);
}
.sidebar .level1{
  padding: 11px 14px;
  font-weight: bold;
}

.sidebar .level2{
  padding: 7px 40px;
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
h1{
  margin-top: 5px;
}
</style>

<hr />

<div class="row" id="content">
  <div class="col-sm-4 sidebar">
    <ul>
      <li id="store" class="level1"><a href="<?php echo $base_path;?>service/store">クレジットカード決済（早期）＜店舗＞</a></li>
      <li id="store_merit" class="level2"><a href="<?php echo $base_path;?>service/store_merit">特徴・メリット</a></li>
      <li id="store_service" class="level2"><a href="<?php echo $base_path;?>service/store_service">サービスの仕組み</a></li>
      <li id="store_flow" class="level2"><a href="<?php echo $base_path;?>service/store_flow">導入までの流れ</a></li>
      <li id="store_faq" class="level2"><a href="<?php echo $base_path;?>service/store_faq">FAQ</a></li>          
      
      <li id="web" class="web level1"><a href="<?php echo $base_path;?>service/web">クレジットカード決済（早期）＜WEB＞</a></li>
      <li id="web_merit" class="web level2"><a href="<?php echo $base_path;?>service/web_merit">特徴・メリット</a></li>
      <li id="web_service" class="web level2"><a href="<?php echo $base_path;?>service/web_service">サービスの仕組み</a></li>
      <li id="web_flow" class="web level2"><a href="<?php echo $base_path;?>service/web_flow">導入までの流れ</a></li>
      <li id="web_price" class="web level2"><a href="<?php echo $base_path;?>service/web_price">料金表</a></li>
      <li id="web_faq" class="web level2"><a href="<?php echo $base_path;?>service/web_faq">FAQ</a></li>          

      <li id="wechat" class="level1"><a href="<?php echo $base_path;?>service/wechat">WeChat決済</a></li>
      <li id="wechat_merit" class="level2"><a href="<?php echo $base_path;?>service/wechat_merit">特徴・メリット</a></li> 

      <li id="wechatad" class="level1"><a href="<?php echo $base_path;?>service/wechatad">WeChat広告<br/>プロモーション (公式アカウント作成)</a></li>
      <li id="wechatad_merit" class="level2"><a href="<?php echo $base_path;?>service/wechatad_merit">特徴・メリット</a></li>
    </ul>
  </div>

  <div class="col-sm-8">
    <div class="hidden_hr"></div>
