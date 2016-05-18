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
  border-radius: 4px;
  padding: 3px 15px;
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
  padding:3px;
}
._td.item{
  width: 32%;
}
._td.separator{
  width: 2%;
}
@media (max-width: 767px){
  ._table,._tbody,._tr,._td{
    display: block;
  }
  ._td.item, ._td.separator{
    width: 100%;
  }
}

#examples .item{
  font-size: 1.3em;
  font-weight: bold;
  text-align: center;

  border: solid 1px #ccc;
  border-radius: 4px;
  margin-bottom: 16px;
  padding: 35px 10px;
}
h3{
  color: rgb(120, 120, 120);
  font-weight: bold;
  font-size: 1.2em;
}

#links{
  margin-bottom: 20px;
}
#links .item{
  padding-bottom: 10px;
}
@media (max-width: 767px){
  #links img{
    margin-left: auto;
    margin-right: auto;
  }
}


#news{
  margin-top: 0;
  margin-bottom: 10px;
}

#news h3{
  display: inline;
  padding: 5px 0;
}
.more_news{
  text-align: right;
  float: right;
}

.news_item_row{
  margin-left: 0;
  margin-right: 0;
  border-top: dotted 1px rgb(220,220,220);
  padding-top: 10px;
  padding-bottom: 10px;
}
.news_title_col{
  padding-left: 0;
  padding-right: 15px;
  font-size: 1.1em;
}
.news_date_col{
  text-align: right;
  padding-right: 0;
  padding-left: 15px;
  margin-top: 0;
  color:rgb(120,120,120);
}
@media (max-width: 767px){
  .news_date_col{
    text-align: left;
    padding-left: 0;
    margin-top: 5px;
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

<h3></h3>
<div class="_table" id="solutions">
  <div class="_tbody">
    <div class="_tr">
      <div class="_td item">
          <h4><a href="<?php echo $base_path;?>service/store">早期決済サービス</a></h4>
          <p class="p-body">『早期決済サービス』はクレジット加盟店向け決済代行サービスです。業界最速クラスの決済スピードで貴店のキャッシュフローをサポートいたします。
          </p>
      </div>
      
      <div class="_td separator"></div>

      <div class="_td item">
          <h4><a href="<?php echo $base_path;?>service/wechat">WeChat決済</a></h4>
          <p class="p-body">WeChat決済は中国人観光客に向けた独自の決済手段で、マーチャント・サポートは日本の公式パートナーとして貴店をお手伝いいたします。
          </p>
      </div>
      
      <div class="_td separator"></div>

      <div class="_td item">
          <h4><a href="<?php echo $base_path;?>pos">PAX社独自端末機</a></h4>
          <p class="p-body">世界第3位のシェア率を誇るPAX社のクレジット端末機です。独自の仕入れルートを持つマーチャント・サポートは貴店のニーズにお応えいたします。
          </p>    
      </div>

    </div>
  </div>
</div>

<h3>導入事例</h3>
<div class="row" id="examples">
  <div class="col-xs-6">
    <a href="<?php echo $base_path;?>cases/retail"><div class="item">小売業</div></a>
  </div>
  <div class="col-xs-6">
    <a href="<?php echo $base_path;?>cases/catering"><div class="item">飲食業</div></a>
  </div>
  <div class="col-xs-6">
    <a href="<?php echo $base_path;?>cases/beauty"><div class="item">美容業</div></a>
  </div>
  <div class="col-xs-6">
    <a href="<?php echo $base_path;?>cases/automobile"><div class="item">自動車業</div></a>
  </div>
</div>


<h3></h3>
<div class="row">
  <div class="col-sm-3" id="links">
    <div class="item"><a href="<?php echo $base_path;?>contact_participating"><img class="img-responsive" src="<?php echo $cdn_path;?>images/participation.gif"></a></div>
    <div class="item"><a href="<?php echo $base_path;?>contact"><img class="img-responsive" src="<?php echo $cdn_path;?>images/contact.gif"></a></div>
    <div class="item"><a href="http://www.mscc.co.jp/"><img class="img-responsive" src="<?php echo $cdn_path;?>images/mscc.gif"></a></div>
  </div>
  
  <div class="col-sm-9">
    <!-- news -->
    <div id="news">
      <h3>新着情報</h3>
      <span class="more_news"><a href="<?php echo $base_path;?>news" title="more news">more</a></span>
    </div>
   
    <?php foreach ($news_data as $news_item):?>  
    <div class="row news_item_row">
      <div class="col-sm-9 news_title_col">
        <a href="<?php echo $base_path;?>news/show?id=<?php echo $news_item->id; ?>" target="_blank"><?php echo $news_item->title; ?></a>
      </div>
      <div class="col-sm-3 news_date_col"><?php echo $news_item->date; ?></div>
    </div>
    <?php endforeach;?> 
  
  </div>
  
</div>


<script type="text/javascript">
$(document).ready(function(){
  $('.carousel').carousel();
});
</script>
