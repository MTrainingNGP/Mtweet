<?php
   include 'config.php';

   if (!isset($_SESSION['id'])) {
		# code...
		session_destroy();
		header('location:login.php');
	}
	
   $id = $_GET['delete_id'];
  
   $sqlDelete = mysql_query("DELETE FROM messages where id='".$id."'");

   if($sqlDelete)
   {
       header("location:profile.php");
   }
   
 ?>