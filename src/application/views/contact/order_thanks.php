
<style type="text/css">
#sep{
	height: 30px;
}
#msg{
  font-size: 1.3em;
  font-weight: bold;
	margin-top: 20px;
	margin-bottom: 20px;
}
.div-tail{
	text-align: center;
	border: dotted 1px #ccc;
	border-radius: 6px;
	padding: 15px 20px;
	max-width: 400px;
}
.div-tail .title{
	font-size: 1.1em;
	font-weight: bold;
}
.div-tail .tel{
	font-size: 1.5em;
	font-weight: bold;
}
</style>

<div id="main">
  <div class="sidebar sidebar-lg">
    <ul>
      <li class="level1 grid-12"><a href="<?php echo $base_path;?>contact">ご加盟店様</a></li>
      <li class="level2 grid-4"><a href="<?php echo $base_path;?>contact/info_changing">各種変更</a></li>
      <li class="level2 grid-4 active"><a href="<?php echo $base_path;?>contact/order">ロール紙発注<span class="vtitle">（PAX社製端末）</span></a></li>
      <li class="level2 grid-4"><a href="<?php echo $base_path;?>contact/query">お問い合わせ</a></li>

      <div class="li_sep"></div>   

      <li class="level1 grid-12"><a href="<?php echo $base_path;?>contact/join">新規のお客様</a></li>
    </ul>
  </div>

  <div class="rightbar">   
    <div class="mb_separator div_hidden"></div>
    <h1><span class="vtitle">PAX端末　ご利用加盟店様</span><span>ロール紙発注フォーム</span></h1>

    <p>
    ご発注いただいてから、約1週間程度でご送付させていただきます。
    </p>
    
    <p>
    万が一のため、弊社でメール受信後に自動返信をさせていただいておりますが、返信メールが翌日にもない場合には、お電話にてお問い合わせ下さいますよう、宜しくお願い申し上げます。
    </p>

    <div id="sep"></div>

    <div class="green_bg">
      <div class="green_text">ご注文有難うございます。</div>
    </div>
    
    <div id="msg">送信完了いたしました。</div>

    <p>
    ロール紙発注フォームのご利用ありがとうございます。<br />
		入力頂いたメールアドレスに受付完了のメールを自動送信しています。
    </p>

    <p>
		お問い合わせ内容につきまして、弊社で確認を行いご指定の連絡方法にて回答いたしますので今しばらくお待ちください。
    </p>

    <div class="div-tail center-block">
			<p class="title">お電話でもお気軽にお問い合わせください。</p>
			<p class="tel">03-6279-0521</p>
			<div class="time">9：00AM～17：00PM（土・日・祝・年末年始休）</div>
    </div>

  </div>
</div>
