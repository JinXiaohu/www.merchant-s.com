<style type="text/css">
._table{
  margin-top: 10px;
  margin-bottom: 10px;
}
._td{  
  padding: 12px 12px;
  vertical-align: middle;
}
._td:first-child{
  width: 25%;
}

.td_label{
  color: white;
  font-weight: bold;
  background-color: #339933;
  border-bottom: solid 1px rgb(240,240,240);
}
.td_input{
  background-color: rgb(252,252,252);
  border-bottom: solid 1px rgb(240,240,240);
}

@media (max-width: 767px){
  ._table,._tbody,._tr,._td{
    display: block;
  }
  ._td{
    padding: 7px 0;
  }
  ._td:first-child{
    width: 100%;
  }
  .td_label{
    color: #339933;
    background-color: white;
    border: none;
    margin-top: 15px;
  }
  .td_input{
    background-color: white;
    padding-bottom: 15px;
    border: none;
  }
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

<h1>お問い合わせ</h1>

<form method="post" action="" name="form1">
  <p>（※）印は入力必須項目です。</p>

  <div class="_table">
    <div class="_tr">
      <div class="_td td_label">（※）[1]氏名</div>
      <div class="_td td_input"> 
        <input type="text" id="name_mei" name="name_mei" placeholder="法人様の場合、担当者ご氏名">
      </div>
    </div>

    <div class="_tr">
      <div class="_td td_label">（※）[2]会社名</div>
      <div class="_td td_input">
        <input type="text" id="shop_name" name="shop_name" placeholder="法人様の場合必須">
      </div>
    </div>

    <div class="_tr">
      <div class="_td td_label">（※）[3]TEL</div>
      <div class="_td td_input">
        <input type="text" id="tel" name="tel" maxlength="12">
      </div>
    </div>

    <div class="_tr">
      <div class="_td td_label">[4]メールアドレス</div>
      <div class="_td td_input">
        <input type="text" id="reply_email" name="reply_email">
      </div>
    </div>

    <div class="_tr">
      <div class="_td td_label">[5]お問い合わせ内容</div>
      <div class="_td td_input">
        <textarea rows="10" id="content" name="content"></textarea>
      </div>
    </div>

    <?php if(isset($error)): ?>
    <div class="_tr">
      <div class="_td tdleft"></div>
      <div class="_td error">
        <?php echo $error; ?>
      </div>
    </div>
    <?php endif; ?> 


    <div class="_tr">
      <div class="_td tdleft"></div>
      <div class="_td">
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
