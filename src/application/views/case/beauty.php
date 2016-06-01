
<link href="<?php echo $cdn_path;?>css/cases.css" rel="stylesheet">

<h1>導入事例</h1>
<p>
今日、さまざまなシチュエーションでクレジットカードは利用できるようになってきました。クレジットカードの利用率は10年前と比べ、2倍に増えているものの民間最終消費支出の20％にも満たない数字です。<br/>
クレジットカードの利用シーンが多様化し、消費者にとって利用しやすい環境を整えることが今後のテーマとなっております。
</p>

<div class="row" id="cases">
  <div class="col-sm-3 sidebar sidebar-mb-float">
    <ul>
      <li><a href="<?php echo $base_path;?>cases/retail"><strong>小売</strong></a></li>
      <li><a href="<?php echo $base_path;?>cases/catering"><strong>飲食</strong></a></li>
      <li class="active"><a href="<?php echo $base_path;?>cases/beauty"><strong>美容</strong></a></li>
      <li><a href="<?php echo $base_path;?>cases/automobile"><strong>自動車関連</strong></a></li>
      <li><a href="<?php echo $base_path;?>cases/wechatpay"><strong>Wechat Pay</strong></a></li>
    </ul>
  </div>

  <div class="col-sm-9">
    <h2>美容業</h2>

    <div class="row item">
      <div class="col_img">
        <img class="media-object img-responsive" src="<?php echo $cdn_path;?>images/cases/beauty1.jpg">
      </div>
      <div class="col_txt">
        最近は、スマートホンやPCからオンライン予約をしていただけるお客様が増えクレジットカード払いがあるかないかで店舗の集客が大きく変わってくると友人の美容院オーナーからマーチャント・サポートさんを紹介してもらい導入を決めました。
      </div>
    </div>

    <div class="row item">
      <div class="col_txt">
        クレジットカードが使えるようになったことで施術当日に追加でトリートメントやカラーを希望されるお客さまも増え好きなスタイルに合ったご提案できるようになりました。
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
        最近では、分割払いも対応ができるようにヘアケア商品をまとめ買いされる方もおられ導入して良かったと感じております。
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