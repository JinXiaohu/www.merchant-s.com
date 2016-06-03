
<link href="<?php echo $cdn_path;?>css/cases.css" rel="stylesheet">

<h1>導入事例</h1>
<p>今日、さまざまなシチュエーションでクレジットカードは利用できるようになってきました。クレジットカードの利用率は10年前と比べ、2倍に増えているものの民間最終消費支出の20％にも満たない数字です。</p>

<p>クレジットカードの利用シーンが多様化し、消費者にとって利用しやすい環境を整えることが今後のテーマとなっております。</p>

<div id="main">
  <div class="sidebar sidebar-lg">
    <ul>
      <li class="level1 grid-4"><a href="<?php echo $base_path;?>cases/retail">小売</a></li>
      <li class="level1 grid-4"><a href="<?php echo $base_path;?>cases/catering">飲食</a></li>
      <li class="level1 grid-4"><a href="<?php echo $base_path;?>cases/beauty">美容</a></li>
      <li class="level1 grid-4"><a href="<?php echo $base_path;?>cases/automobile">自動車関連</a></li>
      <li class="level1 grid-4 active"><a href="<?php echo $base_path;?>cases/wechatpay">Wechat Pay</a></li>
    </ul>
  </div>

  <div class="rightbar">
    <div class="mb_separator div_hidden"></div>
    <h2>WeChat Pay</h2>
    <div class="row item">
      <div class="col_img">
        <img class="media-object img-responsive" src="<?php echo $cdn_path;?>images/cases/wechat1.jpg">
      </div>
      <div class="col_txt">
        渋谷で営業しているブランド品リサイクルショップです。<br />
        2013年ころから中国人の来店が非常に増えたてきたため、銀聯カードの取り扱いを始めました。銀聯カードの利用者は年々増えており、売上の一翼を担う割合になっております。
      </div>
    </div>

    <div class="row item">
      <div class="col_txt">
        今日、「爆買いだ」「爆買いは一次的なものだ」などと騒がれていますが、現に中国からのお客様は店舗、強いては日本の経済を動かし続けているのは事実であり、継続的な来日を望むからには、来日しやすい環境を整えることは企業の役目だと思っております。
      </div>
      <div class="col_img">
        <img class="media-object img-responsive" src="<?php echo $cdn_path;?>images/cases/wechat2.jpg">
      </div>
    </div>

    <div class="row item">
      <div class="col_img">
        <img class="media-object img-responsive" src="<?php echo $cdn_path;?>images/cases/wechat3.jpg">
      </div>
      <div class="col_txt">
        そんなおり、クレジットカード決済を依頼しているマーチャント・サポートから「WeChat Pay」の話を聞き、導入を決意しました。まだまだ利用可能店舗が少ない日本では珍しいのか、店頭に貼ってあるステッカーを見て入店していただけることも出てきています。
      </div>
    </div>

    <div class="row item">
      <div class="col_img">
        銀聯カードのように日本で利用できるのが当たり前という認識を中国人観光客に持ってもらうことができれば、まだまだ市場は拡大する認識を持てましたし、周りの店舗さんでも導入が進むことを望みます。
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