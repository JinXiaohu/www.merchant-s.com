
<link href="<?php echo $cdn_path;?>css/form.css" rel="stylesheet">

<style type="text/css">
#tr-addr-txt{
  display: none;
}  
</style>
<div id="main">
  <div class="sidebar sidebar-level">
    <ul>
      <li class="level1"><a href="<?php echo $base_path;?>contact">ご加盟店様</a></li>
      <li class="level2"><a href="<?php echo $base_path;?>contact/info_changing">各種変更</a></li>
      <li class="level2 active"><a href="<?php echo $base_path;?>contact/order">ロール紙発注</a></li>
      <li class="level2"><a href="<?php echo $base_path;?>contact/query">お問い合わせ</a></li>

      <div class="li_sep"></div>   

      <li class="level1"><a href="<?php echo $base_path;?>contact/join">新規のお客様</a></li>
    </ul>
  </div>

  <div class="rightbar">
    <div class="mb_separator div_hidden"></div>
    <h1>ロール紙発注フォーム</h1>

    <p class="smallText">
    下記のフォームより、お問い合わせ内容をご入力の上、お問い合わせいただきますようお願い致します。
    </p>
    <p class="smallText">
    万が一のため、弊社でメール受信後に自動返信をさせていただいておりますが、返信メールが翌日にもない場合には、お電話にてお問い合わせ下さいますよう、宜しくお願い申し上げます。
    </p>

    <form method="post" action="" name="form1">
      <div class="_table">
        <div class="_tr">
          <div class="_td td_label">[1]加盟店番号（6桁）<span class="required">（必須）</span></div>
          <div class="_td td_input"> 
            <input type="text" id="merc_id" name="merc_id">
          </div>
        </div>

        <div class="_tr">
          <div class="_td td_label">[2]端末番号<span class="required">（必須）</span></div>
          <div class="_td td_input">
            <input type="text" id="term_id" name="term_id">
          </div>
        </div>

        <div class="_tr">
          <div class="_td td_label">[3]店舗名<span class="required">（必須）</span></div>
          <div class="_td td_input">
            <input type="text" id="shop_name" name="shop_name">
          </div>
        </div>

        <div class="_tr">
          <div class="_td td_label">[4]S80（58mmx48Φ）</div>
          <div class="_td td_input">
            <div class="row">
              <div class="col-xs-4">
                <input type="radio" name="s80" value="5"><span> 5個</span>
              </div>
              <div class="col-xs-4">
                <input type="radio" name="s80" value="10"><span> 10個</span>
              </div>
              <div class="col-xs-4">
                <input type="radio" name="s80" value="20"><span> 20個</span>
              </div>
            </div>
          </div>
        </div>

        <div class="_tr">
          <div class="_td td_label">[5]S90（58mmx30Φ）</div>
          <div class="_td td_input">
            <div class="row">
              <div class="col-xs-4">
                <input type="radio" name="s90" value="10"><span> 10個</span>
              </div>
              <div class="col-xs-4">
                <input type="radio" name="s90" value="30"><span> 30個</span>
              </div>
              <div class="col-xs-4">
                <input type="radio" name="s90" value="50"><span> 50個</span>
              </div>
            </div>
          </div>
        </div>


        <div class="_tr">
          <div class="_td td_label">[6]送付先住所</div>
          <div class="_td td_input">
            <div class="row">
              <div class="col-xs-4">
                <input type="radio" name="addr" id="addr_legal" value="addr_legal"><span> 法人</span>
              </div>
              <div class="col-xs-4">
                <input type="radio" name="addr" id="addr_store" value="addr_store"><span> 店舗</span>
              </div>
              <div class="col-xs-4">
                <input type="radio" name="addr" id="addr_other" value="addr_other"><span> その他住所</span>
              </div>
            </div>
          </div>
        </div>


        <div class="_tr" id="tr-addr-txt">
          <div class="_td td_label">その他住所</div>
          <div class="_td td_input">
            <textarea rows="10" id="addr_txt" name="addr_txt"></textarea>
          </div>
        </div>

        <div class="_tr">
          <div class="_td td_label">[7]備考</span></div>
          <div class="_td td_input">
            <input type="text" id="remark" name="remark">
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
  if (document.form1.merc_id.value.trim() == '')
  {
    message += "加盟店番号を入力してください。\n";
  } 
  if (document.form1.term_id.value.trim()  == '')
  {
    message += "端末番号を入力してください。\n";
  }  
  if (document.form1.shop_name.value.trim()  == '')
  {
    message += "店舗名を入力してください。\n";
  }
  if(document.form1.s80[0].checked == false 
      && document.form1.s80[1].checked == false
      && document.form1.s80[2].checked == false) {
      message += "S80（58mmx48Φ）を選択してください。\n";
  }
  if(document.form1.s90[0].checked == false 
      && document.form1.s90[1].checked == false
      && document.form1.s90[2].checked == false) {
      message += "S90（58mmx48Φ）を選択してください。\n";
  }
  if(document.form1.addr[0].checked == false 
      && document.form1.addr[1].checked == false
      && document.form1.addr[2].checked == false) {
      message += "送付先住所を選択してください。\n";
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

  $("input[name='addr']").change(function(){
    var checked = $("#addr_other").prop('checked');
    if(!checked)
    {
      $("#tr-addr-txt").hide();
    }
    else
    {
      var display = $("#tr-addr-txt").next().css("display");
      $("#tr-addr-txt").css("display", display);
    }
  }); 
}); 
</script>