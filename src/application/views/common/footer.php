<style type="text/css">
.footer-links {
  padding-left: 0;
  margin-top: 20px;
}
.footer {
  padding-top: 20px;
  padding-bottom: 20px;
  margin-top: 30px;
  color: #767676;
  background-color: #fafafa;
  text-align: center;
  border-top: 1px solid #e5e5e5;
}
.footer-links li {
  display: inline; 
  padding: 0 2px;
}
</style>

</div><!--end of container-->

<div class="footer" role="contentinfo">
  <ul class="footer-links text-muted">
    <li><a href="<?php echo $base_path;?>sitemap">サイトマップ</a></li>
    <li>·</li>
    <li><a href="<?php echo $base_path;?>policy">個人情報保護方針</a></li>
    <li>·</li>
    <li><a href="<?php echo $base_path;?>disclaimer">免責事項</a></li>
    <li>·</li>
    <li><a href="<?php echo $base_path;?>link">当サイトへのリンク</a></li>
  </ul>
  <p>Copyright (C) 2007-2016 MERCHANT SUPPORT. All Rights Reserved.</p>
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