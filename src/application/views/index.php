<style type="text/css">
.slide_txt{ 
  width: 100%; 
  float: left; 
  background: #0d132d;
}
.slide_txt span { 
  float: left; 
  margin-top: 25px; 
  font-size: 24px;
  width: 100%; 
  text-align: center; 
  display: block;
}
.slide_txt p{ 
  margin-bottom: 20px; 
  float: left; 
  margin-top: 20px; 
  width: 80%; 
  text-align: left; 
  display: block;
  line-height: 30px; 
}







#solutions .item {
  border: solid 1px #ccc;
  border-radius: 6px;
  padding: 10px 15px;
  margin-bottom: 10px;
}
#solutions .item h4 {
  text-align: center;
  font-size: 1.1em;
}
#solutions .item h4 a {
  font-weight: bold;
}
._table{
  display: table;
  width: 100%;
}
._tbody{
  display: table-row-group;
}
._tr{
  display: table-row;
}
._td{
  display: table-cell;
}
#solutions{
  margin-top: 20px;
}
#solutions .item{
  width: 32%;
}
#solutions .separator{
  width: 2%;
}
@media (max-width: 767px){
  ._table,._tbody,._tr,._td{
    display: block;
  }
  #solutions .item, #solutions .separator{
    width: 100%;
  }
  #solutions .item{
    border:none;
    border-top: solid 1px #ccc;
    border-radius: 0;
    margin-bottom: 0;
  }
}
@media (min-width: 768px){
  #solutions .item:hover{
   box-shadow: 0 15px 30px rgba(0,0,0,0.1);
   transform: translate3d(0, -2px, 0);
  }
}







._h3{
  color: rgb(120, 120, 120);
  font-size: 1.2em;
  font-weight: bold;
  margin-bottom: 5px;
}
#cases .col{
  margin-top: 8px;
  margin-bottom: 8px;
}
#cases img{
  border-radius: 6px;
  border:solid 1px rgb(150,150,150);
}
#cases img:hover{
  box-shadow: inset 0 0 0 1px #2996cc;
  box-shadow: 0 15px 30px rgba(0,0,0,0.1);
  transform: translate3d(0, -2px, 0);
}




.news_item{
  margin-left: 0;
  margin-right: 0;
  border-top: solid 1px rgb(220,220,220);
  padding-top: 10px;
  padding-bottom: 10px;
}
.col_title{
  padding-left: 0;
  font-size: 1.1em;
}
.col_date{
  text-align: right;
  padding-right: 0;
  padding-left: 15px;
  margin-top: 0;
  color:rgb(120,120,120);
}
@media (max-width: 767px){
  .col_title{
    padding-right: 0;
  }
  .col_date{
    text-align: left;
    padding-left: 0;
    margin-top: 5px;
  }
}
#links .item{
  padding-top: 5px;
  padding-bottom: 5px;
}
#links img{
  margin-right: 0;
  margin-left: auto;
}
@media (max-width: 767px){
  #links img{
    margin-left: auto;
    margin-right: auto;
  }
}



.div_separator{
  height: 1px;
  margin-top: 15px;
  margin-bottom: 15px;
}
@media (max-width: 767px){
  .div_separator{
    background-color: #f5f5f5;
    height: 15px;
    margin-left: -8px;
    margin-right: -8px;
    margin-top: 10px;
    margin-bottom: 10px;
  }
}
</style>

<!-- slide -->
<div class="carousel slide" id="carousel-857271">
  <ol class="carousel-indicators syeq">
    <li class="active" data-target="#carousel-857271" data-slide-to="0"></li>
    <li data-target="#carousel-857271" data-slide-to="1"></li>
    <li data-target="#carousel-857271" data-slide-to="2"></li>
  </ol>

  <div class="carousel-inner">
    <div class="item active">
      <a href="<?php echo $base_path;?>service/wechat"><img src="<?php echo $cdn_path;?>images/bg1.jpg"></a>
    </div>

    <div class="item">
      <a href="<?php echo $base_path;?>service/store"><img src="<?php echo $cdn_path;?>images/bg2.jpg"></a>
    </div>

    <div class="item">
      <a href="<?php echo $base_path;?>pos"><img src="<?php echo $cdn_path;?>images/bg3.jpg"></a>
    </div>

  </div>

  <a class="left carousel-control sysx" href="#carousel-857271" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
  </a>

  <a class="right carousel-control  sysx" href="#carousel-857271" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
  </a>

