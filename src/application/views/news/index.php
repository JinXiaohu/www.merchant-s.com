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

.news_date_col{
  text-align: left;
  padding-left: 0;
  padding-right: 15px;
  color:rgb(120,120,120);
}

@media (min-width: 768px){
  .news_date_col{
    text-align: right;
    padding-right: 0;
    padding-left: 15px;
    font-size:0.9em;
  }  
}
</style>

<hr/>
<h1>All News</h1>
<?php foreach ($full_news as $news_item):?>  
<div class="row news_item_row">
  <div class="col-sm-9 news_title_col">
    <a href="<?php echo $base_path;?>news/show?id=<?php echo $news_item->id; ?>" target="_blank"><?php echo $news_item->title; ?></a>
  </div>

  <div class="col-sm-3 news_date_col"><?php echo $news_item->date; ?></div>
</div>
<?php endforeach;?> 
