<style type="text/css">
.gray_bg{
  background-color: rgb(250,250,250);
  padding: 20px 30px;
}
.gray_bg .title{
  text-align: center;
  font-size: 1.2em;
  font-weight: bold;
}
#table_wechat{
  width: 100%;
}
#table_wechat td{
  padding-top: 30px;
  padding-bottom: 10px;
  vertical-align: middle;
}
#table_wechat .td_left{
  width: 126px;
  padding-right: 30px;
}
#table_wechat .img_text{
  text-align: center;
  margin-top: 10px;
  font-weight: bold;
}
#table_wechat .td_right{
  line-height: 1.5;
}
#table_wechat .td_right ul{
  font-size: 1.1em;
  list-style: none;
  padding-left: 0;
}
#table_wechat .time{
  float: right;
  text-align: right;
  font-weight: normal;
  font-size: 0.8em;
  margin-top: 5px;
}
@media (max-width: 500px)
{
  .gray_bg{
    padding-left: 10px;
    padding-right: 10px;
  }
  #table_wechat .td_left{
    width: 100px;
    padding-right: 15px;
  }
  #table_wechat .td_right ul{
    font-size: 1em;
  }
}


#steps{
  margin-top: 20px;
}
#steps ._td{
  vertical-align: top;
}
#steps .item{
  width: 26.3%;
}
#steps .separator{
  width: 10%;
}
#steps .item_top, #steps .separator_top{
  height: 200px;
  margin-bottom: 15px;
}
#steps .item_top img{
  max-height: 100%;
  margin-left: auto;
  margin-right: auto;
}
#steps .separator_top{
  background: url(<?php echo $cdn_path;?>images/arrow.jpg) no-repeat center;
}

@media(max-width: 600px){
  ._table,._tbody,._tr,._td{
    display: block;
  }
  #steps .item{
    width: 80%;
    margin-bottom: 20px;
    margin-left: auto;
    margin-right: auto;
  }
  #steps .item_top{
    width: 100%;
    height: auto;
  }
  #steps .item_top img{
    max-width: 100%;
    height: auto;
  }
  #steps .separator{
    width: 100%;
  }
  #steps .separator_top{
    height: 70px;
    background: url(<?php echo $cdn_path;?>images/arrow2.jpg) no-repeat center;
  }
}
</style>

<h1><span class="vtitle">Wechat Pay</span><span>特徴・メリット</span></h1>

<a name="merit01" id="merit01"></a>
<h2>特徴1 中国人が日常的に利用している決済方法</h2>

<div class="gray_bg">
  <div class="title">中国国内データ</div>
  <table id="table_wechat">
    <tr>
      <td class="td_left">
        <img class="img-responsive center-block" src="<?php echo $cdn_path;?>images/wechat/wechat_logo.png">
        <div class="img_text">WeChat SNS</div>
      </td>
      <td class="td_right">
        <ul>
          <li>ユーザー数：約8億人</li>
          <li>アクティブユーザー数：約6.5億人</li>
          <li>1日の平均利用時間：約94分</li>
          <li>1日の平均起動回数：約11回<div class="time">（2016年3月時点）</div></li>
        </ul>
      </td>
    </tr>

    <tr>
      <td class="td_left">
        <img class="img-responsive center-block" src="<?php echo $cdn_path;?>images/wechat/wechat_pay_logo.png">
        <div class="img_text">WeChat Pay</div>
      </td>
      <td class="td_right">
        <ul>
          <li>WeChat Payユーザー数：約4億人</li>
          <li>導入店舗数：100万店舗以上</li>
          <li>決済回数：3,000万回/日</li>
          <li>決済額：1,000億円/日<div class="time">（2016年3月時点）</div></li>
        </ul>   
      </td>
    </tr>
  </table>

</div>

<p>
上記のデータからも分かるようにWeChat Payは中国国民にとって日常になっています。中国からの旅行者が非常に多くなっている今日、中国人客の取り込みは企業様にとって共通の課題ではないでしょうか。 WeChat Payを導入することで、
お客様にお買い物をしやすい環境を整えることは1つの施策と言えます。
</p>



<a name="merit02" id="merit02"></a>
<h2>特徴2 決済方法は非常にシンプル！数秒で決済が完了します</h2>

<div class="green_bg">
  <div class="green_text">わずか3つのステップで完了する非常に簡易な決済手段です。</div>
</div>

<p>
お客様がお持ちのスマートフォンに表示いただくQRコードをお店でご用意いただくiPadで読み込んでいただくだけで決済が完了します。  
</p>

<div class="_table" id="steps">
  <div class="_tbody">
    <div class="_tr">
      <div class="_td item">
        <div class="item_top">
          <img class="center-block" src="<?php echo $cdn_path;?>images/wechat/merit1.jpg">
        </div>
        <div>
          <div><strong>【店舗】</strong></div>
          <div>決済アプリを起動し、取引金額を入力</div>
        </div>
      </div>
      
      <div class="_td separator">
        <div class="separator_top">
        </div>
      </div>

      <div class="_td item">
        <div class="item_top">
          <img class="center-block" src="<?php echo $cdn_path;?>images/wechat/merit2.jpg">
        </div>
        <div>
          <div><strong>【お客様】</strong></div>
          <div>金額確認後、スマホにて、自身専用のWeChat決済の「QRコード」を表示</div>
        </div>
      </div>
      
      <div class="_td separator">
        <div class="separator_top">
        </div>
      </div>


      <div class="_td item">
        <div class="item_top">
          <img class="center-block" src="<?php echo $cdn_path;?>images/wechat/merit3.jpg">
        </div>
        <div>
          <div><strong>【店舗】</strong></div>
          <div>お客様のQRコードをスキャンし決済完了。WeChat→決済代行会社を通じて、資金回収</div>
        </div>
      </div>

    </div>
  </div>
</div>



<a name="merit03" id="merit03"></a>
<h2>特徴3 簡単手続きで手軽に導入</h2>
<p>
お申込に関しては当社に用紙を提出いただくだけで完了です。
手続きをワンストップでできる上に、費用もかかりません。お気軽にお問い合わせください。
</p>
