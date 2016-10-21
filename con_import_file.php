<?php

	require_once("config.php");
	require_once("validate.php");
	if (!isset($_SESSION['id'])) {
		# code...
		session_destroy();
		header('location:login.php');
	}
	
	if(isset($_POST['import']))
	{
		
		
	define('CSV_PATH','/var/www/html/project/');

	 $csv_file = CSV_PATH ."test.csv";

	if (($handle = fopen($csv_file, "r")) !== FALSE) {
   fgetcsv($handle);   
   while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) 
   {
        $num = count($data);
        for ($c=0; $c < $num; $c++) {
          $data[$c];
          print_r($data[$c]."<br>");

        }
        exit();

		
   }
    fclose($handle);
		
		}
	}
		else
		{
			echo "Error occurred";
		}
	
	
	
?>
