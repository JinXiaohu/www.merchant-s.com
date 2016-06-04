
<link href="<?php echo $cdn_path;?>css/form.css" rel="stylesheet">

<div id="main">
  <div class="sidebar sidebar-lg">
    <ul>
      <li class="level1 grid-12"><a href="<?php echo $base_path;?>contact">ご加盟店様</a></li>
      <li class="level2 grid-4 active"><a href="<?php echo $base_path;?>contact/info_changing">各種変更</a></li>
      <li class="level2 grid-4"><a href="<?php echo $base_path;?>contact/order">ロール紙発注<span class="vtitle">（PAX社製端末）</span></a></li>
      <li class="level2 grid-4"><a href="<?php echo $base_path;?>contact/query">お問い合わせ</a></li>

      <div class="li_sep"></div>   

      <li class="level1 grid-12"><a href="<?php echo $base_path;?>contact/join">新規のお客様</a></li>
    </ul>
  </div>

  <div class="rightbar">
    <div class="mb_separator div_hidden"></div>

    <h1><span class="vtitle">ご利用加盟店様</span><span>各種変更・解約手続き依頼フォーム</span></h1>
    
    <p>
    必要情報をご入力のうえ、送信ください。各種お手続きには、お届け用紙のご記入・ご捺印が必要となります。必要書類を送付させていただきますので、お受取り先住所のご入力をお願いいたします。書類の返送をいただき次第、弊社にて対応いたします。
    </p>

    <p class="smallText">
    ※当フォームでは変更完了となりません
    </p>

    <p>
    なお、変更手続きの内容によっては、<strong>「営業許可証」</strong>や<strong>「契約者身分証明書」</strong>のご提示をいただく場合がございますので、あらかじめご了承ください。
    </p>

    <p>
    万が一のため、弊社でメール受信後に自動返信をさせていただいておりますが、返信メールが翌日にもない場合には、お電話にてお問い合わせ下さいますよう、宜しくお願い申し上げます。
    </p>

    <p class="smallText">
    <br /><br />
    ※下記フォームへは変更前の情報を入力してください
    </p>

    <form method="post" action="" name="form1">

    <div class="_table" id="table1">

      <div class="_tr">
        <div class="_td td_label">[1]手続き内容を選択 <span class="required">（必須） </span></div>
        <div class="_td td_input"> 
          <div class="row">
            <div class="col-sm-6">
              <input type="radio" id="service_type" name="service_type" value="type_change_store" onchange="displayMode('type_change_store');"><span> 店舗情報変更</span>
            </div>
            <div class="col-sm-6">
              <input type="radio" id="service_type2" name="service_type" value="type_termination_request" onchange="displayMode('type_termination_request');"><span> 解約希望</span>
            </div>
          </div>

          <div>
            <input  type="radio" id="service_type3" name="service_type" value="type_change_contractore" onchange="displayMode('type_change_contractore');">
            <span>店舗契約者変更&nbsp;<span class="smallText">※営業者変更、営業（法人）譲渡、法人改組などが該当します。</span></span>
          </div>
        </div>
      </div>

      <div class="_tr">
        <div class="_td td_label">手続き内容詳細</div>
        <div class="_td td_input">
          <input type="text" name="detail" id="detail" placeholder="例）振込口座変更、店舗名変更etc">
        </div>
      </div>

      <div class="_tr">
        <div class="_td td_label">[2]加盟店ID<span class="required">（6桁）</span></div>
        <div class="_td td_input">
          <input type="text" name="branch_number" id="branch_number">
        </div>
      </div>

      <div class="_tr">
        <div class="_td td_label">[3]法人名<span class="required">（法人の場合必須）</span></div>
        <div class="_td td_input">
          <input type="text" name="company_name" id="company_name">
        </div>
      </div>

      <div class="_tr">
        <div class="_td td_label">[4]店舗名 <span class="required">（必須） </span></div>
        <div class="_td td_input">
          <input type="text" name="shop_name" id="shop_name">
        </div>
      </div>

      <div class="_tr">
        <div class="_td td_label">[5]代表者名 <span class="required">（必須） </span></div>
        <div class="_td td_input">
          <input type="text" name="represent_name" id="represent_name">
        </div>
      </div>

      <div class="_tr">
        <div class="_td td_label">[6]代表者フリガナ <span class="required">（必須） </span></div>
        <div class="_td td_input">
          <input type="text" name="represent_name_furigana" id="represent_name_furigana" >
        </div>
      </div>

      <div class="_tr">
        <div class="_td td_label">[7]ご担当者名</div>
        <div class="_td td_input">
          <input type="text" name="contact_name" id="contact_name" >
        </div>
      </div>

      <div class="_tr">
        <div class="_td td_label">[8]連絡先電話番号 <span class="required">（必須） </span></div>
        <div class="_td td_input">
          <input type="text" name="tel" id="tel">
        </div>
      </div>

      <div class="_tr">
        <div class="_td td_label">[9]メールアドレス <span class="required">（必須） </span></div>
        <div class="_td td_input">
          <input type="text" name="email" id="email">
        </div>
      </div>


      <div class="_tr">
        <div class="_td td_label">[10]送付先住所 <span class="required">（必須） </span></div>
        <div class="_td td_input"> 
          <div class="row">
            <div class="col-sm-6">
              <input type="radio" id="addr_legal" name="send_addr" value="addr_legal"><span> 法人</span>
            </div>
            <div class="col-sm-6">
              <input type="radio" id="addr_shop" name="send_addr" value="addr_shop"><span> 店舗</span>
            </div>
            <div class="col-sm-6">
              <input type="radio" id="addr_represent" name="send_addr" value="addr_represent"><span> 代表者住所</span>
            </div>
            <div class="col-sm-6">
              <input type="radio" id="addr_other" name="send_addr" value="addr_other" checked="checked"><span> その他住所</span>
            </div>
          </div>
        </div>
      </div>

      <div class="_tr">
        <div class="_td td_label">その他住所</div>
        <div class="_td td_input">
          <textarea name="addr_other_text" rows="5" placeholder="※その他住所にチェックされた方は、必ずご入力ください"></textarea>
        </div>
      </div>

      <div class="_tr">
        <div class="_td td_label">[11]その他追加情報</div>
        <div class="_td td_input">
          <textarea name="textarea" id="textarea" rows="8" placeholder="例）
