<?php
require_once('config.php');
$id=$_SESSION['id'];
$query="select * from users where id='".$id."'";
$user_data=mysql_fetch_assoc(mysql_query($query));

if (!empty($user_data)) 
   {
	$data= "name : ".$user_data['name'].
			 ";email : ".$user_data['email'].
			 "; mobile : " .$user_data['mobile'].
			 "; image : ".$user_data['img'];

	$filename=$user_data['name'].".txt";

	print_r($data);
	// $file=fopen($filename,w);
	
	//foreach ($user_data as $key => $value) 


	file_put_contents($filename, $data);
	
	// fwrite($file, $data);
	// fclose($file);
}
header("Content-Disposition: attachment; filename='$filename'"); 
readfile ($filename); 
?>
