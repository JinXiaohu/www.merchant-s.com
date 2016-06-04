
<style type="text/css">
#items{
  width: 100%;
  border-collapse: collapse;
  margin-bottom: 20px;
}
#items td {
  width: 50%;
  border: solid 1px #e5e5e5;
  padding: 25px 20px;
  vertical-align: top;
}
#items td:hover{
 box-shadow: 0 15px 30px rgba(0,0,0,0.1);
 transform: translate3d(0, -1px, 0);
}
#items td .td-title {
  color: #339933;
  text-align: center;
  font-size: 1.1em;
  margin-bottom: 20px;
}
#items td .td-title a {
  color: #339933;
  font-weight: bold;
}
@media(max-width: 767px){
  #items td {
    display: block;
    width: 100%;
    border-bottom: none;
  }
  #items td.last-td {
    border: solid 1px #e5e5e5;
  }
}

#a-join{
  display: block;
  max-width: 350px;
  margin-left: auto;
  margin-right: auto;
}
#a-join:hover,#a-join:active, #a-join:focus{
  text-decoration: none;
}
</style>

<div id="main">
  <div class="sidebar sidebar-lg">
    <ul>
      <li class="active level1 grid-12"><a href="<?php echo $base_path;?>contact">ご加盟店様</a></li>
      <li class="level2 grid-4"><a href="<?php echo $base_path;?>contact/info_changing">各種変更</a></li>
      <li class="level2 grid-4"><a href="<?php echo $base_path;?>contact/order">ロール紙発注<span class="vtitle">（PAX社製端末）</span></a></li>
      <li class="level2 grid-4"><a href="<?php echo $base_path;?>contact/query">お問い合わせ</a></li>

      <div class="li_sep"></div>   

      <li class="level1 grid-12"><a href="<?php echo $base_path;?>contact/join">新規のお客様</a></li>
    </ul>
  </div>

  <div class="rightbar">
    <div class="mb_separator div_hidden"></div>

    <h1>加盟店様向けのご案内</h1>
    <table id="items">
    <tbody>
      <tr>
        <td>
          <div class="td-title"><a href="<?php echo $base_path;?>contact/info_changing">店舗情報変更に関するお手続き</a></div>
          <div>移転、店舗情報の変更、振り込み口座の変更等をご依頼いただけます。</div>
        </td>
        <td>
          <div class="td-title"><a href="<?php echo $base_path;?>contact/order">ロール紙発注フォーム</a></div>
          <div>PAX社製端末をご利用されている加盟店様のロール紙発注を承ります。</div>
        </td>
      </tr>

      <tr>
        <td class="last-td">
          <div class="td-title"><a href="<?php echo $base_path;?>contact/query">お問い合わせフォーム</a></div>
          <div>マーチャント・サポート加盟店様専用のお問い合わせ窓口です。</div>
        </td>
      </tr>

    </tbody>
    </table> 
    
    <a id="a-join" class="ms-button" href="<?php echo $base_path;?>contact/join">新規加盟をご検討のお客様はコチラ</a>
   
  </div>

</div>

