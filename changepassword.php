<?php 
error_reporting(E_ALL);
ini_set('display_errors', 1);
require_once("con_changepassword.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }
  </style>
  <script type="text/javascript"> function match(){
  	var pass= document.getElementById('password').value;
  	var confpass= document.getElementById('confirmpassword').value;
  	if (pass!==confpass || pass=="") {
  		alert("password and confirmpassword don't match");
  	}


  	}</script>
</head>
<body>

<section style="background-color: #F0FFFF; ">

  <div class="container" style="width: 400px; border: 1px solid blue; background-color: #E0B880">

  
  <p class='text-center' style="font-size: 30px">CHANGE PASSWORD</p>
  <form method="post" action="" enctype="multipart/form-data">
      <div class="form-group">
      <label for="name">Old Password</label>
      <input type="password" class="form-control" id="name" placeholder="old password" name='oldpassword' required >
  </div>
  
  <div class="form-group">
      <label for="name">New Password</label>
      <input type="password" class="form-control" id="name" placeholder="New password" name='newpassword' required >
  </div>
  <div class="form-group">
      <label for="name">Confirm New Password</label>
      <input type="password" class="form-control" id="name" placeholder="Confirm new password" name='confirmpassword' required >
  </div>
  
  
  <button type="submit" class="btn btn-default" name='change' value='change' > Change Password</button>
  <a class="btn btn-default" href="profile.php">Back</a>

    </form>
    
  </div>
</section>
</body>
</html>

