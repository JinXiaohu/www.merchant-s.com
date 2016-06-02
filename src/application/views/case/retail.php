
<link href="<?php echo $cdn_path;?>css/cases.css" rel="stylesheet">

<h1>導入事例</h1>
<p>今日、さまざまなシチュエーションでクレジットカードは利用できるようになってきました。クレジットカードの利用率は10年前と比べ、2倍に増えているものの民間最終消費支出の20％にも満たない数字です。</p>

<p>クレジットカードの利用シーンが多様化し、消費者にとって利用しやすい環境を整えることが今後のテーマとなっております。</p>

<div id="main">
  <div class="sidebar sidebar-mb-float sidebar-lg">
    <ul>
      <li class="active"><a href="<?php echo $base_path;?>cases/retail"><strong>小売</strong></a></li>
      <li><a href="<?php echo $base_path;?>cases/catering"><strong>飲食</strong></a></li>
      <li><a href="<?php echo $base_path;?>cases/beauty"><strong>美容</strong></a></li>
      <li><a href="<?php echo $base_path;?>cases/automobile"><strong>自動車関連</strong></a></li>
      <li><a href="<?php echo $base_path;?>cases/wechatpay"><strong>Wechat Pay</strong></a></li>
    </ul>
  </div>

  <div class="rightbar">
    <h2>小売業</h2>
    <div class="row item">
      <div class="col_img">
        <img class="media-object img-responsive" src="<?php echo $cdn_path;?>images/cases/retail1.jpg">
      </div>
      <div class="col_txt">
        表参道で子供服を販売しており,年に数回大きな会場をお借りし定期的にファミリーセールを開催しています。
      </div>
    </div>

    <div class="row item">
      <div class="col_txt">
        セールでは、通常期よりお求めやすい価格になっているため、ご好評をいただいておりますが唯一の悩みがお支払い時のクレジットカード決済です。
      </div>
      <div class="col_img">
        <img class="media-object img-responsive" src="<?php echo $cdn_path;?>images/cases/retail2.jpg">
      </div>
    </div>

    <div class="row item">
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