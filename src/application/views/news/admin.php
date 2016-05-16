<style type="text/css">
hr{
  border-top: 2px solid #339933;
}
.news_item_row{
  margin-left: 0;
  margin-right: 0;
  border-top-style: dotted;
  border-top-width: 1px;
  border-top-color: rgb(225,225,225);
  padding-top: 8px;
  padding-bottom: 8px;
}

.news_title_col{
  padding-left: 0;
  padding-right: 15px;
  font-size: 1.1em;
}

.col-date{
  text-align: left;
  padding-left: 0;
  padding-right: 15px;
  color:rgb(120,120,120);
}
.col-crud{
  text-align: right;
  padding-left: 15px;
  padding-right: 0;
}

@media (min-width: 768px){
  .col-date{
    text-align: right;
    padding-right: 15px;
    padding-left: 15px;
  }  
}
#add_news{
  margin-top:20px;
  margin-bottom:20px;
}
</style>

<hr/>
<h1>All News</h1>
<?php foreach ($full_news as $news_item):?>  
<div class="row news_item_row">
  <div class="col-sm-8 col-xm-12 news_title_col">
    <a href="<?php echo $base_path;?>news/show?id=<?php echo $news_item->id; ?>" target="_blank"><?php echo $news_item->title; ?></a>
  </div>

  <div class="col-sm-3 col-xs-8 col-date">
    <?php echo $news_item->date; ?>
   </div>
   
  
  <div class="col-sm-1 col-xs-2 col-crud">
    <form id="<?php echo $news_item->id; ?>" method="post" action="<?php echo $base_path;?>news/delete">
      <input type="hidden" name="id" value="<?php echo $news_item->id; ?>">
      <a href="javascript:void(0);" onclick="confirm_delete('<?php echo $news_item->id; ?>');">Delete</a>
    </form>
  </div>
 </div>
 
<?php endforeach;?> 

<div id="add_news">    
  <a href="<?php echo $base_path;?>news/add"><strong>Add News</strong></a>
</div>

<script type="text/javascript">
function confirm_delete(name)
{
  if(confirm('Warning! Confirm delete this news?'))
  {
    document.getElementById(name).submit();
  }
}
</script>

