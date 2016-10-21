<?php
include_once('config.php'); 
  echo ($_SESSION['id']);
	if (empty($_SESSION['id'])) {
		# code...
		session_destroy();
		header('location:login.php');
	}
	if(isset($_POST['btnSubmit']))
	{
		$msg = trim($_POST['new_msg']);
		//echo "hi";
		$sqlInsert = mysql_query("INSERT INTO messages VALUES('','".$_SESSION['id']."','".$msg."',NOW(),NOW())");
		if($sqlInsert)
		{
			echo "<script>alert('Message Submitted Successfully')</script>";
		}
	}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>User Profile</title>
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
      <li><a href="edit_profile.php?id=<?php echo $_SESSION['id']; ?>" ><span class="glyphicon glyphicon-log-in"></span> Edit</a></li>
      <li><a href="download.php?id=<?php echo $_SESSION['id']; ?>" ><span class="glyphicon glyphicon-log-in"></span> Download</a></li>
        <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="jumbotron">
  <div class="container text-center">
    <h4>Type your Message</h4>      
    <form name="submit_form" method="post" action="">
    	<div>
    		<textarea rows="5" cols="100" name="new_msg" maxlength="500"> </textarea>
    	</div>
    	<div>
    		<input type="submit" name="btnSubmit" value="Submit" id="btnSubmit">
    	</div>
    </form>
  </div>
</div>
  
<div class="container-fluid bg-3 text-center">    
  <h3>Your Recent Messages</h3><br>
  <div class="row">
    <div class="container text-center">
     	<div class="">
     		<table class="table table-responsive">
     			<tr>
     				<th>Messages</th>
     				<th colspan="2">Action</th>
     			</tr>
     			<?php
     				$sqlselect = mysql_query("select message,id from messages");
     				while($rows = mysql_fetch_array($sqlselect))
					{ ?>
     			<tr>
     				<td><?php echo $rows["message"]; ?></td>
     				<td><a href="edit.php?edit_id=<?php echo $rows["id"]; ?>">Edit</a></td>
     				<td><a href="delete.php?delete_id=<?php echo $rows["id"]; ?>" onclick="return confirm('Are you sure you want to delete this item?');">Delete</a></td>
     			</tr>
     			<?php
     				}
     			?>
     		</table>
     	</div>
    </div>
  </div>
</div><br>

<footer class="container-fluid text-center">
  <p>Footer Text</p>
</footer>

</body>
</html>

