<?php
include "connection2.php";
?>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <link rel="stylesheet"href="stylereg.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet"type="text/css"href="style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
   <link rel="stylesheet"href="registrationstyle.css">
</head>
<body>

<div class="container">
  <div class="col-lg-4">
    <div class="center">
  <h1>User Registration form</h1>
  <form action="" name="form1" method="post">
    <div class="txt_field">
      <label for="email">firstname</label>
      <input type="text" class="form-control" id="firstname"  name="firstname">
      <span></span>
    </div>
    <div class="txt_field">
      <label for="pwd">lastname</label>
      <input type="text" class="form-control" id="lastname"  name="lastname">
      <span></span>
    </div>
    <div class="txt_field">
      <label for="pwd">password</label>
      <input type="text" class="form-control" id="email"  name="username">
      <span></span>
    </div>
    <div class="txt_field">
      <label for="pwd">username</label>
      <input type="text"class="form-control" id="contact"  name="password">
      <span></span>
    </div>
    
    <div class="button"><button type="submit" name="submit" class="btn btn-default">insert</button></div>
    
  </form>
</div>
</div>
</div>







<?php
if(isset($_POST["insert"]))
{ 
mysqli_query($link,"insert into registration2 values('$_POST[firstname]','$_POST[lastname]','$_POST[password]','$_POST[username]')");
?>
<script type="text/javascript">
  window.location.href=window.location.href;
</script>
<?php


}
if(isset($_POST["delete"]))
{

  mysqli_query($link,"delete from table2 where firstname='$_POST[firstname]'") or die(mysqli_error[$link]);
  ?>
<script type="text/javascript">
  window.location.href=window.location.href;
</script>
<?php

}
if(isset($_POST["update"]))
{

  mysqli_query($link,"update table2 set contact='$a' where firstname='$_POST[firstname]'") or die(mysqli_error[$link]);
  ?>
<script type="text/javascript">
  window.location.href=window.location.href;
</script>
<?php

}

?>

</body>

</html>