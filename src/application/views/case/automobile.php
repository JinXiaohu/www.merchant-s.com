
<link href="<?php echo $cdn_path;?>css/cases.css" rel="stylesheet">

<h1>導入事例</h1>
<p>
今日、さまざまなシチュエーションでクレジットカードは利用できるようになってきました。クレジットカードの利用率は10年前と比べ、2倍に増えているものの民間最終消費支出の20％にも満たない数字です。<br/>
クレジットカードの利用シーンが多様化し、消費者にとって利用しやすい環境を整えることが今後のテーマとなっております。
</p>

<div id="main">
  <div class="sidebar sidebar-mb-float">
    <ul>
      <li><a href="<?php echo $base_path;?>cases/retail"><strong>小売</strong></a></li>
      <li><a href="<?php echo $base_path;?>cases/catering"><strong>飲食</strong></a></li>
      <li><a href="<?php echo $base_path;?>cases/beauty"><strong>美容</strong></a></li>
      <li class="active"><a href="<?php echo $base_path;?>cases/automobile"><strong>自動車関連</strong></a></li>
      <li><a href="<?php echo $base_path;?>cases/wechatpay"><strong>Wechat Pay</strong></a></li>
    </ul>
  </div>

  <div class="rightbar">
    <h2>自動車関連業</h2>

    <div class="row item">
      <div class="col_img">
        <img class="media-object img-responsive" src="<?php echo $cdn_path;?>images/cases/automobile1.jpg">
      </div>
      <div class="col_txt">

        自動車の整備や修理は、一回の決済金額が高額になりカード決済で分割払いを希望されるお客さまも多数いらっしゃいます。
      </div>
    </div>

    <div class="row item">
      <div class="col_txt">

        当社ではメンテナンスが完了するとお客さまのご自宅まで納車に伺うケースが多く、インプリンターで手書き伝票を使用しておりましたがミスも多くお客さまをおませたせることも多かったです。
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

        そんな中、プンリンタ一体型のモバイル端末を導入したことで結果お客様をお待たせするお時間やスタッフの手間も省くことができ非常に助かっております。
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