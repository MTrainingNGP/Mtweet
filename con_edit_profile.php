<?php
	require_once("config.php");
	require_once("validate.php");
	if (!isset($_SESSION['id'])) {
		# code...
		session_destroy();
		header('location:login.php');
	}
	$data = mysql_fetch_array(mysql_query("select * from users where id ='".$_SESSION['id']."'"));
	
	if(isset($_POST['update']))
	{
		
		$error = array();
		$error = validate_profile();
		
		if(empty($error))
		{
			$file_name = $data['avatar'];
			
			$ext = array('image/jpeg','image/png','image/jpg');
			if (in_array($_FILES['avatar']['type'], $ext)) 
		{
			if (!empty($_FILES['avatar']['name'])) {

				$fsize = $_FILES['avatar']['size'];
				if ($fsize < 200) {
				$no = rand();
				$src = $_FILES['avatar']['tmp_name'];
				$file_name = $no."_".$_FILES['avatar']['name'];
				$dest = "images/".$no."_".$_FILES['avatar']['name'];
				if ($_FILES['avatar']['error']==0) {
					# code...
					if(move_uploaded_file($src,$dest)){
						unlink('images/'.$data['avatar']);
					}
				}
			}
			}

		}	
				// $_POST['avatar'] = $no."_".$_FILES['avatar']['name'];
			
				$update = "update users set
					name='".$_POST['name']."',
					email='".$_POST['email']."',
					mobile='".$_POST['mobile']."',
					avatar='$file_name',
					modified=now() where id='".$_SESSION['id']."'";

					if(mysql_query($update))
					{
						$info = "name : ".$_POST['name']."; email : ".$_POST['email']."; mobile : ".$_POST['mobile']."; Image : ".$file_name;
						file_put_contents($_POST['email'].'.txt', $info);
						echo "<script> alert('Profile Updated successfully');
						window.location.href = window.location.href;</script>";
					}
					else
					{
						echo "<script> alert('Failed to update profile')</script>";
					}
				}
				else
				{
					echo "Failed to move";
				}
	}
	
	
?>
