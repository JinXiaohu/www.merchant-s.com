<style type="text/css">
#cases{
  margin-top: 20px;
}
.sidebar ul{
  list-style: none;
  padding-left: 0;
}
.sidebar{
  border-right: solid 1px #e5e5e5;
}
.sidebar li{
  padding: 11px 14px;
}
.sidebar li:hover{
  background-color: #D9F2D9;
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
  width: 49.5%;
}
.col_txt{
  width: 49.5%;
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
}
@media (min-width: 768px){
  .sidebar{
    border-right: solid 1px #e5e5e5;
  }
  .col_img{
    width: 70%;
  }
  .col_txt{
    width: 29%;
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
      <li><a href="<?php echo $base_path;?>cases/retail"><strong>小売</strong></a></li>
      <li class="active"><a href="<?php echo $base_path;?>cases/catering"><strong>飲食</strong></a></li>
      <li><a href="<?php echo $base_path;?>cases/beauty"><strong>美容</strong></a></li>
      <li><a href="<?php echo $base_path;?>cases/automobile"><strong>自動車関連</strong></a></li>
    </ul>
  </div>

  <div class="col-sm-9">
    <h2>飲食業</h2>

    <div class="row">
      <div class="col_img">
        <img class="media-object img-responsive" src="<?php echo $cdn_path;?>images/cases/catering1.jpg">
      </div>
      <div class="col_txt">
        当店は、ビジネス街にお店を構えているため会社関係の宴会や接待でご利用いただくことが非常に多く、そのほとんどがクレジットカードでのお支払いです。最近では、お勤めされている会社のコーポレートカードをご利用いただく頻度も増えてきており現金でのお支払いがほとんどない日もございます。
      </div>
    </div>

    <div class="row">
      <div class="col_txt">
        月末は、お客様も多く嬉しい限りですがそれとは逆にレジの中の現金が乏しくなります。。創業時から毎日築地に足を運び活きのいい新鮮な食材をお客様に提供することが当店のモットーですが仕入れは全て現金払いのため、
      </div>
      <div class="col_img">
        <img class="media-object img-responsive" src="<?php echo $cdn_path;?>images/cases/catering2.jpg">
      </div>
    </div>

    <div class="row">
      <div class="col_img">
        <img class="media-object img-responsive" src="<?php echo $cdn_path;?>images/cases/catering3.jpg">
      </div>
      <div class="col_txt">
        現在利用している「3日後決済」は非常に心強い味方です。今日も資金繰りを気にすることなくお客様へ最高の食材で「おもてなし」させていただきます。
      </div>
    </div>

  </div>
</div>

