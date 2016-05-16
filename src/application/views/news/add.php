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
      <div class="td"><input type="text" id="title" name="title"></div>
    </div>
    
    <div class="tr">
      <div class="th">News Type</div>
      <div class="td">
        <select id="type" name="type" onChange="typeChanged();">
          <option value=""></option>
          <option value="upload">Upload a pdf file</option>
          <option value="edit">Edit text</option>
        </select>
      </div>
    </div>

    <div class="tr">
      <div class="th">Upload</div>
      <div class="td">
        <input type="file" id="userfile" name="userfile">
      </div>
    </div>

    <div class="tr">
      <div class="th">Edit</div>
      <div class="td">
      <textarea rows="10" id="content" name="content"></textarea></div>
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
    document.form1.userfile.disabled = false;
    document.form1.content.disabled = true;
  }
  else if(document.form1.type.value == 'edit')
  {
    document.form1.userfile.disabled = true;
    document.form1.content.disabled = false;
  }
  else
  {
    document.form1.userfile.disabled = true;
    document.form1.content.disabled = true;
  }
}
typeChanged();
</script>