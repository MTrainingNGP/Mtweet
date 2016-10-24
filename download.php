<?php
  require_once('config.php');

if (!isset($_SESSION['id'])) {
		# code...
		session_destroy();
		header('location:login.php');
	}

	$sqlSelectUser = mysql_fetch_assoc((mysql_query("SELECT * FROM users WHERE id = '".$_SESSION['id']."'"));
		if (!empty($sqlSelectUser))
		{
			$filename=$sqlSelectUser['email'].".txt";

			foreach ($sqlSelectUser as $key => $value) 
			{
				$data.=$key.':'.$value.','.'';
			}

			header("Content-Disposition: attachment; filename='$filename'"); 
			readfile ($filename); 		
}

?>