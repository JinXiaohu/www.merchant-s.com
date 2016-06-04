
<link href="<?php echo $cdn_path;?>css/cases.css" rel="stylesheet">

<h1>導入事例</h1>
<p>今日、さまざまなシチュエーションでクレジットカードを利用できるようになってきました。クレジットカードの利用率は10年前と比べ2倍に増えているものの、民間最終消費支出の20％にも満たない数字です。</p>
<p>クレジットカードの利用シーンが多様化し、消費者にとって利用しやすい環境を整えることが今後のテーマとなっております。</p>

<div id="main">
  <div class="sidebar sidebar-lg">
    <ul>
      <li class="level1 grid-4 active"><a href="<?php echo $base_path;?>cases/retail">小売</a></li>
      <li class="level1 grid-4"><a href="<?php echo $base_path;?>cases/catering">飲食</a></li>
      <li class="level1 grid-4"><a href="<?php echo $base_path;?>cases/beauty">美容</a></li>
      <li class="level1 grid-4"><a href="<?php echo $base_path;?>cases/automobile">自動車関連</a></li>
      <li class="level1 grid-4"><a href="<?php echo $base_path;?>cases/wechatpay">Wechat Pay</a></li>
    </ul>
  </div>

  <div class="rightbar">
    <div class="mb_separator div_hidden"></div>
    <h2>小売業</h2>
    <div class="row item">
      <div class="col_img">
        <img class="media-object img-responsive" src="<?php echo $cdn_path;?>images/cases/retail1.jpg">
      </div>
      <div class="col_txt">
        表参道で子供服を販売しており、年に数回大きな会場を借りて定期的にファミリーセールを開催しています。
      </div>
    </div>

    <div class="row item">
      <div class="col_txt">
        セールでは通常期よりお求めやすい価格になっているため、ご好評をいただいておりますが、唯一の悩みがお支払い時のクレジットカード決済です。
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
        これまでの手書き決済では時間がかかり、スマートフォン決済では分割払いに対応できません。そんな中、プリンタ付モバイル端末に出会い両方の問題が解決できました。今では、ファミリーセールに欠かせない存在になっています。
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