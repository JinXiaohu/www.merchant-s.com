
<script src="<?php echo $cdn_path;?>js/bootstrap.min.js"></script>
<style type="text/css">
.carousel{
  margin-top: -10px;
}
@media (max-width: 767px){
  .carousel{
    margin-top: 0;
  }
}
.carousel-indicators {
    bottom: 10%;
}
.carousel-fade .carousel-inner .item {
  -webkit-transition-property: opacity;
  transition-property: opacity;
}
.carousel-fade .carousel-inner .item,
.carousel-fade .carousel-inner .active.left,
.carousel-fade .carousel-inner .active.right {
  opacity: 0;
}
.carousel-fade .carousel-inner .active,
.carousel-fade .carousel-inner .next.left,
.carousel-fade .carousel-inner .prev.right {
  opacity: 1;
}
.carousel-fade .carousel-inner .next,
.carousel-fade .carousel-inner .prev,
.carousel-fade .carousel-inner .active.left,
.carousel-fade .carousel-inner .active.right {
  left: 0;
  -webkit-transform: translate3d(0, 0, 0);
          transform: translate3d(0, 0, 0);
}
.carousel-fade .carousel-control {
  z-index: 2;
}



._td{
  vertical-align: middle;
}

#solutions ._td {
  vertical-align: top;
}
#solutions .item {
  padding: 10px 15px;
  margin-bottom: 10px;
  background-color: #fafafa;
}

#solutions #s_item1{
  border-top: solid 1px #3FA3D1;
  border-top: solid 1px #5E8A8B;
}
#solutions #s_item1 a{
  color: #3FA3D1;
  color: #5E8A8B;

}

#solutions #s_item2{
  border-top: solid 1px #339933;
}
#solutions #s_item2 a{
  color: #339933;
}

#solutions #s_item3{
  border-top: solid 1px #6D4780;
  border-top: solid 1px #4A748A;
}
#solutions #s_item3 a{
  color: #6D4780;
  color: #4A748A;

}

#solutions .item h4 {
  text-align: center;
  font-size: 1.1em;
}
#solutions .item h4 a {
  font-weight: bold;
}

#solutions{
  margin-top: 25px;
}
#solutions .item{
  width: 32%;
}
#solutions .separator{
  width: 2%;
}
#solutions .item:hover{
 box-shadow: 0 15px 30px rgba(0,0,0,0.1);
 transform: translate3d(0, -2px, 0);
}
@media (max-width: 767px){
  #solutions ._table, #solutions ._tbody, #solutions ._tr, #solutions ._td{
    display: block;
  }
  #solutions .item, #solutions .separator{
    width: 100%;
  }
  #solutions .item{
    border-radius: 0;
    margin-bottom: 0;
  }
}

._h1{
  color: #333;
  font-size: 1.3em;
  font-weight: bold;
  margin-bottom: 5px;
}
#cases .col{
  margin-top: 8px;
  margin-bottom: 8px;
}
#cases img{
  border-radius: 6px;
  border: solid 1px #795548;
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
  color:rgb(150,150,150);
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




#links{
  width:340px;
  padding-left: 18px;
}
@media (max-width: 767px){
  #news_links ._table, #news_links ._tbody, #news_links ._tr, #news_links ._td{
    display: block;
  }
  #links{
    padding-left: 0;
    width: 100%;
    margin-left: auto;
    margin-right: auto;
    max-width: 340px;
  }
}

.link{
  margin-top: 10px;
}
.link:hover{
  box-shadow: inset 0 0 0 1px #2996cc;
  box-shadow: 0 15px 30px rgba(0,0,0,0.1);
  transform: translate3d(0, -2px, 0);
}
.link a:hover, .link a:focus{
  text-decoration: none;
}

.link .media{
  border: solid 1px rgb(180,180,180);
  border-radius: 8px;
  background-color: #EFEFEF;
}
.link .media .media-left{
  padding-right: 0;
  border-right: solid 1px rgb(180,180,180);
}
.link .media .media-body{
  padding: 5px 13px;
}
.link .title{
  font-size: 1em;
  font-weight: bold;
  color:black;
  padding-bottom: 5px;
}
.link .vtitle{
  font-size: 0.9em;
  color:#666666;
  text-align: right;
}
</style>

<div id="carousel-id" class="carousel slide carousel-fade" data-ride="carousel">
  <ol class="carousel-indicators syeq">
    <li class="active" data-target="#carousel-id" data-slide-to="0"></li>
    <li data-target="#carousel-id" data-slide-to="1"></li>
    <li data-target="#carousel-id" data-slide-to="2"></li>
  </ol>

  <div class="carousel-inner">
    <div class="item active">
      <a href="<?php echo $base_path;?>service/store"><img src="<?php echo $cdn_path;?>images/banner1.jpg"></a>
    </div>

    <div class="item">
      <a href="<?php echo $base_path;?>service/wechat"><img src="<?php echo $cdn_path;?>images/banner2.jpg"></a>
    </div>

    <div class="item">
      <a href="<?php echo $base_path;?>terminal"><img src="<?php echo $cdn_path;?>images/banner3.jpg"></a>
    </div>

  </div>

  <a class="left carousel-control sysx" href="#carousel-id" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
  </a>

  <a class="right carousel-control  sysx" href="#carousel-id" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
  </a>

