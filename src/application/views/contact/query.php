
<link href="<?php echo $cdn_path;?>css/form.css" rel="stylesheet">


<div id="main">
  <div class="sidebar sidebar-lg">
    <ul>
      <li class="level1 grid-12"><a href="<?php echo $base_path;?>contact">ご加盟店様</a></li>
      <li class="level2 grid-4"><a href="<?php echo $base_path;?>contact/info_changing">各種変更</a></li>
      <li class="level2 grid-8"><a href="<?php echo $base_path;?>contact/order">ロール紙発注<span class="vtitle">（PAX社製端末）</span></a></li>
      <li class="level2 grid-4 active"><a href="<?php echo $base_path;?>contact/query">お問い合わせ</a></li>

      <div class="li_sep"></div>   

      <li class="level1 grid-12"><a href="<?php echo $base_path;?>contact/join">新規のお客様</a></li>
    </ul>
  </div>

  <div class="rightbar">
    <div class="mb_separator div_hidden"></div>

    <h1><span class="vtitle">ご利用加盟店様</span><span>お問い合わせフォーム</span></h1>

    <p>
    下記のフォームより、お問い合わせ内容をご入力の上、送信ください。
    </p>
    <p>
    万が一のため、弊社でメール受信後に自動返信をさせていただいておりますが、返信メールが翌日にもない場合には、お電話にてお問い合わせ下さいますよう、宜しくお願い申し上げます。
    </p>

    <form method="post" action="" name="form1">
      <div class="_table">
        <div class="_tr">
          <div class="_td td_label">[1]氏名<span class="required">（必須）</span></div>
          <div class="_td td_input"> 
            <input type="text" id="name_mei" name="name_mei">
          </div>
        </div>

        <div class="_tr">
          <div class="_td td_label">氏名カナ<span class="required">（必須）</span></div>
          <div class="_td td_input"> 
            <input type="text" id="name2" name="name2">
          </div>
        </div>

        <div class="_tr">
          <div class="_td td_label">[2]会社名<span class="required">（必須）</span></div>
          <div class="_td td_input">
            <input type="text" id="company_name" name="company_name" placeholder="個人事業の方は入力不要">
          </div>
        </div>

        <div class="_tr">
          <div class="_td td_label">[3]電話番号<span class="required">（必須）</span></div>
          <div class="_td td_input">
            <input type="text" id="tel" name="tel">
          </div>
        </div>

        <div class="_tr">
          <div class="_td td_label">[4]加盟店ID</span></div>
          <div class="_td td_input">
            <input type="text" id="merc_id" name="merc_id">
          </div>
        </div>

        <div class="_tr">
          <div class="_td td_label">[5]店舗名<span class="required">（必須）</span></div>
          <div class="_td td_input">
            <input type="text" id="shop_name" name="shop_name">
          </div>
        </div>

        <div class="_tr">
          <div class="_td td_label">[6]メールアドレス<span class="required">（必須）</span></div>
          <div class="_td td_input">
            <input type="text" id="email" name="email">
          </div>
        </div>

        <div class="_tr">
          <div class="_td td_label">[7]お問い合わせ内容</div>
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

      <div>
        <input type="submit" id="submit_btn" class="ms-button" disabled="disabled" value="内容を確認する" onclick="if(!onConfirmClick()) return false;">
      </div>

    </form>

  </div>

</div>


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
  if (document.form1.name2.value.trim() == '')
  {
    message += "氏名カナを入力してください。\n";
  } 
  if (document.form1.company_name.value.trim()  == '')
  {
    message += "会社名を入力してください。\n";
  }  
  if (document.form1.tel.value.trim()  == '')
  {
    message += "電話番号を入力してください。\n";
  }
  if (document.form1.shop_name.value.trim()  == '')
  {
    message += "店舗名を入力してください。\n";
  }
  if (document.form1.email.value.trim()  == '')
  {
    message += "メールアドレスを入力してください。\n";
  }
  
  if (message != '') 
  {
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
</script>