<style type="text/css">
.news_item{
  margin-left: 0;
  margin-right: 0;
  border-top: dotted 1px rgb(225,225,225);
  padding-top: 10px;
  padding-bottom: 10px;
}

.news_title_col{
  padding-left: 0;
  padding-right: 0;
}

.news_date_col{
  text-align: right;
  padding-right: 0;
  padding-left: 25px;
  margin-top: 0;
  color:rgb(150,150,150);
}
@media (max-width: 767px){
  .news_item{
    border-top: solid 1px rgb(225,225,225);
  }
  .news_date_col{
    text-align: left;
    padding-left: 0;
    margin-top: 5px;
  }
}
</style>

<hr/>
<h1>News</h1>
<?php foreach ($full_news as $news_item):?>  
<div class="row news_item">
  <div class="col-sm-10 news_title_col">
    <a href="<?php echo $base_path;?>news/show?id=<?php echo $news_item->id; ?>" target="_blank"><?php echo $news_item->title; ?></a>
  </div>

  <div class="col-sm-2 news_date_col"><?php echo $news_item->date; ?></div>
</div>
<?php endforeach;?> 
