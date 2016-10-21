<?php

	require_once("config.php");
	require_once("validate.php");
	if (!isset($_SESSION['id'])) {
		# code...
		session_destroy();
		header('location:login.php');
	}
	
	if(isset($_POST['change']))
	{
		
		$error = array();
		$error = validate_changepass();
	
		if(empty($error))
		{
			$oldpass = mysql_result(mysql_query("select password from users where id='".$_SESSION['id']."'"),0);
		
			if($oldpass == md5($_POST['oldpassword'])) 
			{

				if($_POST['newpassword']== $_POST['confirmpassword'])
				{
						$chngpass = "update users set password='".md5($_POST['newpassword'])."' where id='".$_SESSION['id']."'";
						if(mysql_query($chngpass))
						{
							
							echo "<script> alert('Password change  successfully');
									window.location='logout.php';</script>";
						}
						else
						{
							echo "<script> alert('Failed to change password')</script>";
						}

				}
				
			}
		}
		else
		{
			echo "Error occurred";
		}
	}
	
	
?>