</div>


<div class="_table" id="solutions">
  <div class="_tbody">
    <div class="_tr">
      <div class="_td item" id="s_item1">
        <h4><a href="<?php echo $base_path;?>service/store">早期決済サービス</a></h4>
        <p>『早期決済サービス』はクレジット加盟店向け決済代行サービスです。業界最速クラスの決済スピードで貴店のキャッシュフローをサポートいたします。
        </p>
      </div>
      
      <div class="_td separator"></div>

      <div class="_td item" id="s_item2">
        <h4><a href="<?php echo $base_path;?>service/wechat">WeChat決済</a></h4>
        <p>WeChat決済は中国人観光客に向けた独自の決済手段で、マーチャント・サポートは日本の公式パートナーとして貴店をお手伝いいたします。
        </p>
      </div>
      
      <div class="_td separator"></div>

      <div class="_td item" id="s_item3">
        <h4><a href="<?php echo $base_path;?>terminal">PAX社独自端末機</a></h4>
        <p>世界第3位のシェア率を誇るPAX社のクレジット端末機です。独自の仕入れルートを持つマーチャント・サポートは貴店のニーズにお応えいたします。
        </p>    
      </div>

    </div>
  </div>
</div>

<div class="div_separator mb_separator"></div>

<div class="_h1">導入事例</div>
<div class="row" id="cases">
  <div class="col-xs-6 col-md-4 col">
    <a href="<?php echo $base_path;?>cases/retail"><img class="img-responsive" src="<?php echo $cdn_path;?>images/case1.jpg"></a>
  </div>
  <div class="col-xs-6 col-md-4 col">
    <a href="<?php echo $base_path;?>cases/catering"><img class="img-responsive" src="<?php echo $cdn_path;?>images/case2.jpg"></a>
  </div>
  <div class="col-xs-6 col-md-4 col">
    <a href="<?php echo $base_path;?>cases/beauty"><img class="img-responsive" src="<?php echo $cdn_path;?>images/case3.jpg"></a>
  </div>
  <div class="col-xs-6 col-md-4 col">
    <a href="<?php echo $base_path;?>cases/automobile"><img class="img-responsive" src="<?php echo $cdn_path;?>images/case4.jpg"></a>
  </div>
  <div class="col-xs-6 col-md-4 col">
    <a href="<?php echo $base_path;?>cases/wechatpay"><img class="img-responsive" src="<?php echo $cdn_path;?>images/case5.jpg"></a>
  </div>
</div>


<div class="div_separator mb_separator"></div>

<div class="_table" id="news_links">
  <div class="_tbody">
    <div class="_tr">
      <div class="_td">
        <!-- news -->
        <a href="<?php echo $base_path; ?>news"><div class="_h1">新着情報</div></a>
       
        <?php foreach ($news_data as $news_item):?>  
        <div class="row news_item">
          <div class="col-sm-9 col_title">
            <a href="<?php echo $base_path;?>news/show?id=<?php echo $news_item->id; ?>" target="_blank"><?php echo $news_item->title; ?></a>
          </div>
          <div class="col-sm-3 col_date"><?php echo $news_item->date; ?></div>
        </div>
        <?php endforeach;?>       
        <div class="div_hidden mb_separator"></div>
      </div>


      <div class="_td" id="links">
        <div class="link">
          <a href="<?php echo $base_path;?>contact/info_changing">
            <div class="media">
              <div class="media-left media-middle">
                <img class="hisun_logo" src="<?php echo $cdn_path;?>images/icon1.jpg">
              </div>
              <div class="media-body media-middle">
                <div class="title">加盟店のみなさまへ</div>
                <div class="vtitle">各種変更手続き</div>
              </div>
            </div>
          </a>
        </div>

        <div class="link">
          <a href="<?php echo $base_path;?>contact">
            <div class="media">
              <div class="media-left media-middle">
                <img class="hisun_logo" src="<?php echo $cdn_path;?>images/icon2.jpg">
              </div>
              <div class="media-body media-middle">
                <div class="title">資料を請求する</div>
                <div class="vtitle">資料のご請求はこちらから</div>
              </div>
            </div>
          </a>
        </div>

        <div class="link">
          <a href="http://www.mscc.co.jp">
            <div class="media">
              <div class="media-left media-middle">
                <img class="hisun_logo" src="<?php echo $cdn_path;?>images/icon3.jpg">
              </div>
              <div class="media-body media-middle">
                <div class="title">MSカークレジット株式会社</div>
                <div class="vtitle">自動車整備業界決済代行サービス</div>
              </div>
            </div>
          </a>
        </div>

      </div>

    </div>
  </div>
</div>




<script type="text/javascript">
$(document).ready(function(){
  $('.carousel').carousel();
});
</script>
