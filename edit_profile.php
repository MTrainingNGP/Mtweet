<?php require_once("con_edit_profile.php"); ?>
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

  
  <p class='text-center' style="font-size: 30px">EDIT PROFILE</p>
  <form method="post" action="" enctype="multipart/form-data">
      <div class="form-group">
      <label for="name">NAME</label>
      <input type="text" class="form-control" id="name" placeholder="name" name='name' required value="<?php echo isset($data['name'])?$data['name']:'';?>">
  </div>
  
  <div class="form-group">
     <label for="email">Email</label>
    <input type="email" class="form-control" id="email" placeholder="Email" name='email' required value="<?php echo isset($data['email'])?$data['email']:'';?>">
  </div>
  <div class="form-group">
     <label for="mobile">Mobile</label>
    <input type="text" class="form-control" id="mobile" placeholder="Mobile" name='mobile' required value="<?php echo isset($data['mobile'])?$data['mobile']:'';?>">
  </div>
  
  <div class="form-group">
              <label for="confirmpassword">Profile Pic</label>
              <div class="form-group">
              <img width="100px" height="100px" src="images/<?php echo $data['avatar'];?>"></img>
              <input class="form-control" type="file" name="avatar" /></div>
              <span >jpeg or png</span>
              <?php if(isset($errors['avatar'])){?>
                <div class="error">
              <?php echo $errors['avatar'];?>
                </div>
              <?php } ?>
    </div>
  <button type="submit" class="btn btn-default" name='update' value='update' > Update</button>
  <a class="btn btn-default" href="profile.php">Back</a>

    </form>
    
  </div>
</section>
</body>
</html>

