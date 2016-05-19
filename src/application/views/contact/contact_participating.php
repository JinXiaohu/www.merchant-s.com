<style type="text/css">
.table{
  display: table;
}

.tr{
  display: table-row;
  vertical-align: middle;
}
.th, .td {
  display: table-cell;
  vertical-align: middle;
  padding: 12px 12px;
  border-bottom: solid 1px rgb(225,225,225);
}

.th{
  width: 25%;
  color: white;
  font-weight: bold;
  background-color: #339933;
}
.td{
  width: 75%;
  background-color: rgb(252,252,252);
}

input[type="text"], textarea{
  width: 100%;
}
input[type="text"]{
  height: 30px;
}

#tel input[type="text"]{
  width: 90%;
}

input[type="radio"], input[type="checkbox"]{
  margin-right: 4px;
  padding-top: 10px;
  padding-bottom: 10px;
}

button{
  background-color: #339933;
  font-weight: bold;
  color: white;
  width: 100px;
  border-radius: 4px;
  padding: 8px 10px;
  border-width: 0;
}

</style>

<hr class="mb_separator" />
<h1>店舗情報変更に関するお手続き</h1>
<p>
必要情報をご記入のうえ、送信ください。必要書類一式をご送付いたします。<br>
なお、変更手続きの内容によっては、<strong>「営業許可証」</strong>や<strong>「契約者身分証明書」</strong>のご提示をいただく場合がございますので、あらかじめご了承ください。<br>
また、内容確認のため、別途サポート担当より折り返しご連絡させていただく場合がございます。<br>折り返しの時間帯や携帯電話へのご連絡の希望は、ご希望の時間帯と携帯番号を「その他追加情報」にご記入ください。</p>

<form method="post" action="" name="form1">

<div class="table" id="table1">

  <div class="tr">
    <div class="th">[1]手続き内容を選択してください</div>
    <div class="td">
      <div class="row">
        <div class="col-sm-3">
          <input type="radio" id="service_type" name="service_type" value="type_change_store" onchange="displayMode('type_change_store');"><span> 店舗情報変更</span>
        </div>

        <div class="col-sm-3">
          <input type="radio" id="service_type2" name="service_type" value="type_termination_request" onchange="displayMode('type_termination_request');"><span> 解約希望</span>
        </div>

        <div class="col-sm-6">
          <input  type="radio" id="service_type3" name="service_type" value="type_change_contractore" onchange="displayMode('type_change_contractore');">
          <span>店舗契約者変更&nbsp;※営業者変更、営業（法人）譲渡、法人改組などが該当します。</span>
        </div>
      </div>
    </div>
  </div>

  <div class="tr">
    <div class="th">[2]契約形態</div>
    <div class="td">
      <div class="row">
        <div class="col-sm-3">
          <input type="radio" id="contract_type" name="contract_type" value="contract_personal"><span>個人</span>
        </div>
        <div class="col-sm-3">
          <input type="radio" id="contract_type2" name="contract_type" value="contract_legal"><span>法人</span>
        </div>
        <div class="col-sm-6">
        </div>
      </div>
    </div>
  </div>

  <div class="tr">
    <div class="th">[3]加盟店番号</div>
    <div class="td">
      <input type="text" name="branch_number" id="branch_number">
    </div>
  </div>

  <div class="tr">
    <div class="th">※[4]法人名</div>
    <div class="td">
      <input type="text" name="company_name" id="company_name">
    </div>
  </div>

  <div class="tr">
    <div class="th">[5]店舗名</div>
    <div class="td">
      <input type="text" name="shop_name" id="shop_name">
    </div>
  </div>

  <div class="tr">
    <div class="th">[6]代表者名</div>
    <div class="td">
      <input type="text" name="represent_name" id="represent_name">
    </div>
  </div>

  <div class="tr">
    <div class="th">[7]代表者フリガナ</div>
    <div class="td">
      <input type="text" name="represent_name_furigana" id="represent_name_furigana" >
    </div>
  </div>

  <div class="tr">
    <div class="th">[8]ご担当者名</div>
    <div class="td">
      <input type="text" name="contact_name" id="contact_name" >
    </div>
  </div>

  <div class="tr">
    <div class="th">[9]連絡先電話番号</div>
    <div class="td">
      <input type="text" name="tel" id="tel">
    </div>
  </div>

  <div class="tr">
    <div class="th">[10]その他追加情報</div>
    <div class="td">
      <textarea name="textarea" id="textarea" rows="10" placeholder="例）
連絡希望：午前中
携帯090-1234-5678"></textarea>
    </div>
  </div>

</div>


<div class="table" id="table2">  
  <div class="tr">
    <div class="th">法人情報</div>
    <div class="td">
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

  <div class="tr">
    <div class="th">代表者情報</div>
    <div class="td">
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

  <div class="tr">
    <div class="th">店舗情報</div>
    <div class="td">
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

  <div class="tr">
    <div class="th">お振込金融機関情報</div>
    <div class="td">
      <input type="text" name="bank_name" id="bank_name"  placeholder="変更後の金融機関名">
    </div>
  </div>

  <div class="tr">
    <div class="th">書類送付情報</div>
    <div class="td">
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

  <div class="tr">
    <div class="th">日次明細の変更</div>
    <div class="td">
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


<div class="table" id="table3">  

  <div class="tr">
    <div class="th">解約理由</div>
    <div class="td">
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

  <div class="tr">
    <div class="th">解約希望日（閉店予定日）</div>
    <div class="td">
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


<div class="row">
  <div class="col-sm-offset-3 col-sm-9">
    <button type="submit" onclick="if(!onConfirmClick()) return false;"> 確 認 </button>
  </div>
</div>
  
</form>

<br />

<div class="smallText">
<p>※弊社登録の書類送付先と異なる場合やお急ぎの際は、お電話にてお問合せください。</p>
<p>お電話によるお申込・お問い合わせ</p>
<p>各種お問い合わせはお電話でも承っております。</p>
<p>TEL : 03-6279-0521 ( 9:00～17:00　土日祝休 ）</p>
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


displayMode("default");
</script>