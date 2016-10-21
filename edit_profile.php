<?php
require_once("config.php");
$id=$_REQUEST['id'];
print_r($_REQUEST);
if($_POST['submit'])
	{
             $file_path = 'photo/';
                   $file = $file_path . basename( $_FILES['image']['name']);
                   move_uploaded_file($_FILES['image']['tmp_name'], $file); 

			 $name = $_POST['name'];
			 $email = $_POST['email'];
			 $mobile = $_POST['mobile'];
			 $img = 'photo/' . basename($_FILES["image"]["name"]);

			

			$insert = mysql_query("UPDATE users SET name='".$name."',email='".$email."',mobile='".$mobile."', img='".$img."' WHERE id='".$id."'");
            //$update_image = mysql_query("UPDATE users SET image='".$img."' WHERE id='".$id."'");
					if(mysql_query($insert))
					{
						echo "<script> alert('successfully updated')</script>";
						//header('location:profile.php');
					}
					//else
					//////{
						//echo "<script> alert('Please try again')</script>";
					//}
            
			
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


<section style="background-color: #F0FFFF; ">

  <div class="container" style="width: 400px; border: 1px solid blue; background-color: #E0B880">
  <?php $sql = "SELECT * FROM users where id='".$id."'";
$result = mysql_query($sql);
$row=mysql_fetch_array($result);

?>
  
  <p class='text-center' style="font-size: 30px">REGISTRATION FORM</p>
  <form method="post" action="" enctype="multipart/form-data">
      <div class="form-group">
      <label for="name">NAME</label>
      <input type="text" class="form-control" id="name" placeholder="name" name='name' value="<?php echo $row['name']?>">
  </div>
  
  <div class="form-group">
     <label for="email">Email</label>
    <input type="email" class="form-control" id="email" placeholder="Email" name='email' value="<?php echo $row['email'] ?>">
  </div>
  <div class="form-group">
     <label for="exampleInputPassword1">Mobile</label>
    <input type="text" class="form-control" id="mobile" placeholder="Mobile" name='mobile' value="<?php echo $row['mobile']?>">
  </div>
  
  <div class="form-group">
      
      <label class="control-label">upload image</label>
 
      <input type="file" name="image">
      <img width='100px' height='90px' src="<?php echo $row['img'];?>" >
 
  </div>

  <button type="submit" class="btn btn-default" name='submit' value='submit' >Update</button>
  <a class="btn btn-default" href="profile.php">Back</a>


    </form>
    
  </div>
</section>
</body>
</html>

