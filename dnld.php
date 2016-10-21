<?php
	if (isset($_REQUEST['email'])) {
		# code...
		$file_name = $_REQUEST['email'].".txt";
		header('content-disposition:attachment; filename="profile_info.txt"');
		readfile("$file_name");
	} else {
		# code...
	}
	
?>