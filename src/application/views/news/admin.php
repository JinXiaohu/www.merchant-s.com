<style type="text/css">
.news_item{
  margin-left: 0;
  margin-right: 0;
  border-top: dotted 1px rgb(225,225,225);
  padding-top: 8px;
  padding-bottom: 8px;
}

.col-title{
  padding-left: 0;
  padding-right: 15px;
  font-size: 1.1em;
}
.col-date{
  text-align: right;
  padding-right: 15px;
  padding-left: 15px;
  color:rgb(150,150,150);
}  
.col-delete{
  text-align: right;
  padding-left: 15px;
  padding-right: 0;
}
@media (max-width: 767px){
  .news_item{
    border-top: solid 1px rgb(225,225,225);
  }
  .col-date{
    text-align: left;
    padding-left: 0;
    margin-top: 5px;
  }
  .col-delete{
    margin-top: 5px;
  }
}

#add_news{
  margin-top:20px;
  margin-bottom:20px;
}
</style>


<h1>All News</h1>
<?php foreach ($full_news as $news_item):?>  
<div class="row news_item">
  <div class="col-sm-8 col-xs-12 col-title">
    <a href="<?php echo $base_path;?>news/show?id=<?php echo $news_item->id; ?>" target="_blank"><?php echo $news_item->title; ?></a>
  </div>

  <div class="col-sm-3 col-xs-10 col-date">
    <?php echo $news_item->date; ?>
   </div>
   
  
  <div class="col-sm-1 col-xs-2 col-delete">
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

