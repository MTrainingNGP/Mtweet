<?php 
    require_once("con_registration.php"); 
    $id = $_SESSION['id'];
    
    $sqlselectuser = mysql_query("SELECT * FROM users WHERE id = '".$id."'"); 
    $row = mysql_fetch_array($sqlselectuser);
    

    if($_POST['submit'])
    {
    $target_file = 'uploads/' . basename($_FILES["image"]["name"]);
    if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) 
    {
        echo "The file ". basename( $_FILES["image"]["name"]). " has been uploaded.";
    }
    else 
    {
        echo "Sorry, there was an error uploading your file.";
    }
        $update_image = mysql_query("UPDATE users SET image='".$target_file."'");
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

  
  <p class='text-center' style="font-size: 30px">REGISTRATION FORM</p>
  <form method="post" action="" enctype="multipart/form-data">
      <div class="form-group">
      <label for="name">NAME</label>
      <input type="text" class="form-control" id="name" placeholder="name" name='name' 
             value="<?php echo $row['name'];?>">
  </div>
  <div class="form-group">
     <label for="email">Email</label>
    <input type="email" class="form-control" id="email" placeholder="Email" name='email'
           value="<?php echo $row['email'];?>">
  </div>
  <div class="form-group">
     <label for="exampleInputPassword1">Mobile</label>
    <input type="text" class="form-control" id="mobile" placeholder="Mobile" name='mobile'
           value="<?php echo $row['mobile'];?>">
  </div>
  <div class="form-group">
    <img src="<?php echo $row['image'];?>" width="70px" height="70px">
  	<input type = "file" name = "image"/>
  </div>
  <button type="submit" class="btn btn-default" name='submit' value='submit' >Submit</button>
    </form>
    
  </div>
</section>
</body>
</html>