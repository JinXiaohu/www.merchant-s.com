
<style type="text/css">
@media (max-width: 350px){
  ._table,._tbody,._tr,._td{
    display: block;
  }
}
#item2 .img_title{
  color: #339933;
  font-size: 1.3em;
  font-weight: bold;
  text-align: center;
  margin-top: 15px;
  margin-bottom: 15px;
}
@media (max-width: 767px){
  #item2 .col-sm-6{
    margin-bottom: 30px;
  }
}
.service_feature .title .details {
  width: 130px;
}
</style>


<div id="main">
  <div class="sidebar sidebar-lg">
    <ul>
      <li class="level1 grid-12 active"><a href="<?php echo $base_path;?>terminal">クレジットカード端末</a></li>
      <li class="level2 grid-6"><a href="<?php echo $base_path;?>terminal/s80">PAX S80</a></li>
      <li class="level2 grid-6"><a href="<?php echo $base_path;?>terminal/s90">PAX S90</a></li>
         
      <div class="li_sep hidden"></div>   

      <li class="level1 grid-12 hidden"><a href="<?php echo $base_path;?>terminal/business_center">センター事業</a></li>
    </ul>
  </div>

  <div class="rightbar">
    <div class="mb_separator div_hidden"></div>
    <h1><img src="<?php echo $cdn_path;?>images/banner3.jpg"></h1>
    <h1>PAX Global社製端末</h1>
    
    <p>当社の系列会社であるPAXGlobal社は、クレジットカード読み取り端末のシェアが世界3位のメーカーで、世界約40カ国に向けて累計150万台以上の販売実績を達成いたしました。</p>

    <h2>サービスの特徴</h2>

    <div class="service_feature">
      <div class="title _table">
        <div class="_tbody">
          <div class="_tr">
            <div class="text _td">その1．業界最低水準の手数料を実現</div>
            <div class="details _td"><a href="<?php echo $base_path;?>terminal/s80">詳細はこちら（S80）</a></div>
          </div>
        </div>
      </div>

      <div>
      累計150万台以上の販売実績を背景に、大量生産による低コスト化を
      実現しております。そのため、加盟店様がご負担される手数料に還元し、
      業界最低水準の手数料で店舗様のスマート経営をお手伝いさせていただきます。
      </div>
    </div>

    <div class="service_feature" id="item2">
      <div class="title _table">
        <div class="_tbody">
          <div class="_tr">
            <div class="text _td">その2．スピーディーな保守対応</div>
            <div class="details _td"><a href="<?php echo $base_path;?>terminal/s90">詳細はこちら（S90）</a></div>
          </div>
        </div>
      </div>

      <div>当社独自端末のため、最短でご依頼いただいた当日に、代替端末の出荷が可能。端末故障後の対応は、お任せください。</div>

      <div class="row">
        <div class="col-sm-6">
          <div class="img_title">S80 CounterTop</div>
          <img class="img-responsive center-block" src="<?php echo $cdn_path;?>images/terminal/index1.jpg">
        </div>

        <div class="col-sm-6">
          <div class="img_title">S90 Mobile</div>
          <img class="img-responsive center-block" src="<?php echo $cdn_path;?>images/terminal/index2.jpg">
        </div>

      </div>
    </div>


  </div>
</div>