</div>

<div class="_table" id="solutions">
  <div class="_tbody">
    <div class="_tr">
      <div class="_td item">
        <h4><a href="<?php echo $base_path;?>service/store">早期決済サービス</a></h4>
        <p>『早期決済サービス』はクレジット加盟店向け決済代行サービスです。業界最速クラスの決済スピードで貴店のキャッシュフローをサポートいたします。
        </p>
      </div>
      
      <div class="_td separator"></div>

      <div class="_td item">
        <h4><a href="<?php echo $base_path;?>service/wechat">WeChat決済</a></h4>
        <p>WeChat決済は中国人観光客に向けた独自の決済手段で、マーチャント・サポートは日本の公式パートナーとして貴店をお手伝いいたします。
        </p>
      </div>
      
      <div class="_td separator"></div>

      <div class="_td item">
        <h4><a href="<?php echo $base_path;?>pos">PAX社独自端末機</a></h4>
        <p>世界第3位のシェア率を誇るPAX社のクレジット端末機です。独自の仕入れルートを持つマーチャント・サポートは貴店のニーズにお応えいたします。
        </p>    
      </div>

    </div>
  </div>
</div>

<div class="div_separator"></div>

<div class="_h3">導入事例</div>
<div class="row" id="cases">
  <div class="col-sm-6 col-md-4 col">
    <a href="<?php echo $base_path;?>cases/retail"><img class="img-responsive" src="<?php echo $cdn_path;?>images/case1.jpg"></a>
  </div>
  <div class="col-sm-6 col-md-4 col">
    <a href="<?php echo $base_path;?>cases/catering"><img class="img-responsive" src="<?php echo $cdn_path;?>images/case2.jpg"></a>
  </div>
  <div class="col-sm-6 col-md-4 col">
    <a href="<?php echo $base_path;?>cases/beauty"><img class="img-responsive" src="<?php echo $cdn_path;?>images/case3.jpg"></a>
  </div>
  <div class="col-sm-6 col-md-4 col">
    <a href="<?php echo $base_path;?>cases/automobile"><img class="img-responsive" src="<?php echo $cdn_path;?>images/case4.jpg"></a>
  </div>
</div>


<div class="div_separator"></div>

<div class="row">
  <div class="col-sm-8">
    <!-- news -->
    <a href="<?php echo $base_path; ?>news"><div class="_h3">新着情報</div></a>
   
    <?php foreach ($news_data as $news_item):?>  
    <div class="row news_item">
      <div class="col-sm-9 col_title">
        <a href="<?php echo $base_path;?>news/show?id=<?php echo $news_item->id; ?>" target="_blank"><?php echo $news_item->title; ?></a>
      </div>
      <div class="col-sm-3 col_date"><?php echo $news_item->date; ?></div>
    </div>
    <?php endforeach;?> 
  
    <div class="div_separator"></div>
  </div>

  <div class="col-sm-4" id="links">

    <div class="item"><a href="<?php echo $base_path;?>contact_participating"><img class="img-responsive" src="<?php echo $cdn_path;?>images/participation.gif"></a></div>
    <div class="item"><a href="<?php echo $base_path;?>contact"><img class="img-responsive" src="<?php echo $cdn_path;?>images/contact.gif"></a></div>
    <div class="item"><a href="http://www.mscc.co.jp/"><img class="img-responsive" src="<?php echo $cdn_path;?>images/mscc.gif"></a></div>
  </div>
</div>


<script type="text/javascript">
$(document).ready(function(){
  $('.carousel').carousel();
});
</script>
