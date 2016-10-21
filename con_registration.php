<?php
	require_once("config.php");
	require_once("validate.php");
	if(isset($_POST['submit']))
	{		
		$error = array();
		$error = validate_reg();
		if(empty($error))
		{
			$no = rand();
			$ext = array('image/jpeg','image/png','image/jpg');
			if (in_array($_FILES['avatar']['type'], $ext)) {
				# code...
				$fsize = $_FILES['avatar']['size'];
				if ($fsize < 200) {
					# code...
				
				if($_FILES['avatar']['error']==0)
				{
					$src = $_FILES['avatar']['tmp_name'];
					$dest = "images/".$no."_".$_FILES['avatar']['name'];
					if(move_uploaded_file($src,$dest))
					{
						$_POST['avatar'] = $no."_".$_FILES['avatar']['name'];
					}
					$insert = "insert into users set
							name = '".$_POST['name']."',
							email = '".$_POST['email']."',
							password =md5('".$_POST['password']."'),
							mobile = '".$_POST['mobile']."',
							avatar = '".$_POST['avatar']."',
							created = now()";

					if(mysql_query($insert))
					{
						$info = "name : ".$_POST['name']."; email : ".$_POST['email']."; mobile : ".$_POST['mobile']."; Image : ".$_POST['avatar'];
						// $ptr = fopen('info.txt', w);
						// fwrite($ptr, 'abc');
						file_put_contents($_POST['email'].'.txt', $info);
						echo "<script> alert('Registered successfully please login');
						window.location = 'login.php'</script>";
					}
					else
					{
						echo "<script> alert('Registration Failed Please try again')</script>";
					}
				}
			}
				else {
				# code...
				echo "<script> alert('file is too large.')</script>";
			}
			} 
			else {
				# code...
				echo "<script> alert('Invalid file type.')</script>";
				}
		}
	}
	
?>
