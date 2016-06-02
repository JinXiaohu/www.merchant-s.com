
<link href="<?php echo $cdn_path;?>css/cases.css" rel="stylesheet">

<h1>導入事例</h1>
<p>今日、さまざまなシチュエーションでクレジットカードは利用できるようになってきました。クレジットカードの利用率は10年前と比べ、2倍に増えているものの民間最終消費支出の20％にも満たない数字です。</p>

<p>クレジットカードの利用シーンが多様化し、消費者にとって利用しやすい環境を整えることが今後のテーマとなっております。</p>

<div id="main">
  <div class="sidebar sidebar-mb-float sidebar-lg">
    <ul>
      <li><a href="<?php echo $base_path;?>cases/retail"><strong>小売</strong></a></li>
      <li class="active"><a href="<?php echo $base_path;?>cases/catering"><strong>飲食</strong></a></li>
      <li><a href="<?php echo $base_path;?>cases/beauty"><strong>美容</strong></a></li>
      <li><a href="<?php echo $base_path;?>cases/automobile"><strong>自動車関連</strong></a></li>
      <li><a href="<?php echo $base_path;?>cases/wechatpay"><strong>Wechat Pay</strong></a></li>
    </ul>
  </div>

  <div class="rightbar">
    <h2>飲食業</h2>

    <div class="row item">
      <div class="col_img">
        <img class="media-object img-responsive" src="<?php echo $cdn_path;?>images/cases/catering1.jpg">
      </div>
      <div class="col_txt">
        当店は、ビジネス街にお店を構えているため会社関係の宴会や接待でご利用いただくことが非常に多く、そのほとんどがクレジットカードでのお支払いです。最近では、お勤めされている会社のコーポレートカードをご利用いただく頻度も増えてきており現金でのお支払いがほとんどない日もございます。
      </div>
    </div>

    <div class="row item">
      <div class="col_txt">
        月末は、お客様も多く嬉しい限りですがそれとは逆にレジの中の現金が乏しくなります。。創業時から毎日築地に足を運び活きのいい新鮮な食材をお客様に提供することが当店のモットーですが仕入れは全て現金払いのため、
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
        現在利用している「3日後決済」は非常に心強い味方です。今日も資金繰りを気にすることなくお客様へ最高の食材で「おもてなし」させていただきます。
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