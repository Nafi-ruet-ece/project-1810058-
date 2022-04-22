<?php
include "connection2.php";
include "config.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login - php inventory management system</title>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" href="css/bootstrap-responsive.min.css"/>
    <link rel="stylesheet" href="css/matrix-login.css"/>
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet"/>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
    <link rel="stylesheet"href="LOGIN3Style.css">

</head>
<body>
<div class="center">
    <h1>login</h1>
   <form method="post">
    <div class=txt_field>
        <input type="text"required name="username">
        <span></span>

        <label>username</label>
    </div>

     <div class=txt_field>
        <input type="password"required name="password">
       
        <span></span>
        <label>password</label>
    </div>
    <div class="pass">Forgot password?</div>
    <input type="submit" name="submit" value="login">
    <div class="signup_link">Not a member?<a href="#">signup</a>
    </div>
</form>
                </div>
            
    <?php
    if(isset($_POST["submit"]))
    {
    	$username=mysqli_real_escape_string($link,$_POST["username"]);
    	$password=mysqli_real_escape_string($link,$_POST["password"]);
    	$count=0;
    	$res=mysqli_query($link,"select * from registration2 where username='$username'&&password='$password'");
    	$count=mysqli_num_rows($res);
        if ($count>0)
        {   
             $d=$_POST['username'];
    session_start();

    $_SESSION['user'] = $d;
  
    
            ?>

            <script type="text/javascript">
                window.location="indox.php";
            </script>
            <?php

        }
        else{
            ?>
            <div class="alert alert-danger">
           Invalid user or password,or account blocked by admin.
</div>
            <?php


        }
    	}
      ?>
</div>

<script src="js/jquery.min.js"></script>
<script src="js/matrix.login.js"></script>
</body>

</html>
