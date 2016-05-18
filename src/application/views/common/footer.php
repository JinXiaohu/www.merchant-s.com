<style type="text/css">
.footer {
  padding-top: 20px;
  padding-bottom: 20px;
  margin-top: 30px;
  color: #767676;
  background-color: #fafafa;
  border-top: 1px solid #e5e5e5;
}
.footer_container{
  max-width: 550px;
  padding-left: 8px;
  padding-right: 8px;
  margin-left: auto;
  margin-right: auto;
  text-align: center;
}
#copyright{
  margin-top: 10px;
}
.flink{
  display: inline;
  padding: 5px 10px;
}
@media (max-width: 500px){
  .flink{
    display: block;
    float: left;
    width: 50%;
    padding-left: 8px;
    padding-right: 8px;
  }
}
</style>

</div><!--end of container-->

<div class="footer">

<div class="footer_container">

  <div class="row">
    <div class="flink"><a href="<?php echo $base_path;?>sitemap">サイトマップ</a></div>
    <div class="flink"><a href="<?php echo $base_path;?>policy">個人情報保護方針</a></div>
    <div class="flink"><a href="<?php echo $base_path;?>disclaimer">免責事項</a></div>
    <div class="flink"><a href="<?php echo $base_path;?>link">当サイトへのリンク</a></div>
  </div>
  <p id="copyright">Copyright (C) 2007-2016 MERCHANT SUPPORT. All Rights Reserved.</p>
</div>
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