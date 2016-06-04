
<link href="<?php echo $cdn_path;?>css/cases.css" rel="stylesheet">

<h1>導入事例</h1>
<p>今日、さまざまなシチュエーションでクレジットカードを利用できるようになってきました。クレジットカードの利用率は10年前と比べ2倍に増えているものの、民間最終消費支出の20％にも満たない数字です。</p>
<p>クレジットカードの利用シーンが多様化し、消費者にとって利用しやすい環境を整えることが今後のテーマとなっております。</p>

<div id="main">
  <div class="sidebar sidebar-lg">
    <ul>
      <li class="level1 grid-4"><a href="<?php echo $base_path;?>cases/retail">小売</a></li>
      <li class="level1 grid-4"><a href="<?php echo $base_path;?>cases/catering">飲食</a></li>
      <li class="level1 grid-4 active"><a href="<?php echo $base_path;?>cases/beauty">美容</a></li>
      <li class="level1 grid-4"><a href="<?php echo $base_path;?>cases/automobile">自動車関連</a></li>
      <li class="level1 grid-4"><a href="<?php echo $base_path;?>cases/wechatpay">Wechat Pay</a></li>
    </ul>
  </div>

  <div class="rightbar">
    <div class="mb_separator div_hidden"></div>
    <h2>美容業</h2>

    <div class="row item">
      <div class="col_img">
        <img class="media-object img-responsive" src="<?php echo $cdn_path;?>images/cases/beauty1.jpg">
      </div>
      <div class="col_txt">
        最近はスマートフォンやPCからオンライン予約をしていただけるお客様が増え、クレジットカード払いが出来るかどうかで店舗の集客が大きく変わってくるという話を聞き、友人の美容院オーナーからマーチャント・サポートさんを紹介してもらい導入を決めました。
      </div>
    </div>

    <div class="row item">
      <div class="col_txt">
        クレジットカードが使えるようになったことで、施術当日に追加でトリートメントやカラーを希望されるお客様も増え、好きなスタイルに合ったご提案ができるようになりました。 
      </div>
      <div class="col_img">
        <img class="media-object img-responsive" src="<?php echo $cdn_path;?>images/cases/beauty2.jpg">
      </div>
    </div>

    <div class="row item">
      <div class="col_img">
        <img class="media-object img-responsive" src="<?php echo $cdn_path;?>images/cases/beauty3.jpg">
      </div>
      <div class="col_txt">
        分割払いも対応ができるようになったことでヘアケア商品をまとめ買いされるお客様もいらっしゃり、導入して良かったと感じております。
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