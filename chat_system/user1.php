<?php
include "config.php";
?>
<html lang="en">
<head>
  <title>Bootstrap Example</title>


  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet"type="text/css"href="style.css">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css>
  



  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <div class="col-lg-4">
  <h2>Basic database connection</h2>
  <form action="" name="form1" method="get">
    <div class="form-group">
      <label for="email">firstname</label>
      <input type="text" class="form-control" id="firstname" placeholder="Enter firstname" name="firstname">
    </div>
    <div class="form-group">
      <label for="pwd">lastname</label>
      <input type="text" class="form-control" id="lastname" placeholder="Enter lastname" name="lastname">
    </div>
    <div class="form-group">
      <label for="pwd">accountno</label>
      <input type="text" class="form-control" id="accountno" placeholder="Enter account no" name="accountno">
    </div>
    
    <div class="form-group">
      <label for="pwd">withdraw</label>
      <input type="text" class="form-control" id="withdraw" placeholder="input balance" name="withdraw">
    </div>
    
    <button type="submit" name="update" class="btn btn-default">update</button>
  
  
  </form>
</div>
</div>


  </div>

</body>







<?php
    
	$d=$_GET['lastname'];
	session_start();

	$_SESSION['user'] ='$d';
	if($d>13)
	{
		 echo '<a href="indox.php">Index Page</a>';
	}


?>