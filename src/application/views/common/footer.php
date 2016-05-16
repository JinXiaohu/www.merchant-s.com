<style type="text/css">
.bs-docs-footer-links {
  padding-left: 0;
  margin-top: 20px;
}
.bs-docs-footer {
    padding-top: 40px;
    padding-bottom: 40px;
    margin-top: 30px;
    color: #767676;
    text-align: center;
    border-top: 1px solid #e5e5e5;
}
.bs-docs-footer-links li {
  display: inline; 
  padding: 0 2px;
}
</style>

<footer class="bs-docs-footer" role="contentinfo">
  <ul class="bs-docs-footer-links text-muted">
    <li><a href="<?php echo $base_path;?>credit">集客につながるクレジットカード</a></li>
    <li>·</li>
    <li><a href="<?php echo $base_path;?>policy">個人情報保護方針</a></li>
    <li>·</li>
    <li><a href="<?php echo $base_path;?>disclaimer">免責事項</a></li>
    <li>·</li>
    <li><a href="<?php echo $base_path;?>link">当サイトへのリンク</a></li>
    <li>·</li>
    <li><a href="<?php echo $base_path;?>recruit">採用情報</a></li>
    <li>·</li>
    <li><a href="<?php echo $base_path;?>contact_participating">加盟店の皆様へ：各種変更手続き</a></li>
  </ul>
  <p>Copyright (C) 2007-2016 MERCHANT SUPPORT. All Rights Reserved.</p>
</footer>

<script type="text/javascript">
$(document).ready(function(){
<?php if(isset($nav_id)):?>
  $("#nav-<?php echo $nav_id; ?>").addClass('active');
<?php endif;?>
});
</script>

</div><!--end of container-->
</body>
</html>