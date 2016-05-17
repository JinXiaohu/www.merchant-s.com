<style type="text/css">
hr{
  border-top: 2px solid #339933;
}
.table{
  display: table;
  margin-top: 10px;
  margin-bottom: 10px;
}

.tr{
  display: table-row;
  vertical-align: middle;
}

.th, .th_nobg, .td, .td_nobg{
  display: table-cell;
  vertical-align: middle;
  padding: 12px 12px;
}

.th, .th_nobg{
  width: 25%;
}

.th{
  color: white;
  font-weight: bold;
  background-color: #339933;
  border-bottom: solid 1px rgb(225,225,225);
}

.td, .td_nobg{
  width: 75%;
}


.td{
  background-color: rgb(252,252,252);
  border-bottom: solid 1px rgb(225,225,225);
}

input[type="text"],input[type="password"],input[type="file"], textarea{
  width: 100%;
}

input[type="text"],input[type="password"],input[type="file"]{
  height: 30px;
}

select{
  height: 30px;
}

button{
  background-color: #339933;
  font-weight: bold;
  color: white;
  width: 100px;
  border-radius: 4px;
  padding: 8px 10px;
  border-width: 0;
}

.error{
  color: red;
  font-weight: bold;
}
</style>



<hr />
<h1>Add News</h1>

<form method="post" action="" name="form1" enctype="multipart/form-data">
  <div class="table">
    <div class="tr">
      <div class="th">Title</div>
      <div class="td"><input type="text" name="title"></div>
    </div>
    
    <div class="tr">
      <div class="th">News Type</div>
      <div class="td">
        <select name="type" onChange="typeChanged();">
          <option value=""></option>
          <option value="upload">Upload a pdf file</option>
          <option value="html">Edit html</option>
        </select>
      </div>
    </div>

    <div class="tr">
      <div class="th">Publish Date</div>
      <div class="td"><input type="text" name="date" placeholder="填写日期，作为新闻的发布日期，格式是2016-05-17；如果不填，将使用今天作为新闻的发布日期"></div>
    </div>

    <div class="tr" id="userfile">
      <div class="th">Upload</div>
      <div class="td">
        <input type="file" name="userfile">
      </div>
    </div>

    <div class="tr" id="content">
      <div class="th">Edit</div>
      <div class="td">
      <textarea rows="20" name="content" placeholder="write html code here"></textarea></div>
    </div>

    <?php if(isset($error)): ?>
    <div class="tr">
      <div class="th_nobg"></div>
      <div class="td_nobg error">
        <?php echo $error; ?>
      </div>
    </div>
    <?php endif; ?> 

    <div class="tr">
      <div class="th_nobg"></div>
      <div class="td_nobg">
      <button type="submit" onclick="if(!onConfirmClick()) return false;">Submit</button>
      </div>
    </div>

  </div>
</form>


<script type="text/javascript">
String.prototype.trim = function()
{
  return this.replace(/(^\s*)|(\s*$)/g, '');
}

function onConfirmClick() {
  var message = "";
  if (document.form1.title.value.trim() == '')
  {
    message += "title is empty! \n";
  } 

  if (document.form1.password.value.trim()  == '')
  {
    message += "Password is empty!\n";
  }  
  
  if (message != '') 
  {
    alert(message);
    return false;
  }

  return true;
}

function typeChanged()
{
  if (document.form1.type.value == 'upload')
  {
    $("#userfile").show();
    $("#content").hide();
  }
  else if(document.form1.type.value == 'txt' || document.form1.type.value == 'html')
  {
    $("#userfile").hide();
    $("#content").show();
  }
  else
  {
    $("#userfile").hide();
    $("#content").hide();
  }
}
typeChanged();
</script>