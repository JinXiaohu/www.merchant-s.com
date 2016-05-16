<style type="text/css">
hr{
  border-top: 2px solid #339933;
}
.table{
  display: table;
  margin-top: 10px;
  margin-bottom: 10px;
}

.tr{
  display: table-row;
  vertical-align: middle;
}

.th, .th_nobg, .td, .td_nobg{
  display: table-cell;
  vertical-align: middle;
  padding: 12px 12px;
}

.th, .th_nobg{
  width: 25%;
}

.th{
  color: white;
  font-weight: bold;
  background-color: #339933;
  border-bottom: solid 1px rgb(225,225,225);
}

.td, .td_nobg{
  width: 75%;
}


.td{
  background-color: rgb(252,252,252);
  border-bottom: solid 1px rgb(225,225,225);
}


.required{
  color:red;
}

input[type="text"], textarea{
  width: 100%;
}

input[type="text"]{
  height: 30px;
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

.tips{
  color: #777777;
}

.pbold{
 font-weight: bold;
 margin-top: 30px;
 border-bottom-style: dotted;
 border-bottom-width: 1px;
 border-bottom-color: #e0e0e0;
}
.error{
  color: red;
  font-weight: bold;
}
</style>

<script type="text/javascript">
String.prototype.trim = function()
{
  return this.replace(/(^\s*)|(\s*$)/g, '');
}

function onConfirmClick() {
  var message = "";
  if (document.form1.name_mei.value.trim() == '')
  {
    message += "氏名を入力してください。\n";
  } 

  if (document.form1.shop_name.value.trim()  == '')
  {
    message += "会社名を入力してください。\n";
  }  
  
  if (document.form1.tel.value.trim()  == '')
  {
    message += "TELを入力してください。\n";
  }
  
  if (message != '') 
  {
    alert(message);
    return false;
  }

  return true;
}

</script>


<hr />

<h1>お問い合わせ</h1>

<form method="post" action="" name="form1">
  <div>
    <span class="required">（※）</span>印は入力必須項目です。
  </div>

  <div class="table">
    <div class="tr">
      <div class="th"><span class="required">（※）</span>[1]氏名</div>
      <div class="td">
        <div class="row">
          <div class="col-md-8"><input type="text" id="name_mei" name="name_mei"></div>
          <div class="col-md-4 tips">法人様の場合、担当者ご氏名</div>
        </div>
      </div>
    </div>

    <div class="tr">
      <div class="th"><span class="required">（※）</span>[2]会社名</div>
      <div class="td">
        <div class="row">
          <div class="col-md-8"><input type="text" id="shop_name" name="shop_name"></div>
          <div class="col-md-4 tips">法人様の場合必須</div>
        </div>
      </div>
    </div>

    <div class="tr">
      <div class="th"><span class="required">（※）</span>[3]TEL</div>
      <div class="td">
        <div class="row">
          <div class="col-md-8"><input type="text" id="tel" name="tel" maxlength="12"></div>
          <div class="col-md-4"></div>
        </div>
      </div>
    </div>

    <div class="tr">
      <div class="th">[4]メールアドレス</div>
      <div class="td">
        <div class="row">
          <div class="col-md-8"><input type="text" id="reply_email" name="reply_email"></div>
          <div class="col-md-4"></div>
        </div>
      </div>
    </div>

    <div class="tr">
      <div class="th">[5]お問い合わせ内容</div>
      <div class="td">
        <div class="row">
          <div class="col-md-8"><textarea rows="10" id="content" name="content"></textarea></div>
          <div class="col-md-4"></div>
        </div>
      </div>
    </div>

    <?php if(isset($error)): ?>
    <div class="tr">
      <div class="th_nobg"></div>
      <div class="td_nobg">
        <?php echo $error; ?>
      </div>
    </div>
    <?php endif; ?> 


    <div class="tr">
      <div class="th_nobg"></div>
      <div class="td_nobg">
      <button type="submit" onclick="if(!onConfirmClick()) return false;">確 認</button>
      </div>
    </div>

  </div>
</form>

<div>
  <p class="pbold">お電話によるお申込・お問い合わせ</p>
  <p>各種お問い合わせはお電話でも承っております。</p>
  <p>TEL : 03-6279-0521 ( 9:00～17:00　土日祝休 ）</p>
</div>
