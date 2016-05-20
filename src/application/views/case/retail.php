<style type="text/css">

#cases{
  margin-top: 20px;
}
.sidebar{
  border-right: solid 1px #e5e5e5;
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
  width: 70%;
}
.col_txt{
  width: 29%;
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
  .col_txt{
    margin-top: 5px;
  }
  .sidebar{
    border-right: none;
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
      <li class="active"><a href="<?php echo $base_path;?>cases/retail"><strong>小売</strong></a></li>
      <li><a href="<?php echo $base_path;?>cases/catering"><strong>飲食</strong></a></li>
      <li><a href="<?php echo $base_path;?>cases/beauty"><strong>美容</strong></a></li>
      <li><a href="<?php echo $base_path;?>cases/automobile"><strong>自動車関連</strong></a></li>
    </ul>
  </div>

  <div class="col-sm-9">
    <h2>小売業</h2>
    <div class="row">
      <div class="col_img">
        <img class="media-object img-responsive" src="<?php echo $cdn_path;?>images/cases/retail1.jpg">
      </div>
      <div class="col_txt">
        表参道で子供服を販売しており,年に数回大きな会場をお借りし定期的にファミリーセールを開催しています。
      </div>
    </div>

    <div class="row">
      <div class="col_txt">
        セールでは、通常期よりお求めやすい価格になっているため、ご好評をいただいておりますが唯一の悩みがお支払い時のクレジットカード決済です。
      </div>
      <div class="col_img">
        <img class="media-object img-responsive" src="<?php echo $cdn_path;?>images/cases/retail2.jpg">
      </div>
    </div>

    <div class="row">
      <div class="col_img">
        <img class="media-object img-responsive" src="<?php echo $cdn_path;?>images/cases/retail3.jpg">
      </div>
      <div class="col_txt">
        これまでの手書き伝票では時間がかかり、スマートホン決済では分割払いに対応でできません。そんな中、プリンタ付モバイル端末に出会い両方の問題が解決でき今では、ファミリーセールに欠かせない存在になっています。
      </div>
    </div>

  </div>
</div>


<script type="text/javascript">
$(document).ready(function(){
  var txt = $('.col_txt:eq(1)');
  if(txt.css('display') == "block")
  {
    txt.insertAfter($('.col_img:eq(1)'));
  }
});
</script>