連絡希望：午前中
携帯090-1234-5678"></textarea>
        </div>
      </div>

    </div>


    <div class="_table" id="table2">  
      <div class="_tr">
        <div class="_td td_label">法人情報</div>
        <div class="_td td_input">
          <div class="row">
            <div class="col-sm-4">
              <input type="checkbox" value="company_name" name="legal_info1" id="legal_info1"><span>社名</span>
            </div>
            <div class="col-sm-4">
              <input type="checkbox" value="company_address" name="legal_info2" id="legal_info2"><span>所在地</span>
            </div>
            <div class="col-sm-4">
              <input type="checkbox" value="company_contact" name="legal_info3" id="legal_info3"><span>連絡先</span>
            </div>
          </div>
        </div>
      </div>

      <div class="_tr">
        <div class="_td td_label">代表者情報</div>
        <div class="_td td_input">
          <div class="row">
            <div class="col-sm-4">
              <input type="checkbox" value="check_represent_name" name="represent_info1" id="represent_info1"><span>代表者名</span>
            </div>
            <div class="col-sm-4">
              <input type="checkbox" value="check_represent_address" name="represent_info2" id="represent_info2"><span>所在地</span>
            </div>
            <div class="col-sm-4">
              <input type="checkbox" value="check_represent_contact" name="represent_info3" id="represent_info3"><span>連絡先</span>
            </div>
          </div>
        </div>
      </div>

      <div class="_tr">
        <div class="_td td_label">店舗情報</div>
        <div class="_td td_input">
          <div class="row">
            <div class="col-sm-4">
              <input type="checkbox" value="check_shop_name" name="shop_info1" id="shop_info1"><span>店舗名</span>
            </div>
            <div class="col-sm-4">
              <input type="checkbox" value="check_shop_address" name="shop_info2" id="shop_info2"><span>所在地</span>
            </div>
            <div class="col-sm-4">
              <input type="checkbox" value="check_shop_contact" name="shop_info3" id="shop_info3"><span>連絡先</span>
            </div>
          </div>
        </div>
      </div>

      <div class="_tr">
        <div class="_td td_label">お振込金融機関情報</div>
        <div class="_td td_input">
          <input type="text" name="bank_name" id="bank_name"  placeholder="変更後の金融機関名">
        </div>
      </div>

      <div class="_tr">
        <div class="_td td_label">書類送付情報</div>
        <div class="_td td_input">
          <div class="row">
            <div class="col-sm-6">
              <input type="checkbox" value="change_supplies" name="change_deliver_info1" id="change_deliver_info1"><span>用度品送付先の変更</span>
            </div>
            <div class="col-sm-6">
              <input type="checkbox" value="change_check" name="change_deliver_info2" id="change_deliver_info2"><span>計算書送付先の変更</span>
            </div>
          </div>
        </div>
      </div>

      <div class="_tr">
        <div class="_td td_label">日次明細の変更</div>
        <div class="_td td_input">
          <div class="row">
            <div class="col-sm-6">
              <input type="checkbox" value="deliver_info" name="deliver_info1" id="deliver_info1"><span>送付先</span>
            </div>
            <div class="col-sm-6">
              <input type="checkbox" value="receive_way" name="receive_way1" id="receive_way1"><span>受信方法</span>
            </div>
            <div class="col-sm-6">
              <input type="checkbox" value="email" name="email1" id="email1"><span>E-Mailアドレス（E-Mail受信の場合）</span>
            </div>
            <div class="col-sm-6">
              <input type="checkbox" value="password" name="password1" id="password1"><span>パスワード（FAX受信の場合）</span>
            </div>
          </div>
        </div>
      </div>

    </div>


    <div class="_table" id="table3">  
      <div class="_tr">
        <div class="_td td_label">解約理由</div>
        <div class="_td td_input">
          <div class="row">
            <div class="col-sm-4">
              <input type="checkbox" value="close_shop" name="close_shop" id="close_shop"><span>閉店</span>
            </div>
            <div class="col-sm-4">
              <input type="checkbox" value="use_little" name="use_little" id="use_little"><span>利用が少ない</span>
            </div>
            <div class="col-sm-4">
              <input type="checkbox" value="assignment" name="assignment" id="assignment"><span>営業権譲渡</span>
            </div>
            <div class="col-sm-4">
              <input type="checkbox" value="not_merit" name="not_merit" id="not_merit"><span>早期決済にメリットがない</span>
            </div>
            <div class="col-sm-4">
              <input type="checkbox" value="change_other_co" name="change_other_co" id="change_other_co"><span>他社に切替え</span>
            </div>
            <div class="col-sm-4">
              <input type="checkbox" value="other" name="other" id="other"><span>その他</span>
            </div>
          </div>
        </div>
      </div>

      <div class="_tr">
        <div class="_td td_label">解約希望日（閉店予定日）</div>
        <div class="_td td_input">
          <select id="year" name="year">
            <option value=""></option>
            <?php for($year = 2016 ; $year <= 2026; $year++): ?>
            <option value="<?php echo $year; ?>"><?php echo $year; ?></option>
            <?php  endfor; ?>
          </select>年           

          <select id="month" name="month">
            <option value=""></option>
            <?php for($month = 1 ; $month <= 12; $month++): ?>
            <option value="<?php echo $month; ?>"><?php echo $month; ?></option>
            <?php  endfor; ?>
          </select>月

          <select id="day" name="day">
            <option value=""></option>
            <?php for($day = 1 ; $day <= 31; $day++): ?>
            <option value="<?php echo $day; ?>"><?php echo $day; ?></option>
            <?php  endfor; ?>
          </select>日
        </div>
      </div>
    </div>



    <div id="policy">
      <div class="pl_title">個人情報の取り扱いについて<span class="pl_required">必須</span></div>
      <div>
        <p>詳細については<a href="<?php echo $base_path;?>policy">「個人情報の取り扱いについて」</a>をご覧ください。</p>
        <p>
        上記「個人情報の取扱いについて」に同意いただける場合は、「同意する」にチェックした上で「内容確認ボタン」を押して下さい。
        </p>
      </div>

      <table>
        <tr><td><input type="checkbox" id="agree_policy"></td> <td>上記「個人情報の取扱いについて」に同意する</td></tr>
      </table>
    </div>
　　
    <div class="_table" id="table4">  
      <div class="_tr">
        <div class="_td tdleft"></div>
        <div class="_td">
          <input type="submit" id="submit_btn" class="ms-button" disabled="disabled" value="内容を確認する" onclick="if(!onConfirmClick()) return false;">
        </div>
      </div>
    </div>

    </form>

  </div>
