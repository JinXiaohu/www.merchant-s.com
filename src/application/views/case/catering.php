
<link href="<?php echo $cdn_path;?>css/cases.css" rel="stylesheet">

<h1>導入事例</h1>
<p>今日、さまざまなシチュエーションでクレジットカードを利用できるようになってきました。クレジットカードの利用率は10年前と比べ2倍に増えているものの、民間最終消費支出の20％にも満たない数字です。</p>
<p>クレジットカードの利用シーンが多様化し、消費者にとって利用しやすい環境を整えることが今後のテーマとなっております。</p>

<div id="main">
  <div class="sidebar sidebar-lg">
    <ul>
      <li class="level1 grid-4"><a href="<?php echo $base_path;?>cases/retail">小売</a></li>
      <li class="level1 grid-4 active"><a href="<?php echo $base_path;?>cases/catering">飲食</a></li>
      <li class="level1 grid-4"><a href="<?php echo $base_path;?>cases/beauty">美容</a></li>
      <li class="level1 grid-4"><a href="<?php echo $base_path;?>cases/automobile">自動車関連</a></li>
      <li class="level1 grid-4"><a href="<?php echo $base_path;?>cases/wechatpay">Wechat Pay</a></li>
    </ul>
  </div>

  <div class="rightbar">
    <div class="mb_separator div_hidden"></div>
    <h2>飲食業</h2>

    <div class="row item">
      <div class="col_img">
        <img class="media-object img-responsive" src="<?php echo $cdn_path;?>images/cases/catering1.jpg">
      </div>
      <div class="col_txt">
      当店では、ビジネス街にお店を構えているため、会社関係の宴会や接待でご利用いただくことが非常に多く、そのほとんどがクレジットカードでのお支払いです。お勤めされている会社のコーポレートカードをご利用いただく頻度も増えてきており、現金でのお支払いがほとんどない日もございます。
      </div>
    </div>

    <div class="row item">
      <div class="col_txt">
      月末はお客様も多く嬉しい限りですが、それとは逆にレジの中の現金が乏しくなりがちです。仕入れは全て現金払いのため、現在利用している「3日後決済」は非常に心強い味方です。
      </div>
      <div class="col_img">
        <img class="media-object img-responsive" src="<?php echo $cdn_path;?>images/cases/catering2.jpg">
      </div>
    </div>

    <div class="row item">
      <div class="col_img">
        <img class="media-object img-responsive" src="<?php echo $cdn_path;?>images/cases/catering3.jpg">
      </div>
      <div class="col_txt">
      創業時から毎日築地に足を運び活きのいい新鮮な食材をお客様に提供することがモットーとしている当店には最適のサービスと感じております。 資金繰りを気にすることなくお客様へ最高の食材で「おもてなし」をしております。
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