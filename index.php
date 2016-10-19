<?php

$sql=mysql_query("select * from messages");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Messages</title>
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
  nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">Dashboard</a>
    </div>
    
      <ul class="nav navbar-nav navbar-right">
        <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
        <li><a href="registration.php"><span class="glyphicon glyphicon-log-in"></span> Registration</a></li>


<nav class="navbar navbar-inverse">
</nav>

<section>
  <div class="container">
    <div class="row">
      <table class=" table table-responsive">
        <thead>
        
          <tr>
              <th>Name</th>
              <th>Messages..</th>
          </tr>    
        </thead>   
        <tbody>
          <tr class="success">
          <?php
        while($msgs=mysql_fetch_array($sql))
          {
            ?>
              <td> <?php echo $msgs['name'];?>
              
              </td>
              <td>
                <?php echo $msgs['message'];?>
              </td>
              <?php
           }
           ?>   
          </tr>    
        </tbody>
   </div>
  </div>
</section>



<!-- <footer class="container-fluid text-center">
  <p>Footer Text</p>

      
</footer> -->

</body>
</html>
