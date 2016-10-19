<?php
print_r($_POST);
	if (isset($_POST['submit'])) {
		$passdecry=md5($_POST['password']);
		echo $query="select id from users where (email=".$_POST['email']." && password=".$passdecry.")";
		$result=mysql_query($query);

		if (!$result){
			echo "<script>alert('please check login data')</script>";
		}
		else{
			$res=mysql_fetch_assoc($result);
			$_SESSION['id']=$res['id'];
		}
	}
?>
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
</head>
<body>

<section style="background-color: #F0FFFF">

  <div class="container" style="width: 400px; margin-top: 10%;  background-color: #E0B880">
  <form method="post" action="" id="login_form">
  <p class='text-center' style="font-size: 30px">LOGIN FORM</p>
      <div class="form-group">
      <label for="exampleInputEmail1">Email address</label>
      <input type="email" class="form-control" id="exampleInputEmail1" name="email" placeholder="Email">
  </div>
  <div class="form-group">
     <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name='password'>
  </div>
  <input type="submit" class="btn btn-default" name="submit" value='submit'>
  <button type="submit" class="btn btn-default pull-right">Back</button>
    </form>
  </div>
</section>



</body>
</html>

