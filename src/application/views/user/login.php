<style type="text/css">
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


.required{
  color:red;
}

input[type="text"],input[type="password"], textarea{
  width: 100%;
}

input[type="text"],input[type="password"]{
  height: 30px;
}

input[type="radio"], input[type="checkbox"]{
  margin-right: 4px;
  padding-top: 10px;
  padding-bottom: 10px;
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

.tips{
  color: #777777;
}

.error{
  color: red;
  font-weight: bold;
}
</style>

<script type="text/javascript">
String.prototype.trim = function()
{
  return this.replace(/(^\s*)|(\s*$)/g, '');
}

function onConfirmClick() {
  var message = "";
  if (document.form1.username.value.trim() == '')
  {
    message += "Username is empty! \n";
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

</script>


<hr />
<h1>Administator Login</h1>

<form method="post" action="" name="form1">
  <div class="table">
    <div class="tr">
      <div class="th">Username</div>
      <div class="td"><input type="text" id="username" name="username"></div>
    </div>

    <div class="tr">
      <div class="th">Password</div>
      <div class="td"><input type="password" id="password" name="password"></div>
    </div>

    <?php if(isset($error)): ?>
    <div class="tr">
      <div class="th_nobg"></div>
      <div class="td_nobg">
        <?php echo $error; ?>
      </div>
    </div>
    <?php endif; ?> 


    <div class="tr">
      <div class="th_nobg"></div>
      <div class="td_nobg">
      <button type="submit" onclick="if(!onConfirmClick()) return false;">Login</button>
      </div>
    </div>

  </div>
</form>
