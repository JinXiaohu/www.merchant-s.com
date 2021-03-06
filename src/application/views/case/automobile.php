
<link href="<?php echo $cdn_path;?>css/cases.css" rel="stylesheet">

<h1>導入事例</h1>
<p>今日、さまざまなシチュエーションでクレジットカードを利用できるようになってきました。クレジットカードの利用率は10年前と比べ2倍に増えているものの、民間最終消費支出の20％にも満たない数字です。</p>
<p>クレジットカードの利用シーンが多様化し、消費者にとって利用しやすい環境を整えることが今後のテーマとなっております。</p>

<div id="main">
  <div class="sidebar sidebar-lg">
    <ul>
      <li class="level1 grid-4"><a href="<?php echo $base_path;?>cases/retail">小売</a></li>
      <li class="level1 grid-4"><a href="<?php echo $base_path;?>cases/catering">飲食</a></li>
      <li class="level1 grid-4"><a href="<?php echo $base_path;?>cases/beauty">美容</a></li>
      <li class="level1 grid-4 active"><a href="<?php echo $base_path;?>cases/automobile">自動車関連</a></li>
      <li class="level1 grid-4"><a href="<?php echo $base_path;?>cases/wechatpay">Wechat Pay</a></li>
    </ul>
  </div>

  <div class="rightbar">
    <div class="mb_separator div_hidden"></div>
    <h2>自動車関連業</h2>

    <div class="row item">
      <div class="col_img">
        <img class="media-object img-responsive" src="<?php echo $cdn_path;?>images/cases/automobile1.jpg">
      </div>
      <div class="col_txt">
        自動車の整備や修理は、一回の決済金額が高額になりカード決済で分割払いを希望されるお客様も多数いらっしゃいます。
      </div>
    </div>

    <div class="row item">
      <div class="col_txt">
        当社ではメンテナンスが完了するとお客様のご自宅まで納車に伺うケースが多くあります。これまではインプリンターで手書きの伝票を使用しておりましたがミスも多くお客様をお待たせすることも気がかりでした。
      </div>
      <div class="col_img">
        <img class="media-object img-responsive" src="<?php echo $cdn_path;?>images/cases/automobile2.jpg">
      </div>
    </div>

    <div class="row item">
      <div class="col_img">
        <img class="media-object img-responsive" src="<?php echo $cdn_path;?>images/cases/automobile3.jpg">
      </div>
      <div class="col_txt">
      プリンター一体型のモバイル端末を導入したことでお客様をお待たせするお時間やスタッフの手間も省くことができ非常に助かっております。
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