<?php require_once("con_registration.php"); ?>
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
<div class="row"><div class="col-md-12">hello</div>  </div>
  <div class="container" style="width: 400px; border: 1px solid blue; background-color: #E0B880">

  <div class='row'>
  <div class='col-md-12 col-md-left-10'>
  <p class='text-center' style="font-size: 30px">REGISTRATION FORM</p>
      <div class="form-group">
      <label for="name">NAME</label>
      <input type="text" class="form-control" id="name" placeholder="name" name='name' required>
  </div>
  
  <div class="form-group">
     <label for="email">Email</label>
    <input type="email" class="form-control" id="email" placeholder="Email" name='email' required>
  </div>
  <div class="form-group">
     <label for="exampleInputPassword1">Mobile</label>
    <input type="text" class="form-control" id="mobile" placeholder="Mobile" name='mobile' required>
  </div>
  <div class="form-group">
     <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="password" placeholder="Password" name="password" required>
  </div>
  <div class="form-group">
     <label for="confirmpassword">Confirm Password</label>
    <input type="password" class="form-control" id="confirmpassword" placeholder="Confirm Password" name="confirmpassword" required>
  </div>
  <button type="submit" class="btn btn-default" onclick="match()">Submit</button>
  <button type="submit" class="btn btn-default pull-right">Back</button>

    </form>
    </div>
  </div>
  </div>
</section>
</body>
</html>

