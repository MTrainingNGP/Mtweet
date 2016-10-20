<?php
   include 'config.php';

   if (!isset($_SESSION['id'])) {
    # code...
    session_destroy();
    header('location:login.php');
  }

   
   $id = $_GET['edit_id'];
   
   if(isset($_POST['btnEdit']))
   { 
      $editmsg = trim($_POST['edit_msg']);
      $sqlUpdate = mysql_query("UPDATE messages SET message='".$editmsg."' where id='".$id."'");
   }
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Edit Message</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> 
  <link rel="stylesheet" type="text/css" href="css/profile.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <script>
  function moveBack()
   {
      location.href = 'profile.php';
   }
  </script>
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

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">Portfolio</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="jumbotron">
  <div class="container text-center">
    <h4>Edit your Message</h4>      
    <form name="submit_form" method="post" action="">
    	<div>
    		<textarea rows="5" cols="100" name="edit_msg" maxlength="500" id="txtMsg">
        <?php 
        if (isset($id))
        {
            $sqlSelect = mysql_query("Select message from messages where id = '".$id."'");
            $data = mysql_fetch_array($sqlSelect);
            echo $data['message'];
        }
?></textarea>
    	</div>
    	<div>
    		<input type="submit" name="btnEdit" value="Edit" id="btnEdit">
        <input type="button" name="btnBack" value="Back" id="btnBack" onclick="moveBack()">
    	</div>
    </form>
  </div>
</div>

<footer class="container-fluid text-center">
  <p>Footer Text</p>
</footer>

</body>
</html>

