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



#solutions{
  margin-top: 10px;
}



#ecommerce, #store {
  border-width: 3px;
  border-style: solid;
  border-radius: 3px;
  padding: 9px;
  margin-bottom: 5px;
}

#ecommerce{
  border-color: #3FA3D1;
}

#store{
  border-color: #339933;
}

#ecommerce h4 a {
  color: #3FA3D1;
  font-weight: bold;
}

#store h4 a {
  color: #339933;
  font-weight: bold;
}

#ecommerce .p-body, #store .p-body {
  min-height: 5em;
}


#news{
  margin-top: 15px;
  margin-bottom: 10px;
}

#news_h4{
  padding: 5px 0;
  color: rgb(120, 120, 120);
  font-weight: bold;
  font-size: 1.2em;
}

.more_news{
  text-align: right;
  float: right;
}



.news_item_row{
  margin-left: 0;
  margin-right: 0;
  border-top-style: dotted;
  border-top-width: 1px;
  border-top-color: rgb(120,120,120);
  padding-top: 6px;
  padding-bottom: 6px;
}

.news_title_col{
  padding-left: 0;
  padding-right: 15px;
  font-size: 1.1em;
}

.news_date_col{
  text-align: left;
  padding-left: 0;
  padding-right: 15px;
  color:rgb(120,120,120);
}

@media (min-width: 768px){
  .news_date_col{
    text-align: right;
    padding-right: 0;
    padding-left: 15px;
  }  
}

</style>

  

  <!-- slide -->
  <div class="carousel slide" id="carousel-857271">
    <ol class="carousel-indicators syeq">
      <li class="active" data-target="#carousel-857271" data-slide-to="0"></li>
      <li data-target="#carousel-857271" data-slide-to="1"></li>
      <li data-target="#carousel-857271" data-slide-to="2"></li>
      <li data-target="#carousel-857271" data-slide-to="3"></li>
    </ol>

    <div class="carousel-inner">

      <div class="item active">
        <img alt="Carousel Bootstrap First" src="<?php echo $cdn_path;?>images/bg1.jpg">
      </div>


      <div class="item">
        <img alt="Carousel Bootstrap Second" src="<?php echo $cdn_path;?>images/bg2.jpg">
      </div>

      <div class="item">
        <img alt="Carousel Bootstrap Second" src="<?php echo $cdn_path;?>images/bg3.jpg">
      </div>

      <div class="item">
        <img alt="Carousel Bootstrap Second" src="<?php echo $cdn_path;?>images/bg4.jpg">
      </div>
    </div>

    <a class="left carousel-control sysx" href="#carousel-857271" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
    </a>

    <a class="right carousel-control  sysx" href="#carousel-857271" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
    </a>

  </div>

  <div class="row" id="solutions">
    <div class="col-md-6">
      <div id="ecommerce">
        <div class="media">
          <div class="media-left media-middle">
            <a href="#"><img class="media-object" src="<?php echo $cdn_path;?>images/ecommerce.png"></a>
          </div>

          <div class="media-body media-middle">
            <h4><a href="ecommerce">Eコマース向け早期決済サービス</a></h4>
            <p><strong>7日後決済</strong></p>
            <p class="p-body">最短7日後のクレジットカード決済を可能にしたEコマース向けオンライン決済代行システム。手続きも簡単で、ネットビジネスのチャンスが大きく広がります。
            </p>
          </div>
        </div>
      </div>
    </div>

    <div class="col-md-6">
      <div id="store">
        <div class="media">
          <div class="media-left media-middle">
            <a href="#"><img class="media-object" src="<?php echo $cdn_path;?>images/store.png"></a>
          </div>

          <div class="media-body media-middle">
            <h4><a href="store">店舗向け早期決済サービス</a></h4>
            <p><strong>3日後決済</strong></p>
            <p class="p-body">業界最速の3日後決済を実現したクレジットカード決済サービス。VISA、MasterCardによる安全・確実な決済システムにより、ビジネスチャンスを逃しません。
            </p>
          </div>
        </div>
      </div>
    </div>

  </div>

  <!-- news -->
  <div id="news">
    <span id="news_h4">新着情報</span>
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

