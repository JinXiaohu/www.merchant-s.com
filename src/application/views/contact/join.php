
<link href="<?php echo $cdn_path;?>css/form.css" rel="stylesheet">

<div id="main">
  <div class="sidebar sidebar-level">
    <ul>
      <li class="level1"><a href="<?php echo $base_path;?>contact">ご加盟店様</a></li>
      <li class="level2"><a href="<?php echo $base_path;?>contact/info_changing">各種変更</a></li>
      <li class="level2"><a href="<?php echo $base_path;?>contact/order">ロール紙発注</a></li>
      <li class="level2"><a href="<?php echo $base_path;?>contact/query">お問い合わせ</a></li>

      <div class="li_sep"></div>   

      <li class="level1 active"><a href="<?php echo $base_path;?>contact/join">新規のお客様</a></li>
    </ul>
  </div>

  <div class="rightbar">
    <div class="mb_separator div_hidden"></div>
    <h1>新規加盟をご検討のお客様</h1>

    <p class="smallText">
    下記のフォームより、お問い合わせ内容をご入力の上、お問い合わせいただきますようお願い致します。
    </p>
    <p class="smallText">
    万が一のため、弊社でメール受信後に自動返信をさせていただいておりますが、返信メールが翌日にもない場合には、お電話にてお問い合わせ下さいますよう、宜しくお願い申し上げます。
    </p>

    <form method="post" action="" name="form1">

      <div class="_table">
        <div class="_tr">
          <div class="_td td_label">[1]氏名<span class="required">（必須）</span></div>
          <div class="_td td_input"> 
            <input type="text" id="name_mei" name="name_mei" placeholder="法人様の場合、担当者ご氏名">
          </div>
        </div>

        <div class="_tr">
          <div class="_td td_label">[2]会社名<span class="required">（必須）</span></div>
          <div class="_td td_input">
            <input type="text" id="shop_name" name="shop_name" placeholder="法人様の場合必須">
          </div>
        </div>

        <div class="_tr">
          <div class="_td td_label">[3]電話番号<span class="required">（必須）</span></div>
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
          <div class="_td td_label">[5]資料請求</div>
          <div class="_td td_input">
            <input type="text" id="request" name="request">
          </div>
        </div>

        <div class="_tr">
          <div class="_td td_label">[6]ご希望の連絡方法<span class="required">（必須）</span></div>
          <div class="_td td_input">
            <div class="row">
              <div class="col-sm-4">
                <input type="checkbox" value="con_by_tel" name="con_by_tel" id="con_by_tel"><span>電話連絡希望</span>
              </div>
              <div class="col-sm-4">
                <input type="checkbox" value="con_by_email" name="con_by_email" id="con_by_email"><span>Eメール連絡希望</span>
              </div>
              <div class="col-sm-4">
                <input type="checkbox" value="no_con" name="no_con" id="no_con"><span>連絡不要</span>
              </div>
            </div>
          </div>
        </div>


        <div class="_tr">
          <div class="_td td_label">[7]資料請求</div>
          <div class="_td td_input">
            <div class="row">
              <div class="col-sm-6">
                <input type="checkbox" value="send_by_mail" name="send_by_mail" id="send_by_mail"><span>資料送付希望（ご郵送）</span>
              </div>
              <div class="col-sm-6">
                <input type="checkbox" value="send_by_email" name="send_by_email" id="send_by_email"><span>資料送付希望（Eメール）</span>
              </div>
            </div>
          </div>
        </div>


        <div class="_tr">
          <div class="_td td_label">[8]お問い合わせ内容</div>
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
          <input type="submit" id="submit_btn" class="ms-button" value="確 認" onclick="if(!onConfirmClick()) return false;">
          </div>
        </div>

      </div>
    </form>

    <div class="tail">
      <p class="title">お電話からもご請求が可能です</p>
      <p>マーチャント・サポート　9：00AM～17：00PM（土・日・祝・年末年始休）</p>
      <p class="tel">03-6279-0521</p>
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
        <tr><td><input type="checkbox" id="agree_policy" checked="checked"></td> <td>上記「個人情報の取扱いについて」に同意する</td></tr>
      </table>
    </div>

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
  if (document.form1.shop_name.value.trim()  == '')
  {
    message += "会社名を入力してください。\n";
  }  
  if (document.form1.tel.value.trim()  == '')
  {
    message += "電話番号を入力してください。\n";
  }
  if(document.form1.con_by_tel.checked == false 
      && document.form1.con_by_email.checked == false
      && document.form1.no_con.checked == false) {
      message += "ご希望の連絡方法を選択してください。\n";
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

