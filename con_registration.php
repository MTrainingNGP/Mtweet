<?php
	require_once("config.php");
	require_once("validate.php");

	if(isset($_POST['submit']))
	{
		
		//print_r($_FILES);exit;
		$error = array();
		$error = validate_reg();
		if(empty($error))
		{
			
			//$target_dir = "images/";
			$target_file = 'uploads/' . basename($_FILES["image"]["name"]);
			//move_uploaded_file($_FILES["image"]["tmp_name"], $target_dir);
			 if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
			        echo "The file ". basename( $_FILES["image"]["name"]). " has been uploaded.";
			    } else {
			        echo "Sorry, there was an error uploading your file.";
			    }
			
			$insert = "insert into users set
					name = '".$_POST['name']."',
					email = '".$_POST['email']."',
					password =md5('".$_POST['password']."'),
					mobile = '".$_POST['mobile']."',
					image = '".$target_file."',
					created = now()";

					if(mysql_query($insert))
					{
						
						echo "<script> alert('Registered successfully please login')</script>";
					}
					else
					{
						echo "<script> alert('Registration Failed Please try again')</script>";
					}

			
		}
	}
	else
	{
		echo "<script> alert('Please submit form')</script>";
	}
?>
