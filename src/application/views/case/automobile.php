<style type="text/css">
#cases{
  margin-top: 20px;
}
.sidebar ul{
  list-style: none;
  padding-left: 0;
}
.sidebar li{
  padding: 11px 14px;
}
.sidebar li:hover{
  background-color: #f8f8f8;
}
.sidebar li.active{
  background-color: #339933;
}
.sidebar .active:hover{
  background-color: #339933;
}
.sidebar .active a{
  color: white;
}
h2{
  margin-top: 0 !important;
}
.row{
  margin-bottom: 30px;
}
.col_img, .col_txt{
  display: inline-block;
  vertical-align: middle;
  padding-left: 8px;
  padding-right: 8px;
}
.col_img{
  width: 49.5%;
}
.col_txt{
  width: 49.5%;
}

@media (max-width: 767px){
  .sidebar li{
    display: inline;
    margin-right: 10px;
  }
  .sidebar ul{
    margin-bottom: 20px;
  }
}
@media (max-width: 420px){
  .sidebar li{
    display: inline;
    margin-right: 0;
  }
  .col_img, .col_txt{
    display: block;
    width: 100%;
  }
}
@media (min-width: 768px){
  .sidebar{
    border-right: solid 1px #e5e5e5;
  }
  .col_img{
    width: 70%;
  }
  .col_txt{
    width: 29%;
  }
}
</style>
  
<h1>導入事例</h1>
<p>
今日、さまざまなシチュエーションでクレジットカードは利用できるようになってきました。クレジットカードの利用率は10年前と比べ、2倍に増えているものの民間最終消費支出の20％にも満たない数字です。<br/>
クレジットカードの利用シーンが多様化し、消費者にとって利用しやすい環境を整えることが今後のテーマとなっております。
</p>

<div class="row" id="cases">
  <div class="col-sm-3 sidebar">
    <ul>
      <li><a href="<?php echo $base_path;?>cases/retail"><strong>小売</strong></a></li>
      <li><a href="<?php echo $base_path;?>cases/catering"><strong>飲食</strong></a></li>
      <li><a href="<?php echo $base_path;?>cases/beauty"><strong>美容</strong></a></li>
      <li class="active"><a href="<?php echo $base_path;?>cases/automobile"><strong>自動車関連</strong></a></li>
    </ul>
  </div>

  <div class="col-sm-9">
    <h2>自動車関連業</h2>

    <div class="row">
      <div class="col_img">
        <img class="media-object img-responsive" src="<?php echo $cdn_path;?>images/cases/automobile1.jpg">
      </div>
      <div class="col_txt">
        自動車の整備や修理は、一回の決済金額が高額になりカード決済で分割払いを希望されるお客さまも多数いらっしゃいます。
      </div>
    </div>

    <div class="row">
      <div class="col_txt">
        当社ではメンテナンスが完了するとお客さまのご自宅まで納車に伺うケースが多く、インプリンターで手書き伝票を使用しておりましたがミスも多くお客さまをおませたせることも多かったです。
      </div>
      <div class="col_img">
        <img class="media-object img-responsive" src="<?php echo $cdn_path;?>images/cases/automobile2.jpg">
      </div>
    </div>

    <div class="row">
      <div class="col_img">
        <img class="media-object img-responsive" src="<?php echo $cdn_path;?>images/cases/automobile3.jpg">
      </div>
      <div class="col_txt">
        そんな中、プンリンタ一体型のモバイル端末を導入したことで結果お客様をお待たせするお時間やスタッフの手間も省くことができ非常に助かっております。
      </div>
    </div>

  </div>
</div>

