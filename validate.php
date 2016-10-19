<?php
	function validate_reg()
	{
		$errors = array();
		if(empty($_POST['name']))
		{
			$errors['name'] = "Please enter Name";
		}
		elseif(!preg_match("#^[-A-Za-z' ]*$#",$_POST['name']))
		$errors['name'] = "Please enter valid name";

		if(empty($_POST['email']))
		{
			$errors['email'] = "Please enter Email Address";
		}
		elseif(!filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
		{
		$errors['email'] = "Please Enter Email Address";
		}

		if(empty($_POST['password']))
		{
			$errors['password'] = "Please enter Password";
		}
		if(empty($_POST['confirmpassword']))
		{
			$errors['confirmpassword'] = "Please enter confirm password";
		}

		if ($_POST['password'] != $_POST['confirmpassword'])
		{
			$errors['confirmpassword'] = "Password not matched";
		}
		if(empty($_POST['mobile']))
		{
			$errors['mobile'] = "Please enter Email Address";
		}
		return($errors);
	}
?>