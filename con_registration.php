<?php
	
	require_once("config.php");
	require_once("validate.php");
	if(isset($_POST['submit']))
	{
		echo 'hello';
		$error = array();
		$error = validate_reg();
		if(empty($error))
		{
			echo "hello1";
			$file_path = 'photo/';
                   $file = $file_path . basename( $_FILES['image']['name']);
                   move_uploaded_file($_FILES['image']['tmp_name'], $file); 
			
			$insert = "insert into users set
					name = '".$_POST['name']."',
					email = '".$_POST['email']."',
					password =md5('".$_POST['password']."'),
					mobile = '".$_POST['mobile']."',                             
					img = '".$file."',
					created = now()";
				
					if(mysql_query($insert))
					{
						echo "<script> alert('Registered successfully please login')</script>";
						header('location:profile.php');
					}
					else
					{
						echo "<script> alert('Registration Failed Please try again')</script>";
					}
            
			
		}
	}
?>