</div>

<script type="text/javascript">
var textclick  = false;
//その他追加情報の内容をクリアする
function crearValue(obj){
  if(!textclick){
    obj.value= "";
    textclick = true;
  }
}

//見えなくさせるロジック
function onChangeDisplay(divName,visible){
  display = "";
  if(!visible){
    display="none";
  }
  document.getElementById(divName).style.display= display;
}

//表示をコントロールする
function displayMode(mode){
  //デフォルト
  if(mode=="default"){
    onChangeDisplay('table2',false);
    onChangeDisplay('table3',false);
  }
  //店舗情報変更の時
  if(mode=="type_change_store"){
    onChangeDisplay('table2',true);
    onChangeDisplay('table3',false);
  }
  //解約希望の時
  if(mode=="type_termination_request"){
    onChangeDisplay('table2',false);
    onChangeDisplay('table3',true);
  }
  //店舗契約者変更の時
  if(mode=="type_change_contractore"){
    onChangeDisplay('table2',false);
    onChangeDisplay('table3',false);
  }
}

function onConfirmClick() {
  var message = "";
  if(document.form1.service_type[0].checked == false 
      && document.form1.service_type[1].checked == false
      && document.form1.service_type[2].checked == false) {
      message += "お問い合わせ内容を選択してください。\n";
  }
  if(document.form1.contract_type[0].checked == false 
      && document.form1.contract_type[1].checked == false) {
      message += "現在の契約形態を選択してください。\n";
  }
  if(document.form1.branch_number.value == '') {
    message += "加盟店番号を入力してください。\n";
  }
  if(document.form1.company_name.value == '' && document.form1.contract_type[1].checked == true) {
    message += "法人名を入力してください。\n";
  }
  if(document.form1.shop_name.value == '') {
    message += "店舗名を入力してください。\n";
  }
  if(document.form1.represent_name.value == '') {
    message += "代表者名を入力してください。\n";
  }
  if(document.form1.represent_name_furigana.value == '') {
    message += "代表者フリガナを入力してください。\n";
  }
  if(document.form1.contact_name.value == '') {
    message += "ご担当者名を入力してください。\n";
  }
  if(document.form1.tel.value == '') {
    message += "連絡先電話番号を入力してください。\n";
  }
  //解約のとき
  if(document.form1.service_type[1].checked == true){
    if(document.form1.close_shop.checked == false
      & document.form1.use_little.checked == false
      & document.form1.assignment.checked == false
      & document.form1.not_merit.checked == false
      & document.form1.change_other_co.checked == false
      & document.form1.other.checked == false){
      message += "解約理由を選択してください。\n";
    }
    if(document.form1.year.value == '' 
      || document.form1.month.value == ''
      || document.form1.day.value == '') {
      message += "解約希望日（閉店予定日）を入力してください。\n";
    }
  }
  if(message != '') {
    alert(message);
    return false;
  }
  return true;
}

$(function(){ 
  $("#agree_policy").change(function(){
    var checked = $(this).prop('checked');
    $("#submit_btn").attr("disabled", !checked); 
  }); 
}); 

displayMode("default");
</script>
