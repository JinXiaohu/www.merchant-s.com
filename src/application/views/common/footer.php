<style type="text/css">
.footer {
  padding-top: 20px;
  padding-bottom: 25px;
  margin-top: 20px;
  color: #767676;
  background-color: #fafafa;
  border-top: 1px solid #e5e5e5;
  text-align: center;
}
@media (max-width: 767px){
  .footer{
    border-top: 15px solid #f5f5f5;
  }
}
.block-sm{
  display: inline;
}
.flink{
  display: inline;
  padding: 5px 10px;
}
@media (max-width: 500px){
  .block-sm{
    display: block;
    padding-top: 5px;
    padding-bottom: 5px;
  }
}
#copyright{
  margin-top: 10px;
}
</style>

</div><!--end of container-->

<div class="footer">
  <div>
    <div class="block-sm">
      <span class="flink"><a href="<?php echo $base_path;?>sitemap">サイトマップ</a></span>
      <span class="flink"><a href="<?php echo $base_path;?>policy">個人情報保護方針</a></span>
    </div>
    <div class="block-sm">
      <span class="flink"><a href="<?php echo $base_path;?>disclaimer">免責事項</a></span>
      <span class="flink"><a href="<?php echo $base_path;?>link">当サイトへのリンク</a></span>
    </div>
  </div>
  <div id="copyright">Copyright (C) 2007-2016 MERCHANT SUPPORT. All Rights Reserved.</div>
</div>

<script type="text/javascript">
$(document).ready(function(){
  <?php if(isset($nav_id)):?>
  $("#<?php echo $nav_id; ?>").addClass('active');
  <?php endif;?>

  $('h2:eq(0)').addClass("first-h2");
});
</script>

</body>
</html>