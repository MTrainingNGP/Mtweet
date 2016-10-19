<?php
	require_once("validate.php");
	if(isset($_POST['submit']))
	{
		$error = array();
		$error = validate_reg();
		if(!isset($error))
		{
			$insert = "insert into users set
					name = '".$_POST['name']."',
					email = '".$_POST['email']."',
					password =md5('".$_POST['password']."'),
					mobile = '".$_POST['mobile']."',
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